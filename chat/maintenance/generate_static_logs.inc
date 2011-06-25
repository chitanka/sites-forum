<?php
// Show all errors:
error_reporting(E_ALL);

// phpBB initialization:
define('IN_PHPBB', true);
$phpbb_root_path = dirname(__FILE__).'/../../';
define('AJAX_CHAT_PATH', dirname(__FILE__).'/../');

$phpEx = 'php';
require($phpbb_root_path.'common.'.$phpEx);

define('START_CHAT_DATE', '2008-01-05');
define('CHAT_BOT_ID', 2147483647);
define('MESSAGES_TABLE', 'ajax_chat_messages');
define('ARCHIVE_TABLE', 'ajax_chat_messages_all');


function generateNewLogs()
{
	$startDate = archiveMessages();
	$today = date('Y-m-d');

	generateFilesForPeriod($startDate, $today);

	if (getYear($startDate) != getYear($today)) {
		generateIndexFile();
	} else {
		generateYearIndexFile(getYear($startDate));
	}
}

function archiveMessages()
{
	global $db;

	$sql = 'SELECT id, dateTime FROM '.ARCHIVE_TABLE.' ORDER BY id DESC LIMIT 1';
	$row = $db->sql_fetchrow($db->sql_query($sql));

	$sql = 'INSERT '.ARCHIVE_TABLE.' SELECT * FROM '.MESSAGES_TABLE.' WHERE id > '.$row['id'];
	$db->sql_query($sql);

	list($date) = explode(' ', $row['dateTime']);

	return $date;
}


function generateFilesForPeriod($startDate, $endDate)
{
	initEmoticons();

	for ($curDate = $startDate; $curDate <= $endDate; $curDate = getNextDay($curDate)) {
		generateFile($curDate);
	}
}

function generateFile($date)
{
	$messages = getMessages($date);

	$prevDay = getPrevDay($date);
	if ($prevDay < START_CHAT_DATE) {
		$prevDay = '';
		$prevDayLink = '#';
	} else {
		$prevDayLink = '../../' . getDateFile($prevDay);
	}

	$nextDay = getNextDay($date);
	$nextDayLink = '../../' . getDateFile($nextDay);

	$file = AJAX_CHAT_PATH.'logs/'.getDateFile($date);
	$tpl = file_get_contents(dirname(__FILE__).'/static_log_day.tpl.html');
	myfile_put_contents($file, strtr($tpl, array(
		'[BASEDIR/]' => '../../../',
		'[YEAR/]' => getYear($date),
		'[DATE/]' => getHumanDate($date),
		'[MESSAGES/]' => formatMessages($messages),
		'[PREV DAY LINK/]' => $prevDayLink,
		'[PREV DAY/]' => ($prevDay ? '« '. getHumanDate($prevDay) : ''),
		'[NEXT DAY LINK/]' => $nextDayLink,
		'[NEXT DAY/]' => ($nextDay ? getHumanDate($nextDay) .' »' : ''),
	)));

	return $file;
}


function generateIndexFile()
{
	$rowClass = 'even';
	$startYear = getYear(START_CHAT_DATE);
	$endYear = date('Y');
	$links = array();
	for ($year = $startYear; $year <= $endYear; $year++) {
		generateYearIndexFile($year);

		$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
		$links[] = sprintf('<dt class="%s"><a href="%d/index.html">%d</a></dt><dd></dd>',
			$rowClass, $year, $year);
	}

	$file = AJAX_CHAT_PATH.'logs/index.html';
	$tpl = file_get_contents(dirname(__FILE__).'/static_log_index.tpl.html');
	myfile_put_contents($file, strtr($tpl, array(
		'[BASEDIR/]' => '../',
		'[LIST/]' => '<dl>'. implode("\n", $links) . '</dl>',
	)));

	return $file;
}


function generateYearIndexFile($year)
{
	$data = array();
	$usersByDay = getUsersByDay($year);

	$rowClass = 'even';
	$curDate = "$year-01-01";
	if ($curDate < START_CHAT_DATE) {
		$curDate = START_CHAT_DATE;
	}
	$endDate = "$year-12-31";
	if ($endDate > date('Y-m-d')) {
		$endDate = date('Y-m-d');
	}
	do {
		if (empty($usersByDay[$curDate])) {
			$users = '';
		} else {
			$users = array();
			foreach ($usersByDay[$curDate] as $userData) {
				$users[] = sprintf('<span class="%s %s">%s</span>&nbsp;×%d',
					getRoleClass($userData['userRole']),
					getUserNameClass($userData['userName']),
					$userData['userName'],
					$userData['count']);
			}
			$users = implode(', ', $users);
		}

		$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
		$data[] = sprintf('<dt class="%s"><a href="%s">%s</a></dt><dd class="%s">%s</dd>',
			$rowClass,
			'../' . getDateFile($curDate),
			getHumanDate($curDate),
			$rowClass,
			$users);
		$curDate = getNextDay($curDate);
	} while ($curDate <= $endDate);

	$file = AJAX_CHAT_PATH.'logs/'.$year.'/index.html';
	$tpl = file_get_contents(dirname(__FILE__).'/static_log_year.tpl.html');
	myfile_put_contents($file, strtr($tpl, array(
		'[BASEDIR/]' => '../../',
		'[YEAR/]' => $year,
		'[LIST/]' => '<dl>'. implode("\n", $data) . '</dl>',
	)));

	return $file;
}


function formatMessages($messages)
{
	$out = '';
	$rowClass = 'rowEven';
	foreach ($messages as $message) {
		$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
		$out .= sprintf('<div id="m%s" class="%s"><time><a href="#m%s">(%s)</a></time> %s</div>'."\n",
			$message['id'],
			$rowClass,
			$message['id'],
			getHumanDate($message['dateTime']),
			formatMessageText($message));
	}

	return $out;
}


function formatMessageText($message)
{
	$message['text'] = htmlspecialchars($message['text']);
	$message = replaceCommand($message);
	$text = $message['text'];
	$text = replaceEmoticons($text);
	$text = replaceBbCode($text);

	if (isChatBot($message['userRole'])) {
		$class = 'chatBotMessage';
		if (isLoginMessage($message)) {
			$class .= ' login';
		}
		$text = sprintf('<span class="%s">%s</span>', $class, $text);
	}

	$userName = $message['userName'] ? formatUsername($message) .': ' : '';

	return $userName . $text;
}

function formatUsername($message)
{
	return sprintf('<span class="%s %s">%s</span>',
		getRoleClass($message['userRole']),
		getUserNameClass($message['userName']),
		$message['userName']);
}



function isChatBot($roleId)
{
	return $roleId == 4;
}

function getRoleClass($roleId)
{
	switch((int) $roleId) {
		case 0:
			return 'guest';
		case 1:
			return 'user';
		case 2:
			return 'moderator';
		case 3:
			return 'admin';
		case 4:
			return 'chatBot';
		default:
			return 'default';
	}
}


function getUserNameClass($userName)
{
	return strtr($userName, array('.' => '_', ' ' => '_'));
}

function getMessages($date)
{
	global $db;

	$sql = 'SELECT * FROM '.ARCHIVE_TABLE.'
		WHERE channel = 0 AND dateTime LIKE "'.$date.'%"';
	$result = $db->sql_query($sql);

	$messages = array();
	while ($row = $db->sql_fetchrow($result)) {
		if ( ! isSecretMessage($row)) {
			$messages[] = $row;
		}
	}
	$db->sql_freeresult($result);

	return $messages;
}


function getUsersByDay($year)
{
	global $db;

	$sql = 'SELECT DISTINCT DATE_FORMAT(dateTime, "%Y-%m-%d") day, userName, userRole, COUNT(*) count
		FROM '.ARCHIVE_TABLE.'
		WHERE channel = 0 AND userId != '.CHAT_BOT_ID.' AND dateTime LIKE "'.$year.'%"
		GROUP BY day, userName
		ORDER BY day, count DESC, userName';
	$result = $db->sql_query($sql);

	$users = array();
	while ($row = $db->sql_fetchrow($result)) {
		$users[$row['day']][] = $row;
	}
	$db->sql_freeresult($result);

	return $users;
}


function isSecretMessage($message)
{
	$commands = array('/who', '/where', '/priv', '/query', '/list', '/invite', '/uninvite', '/error', '/delete', '/fake', '/ban', '/unban', '/ignore', '/channel', '/kick');
	foreach ($commands as $command) {
		if (strpos($message['text'], $command) === 0) {
			return true;
		}
	}

	return false;
}


function isLoginMessage($message)
{
	return strpos($message['text'], '/log') === 0;
}


function replaceCommand($message)
{
	$parts = explode(' ', $message['text']);
	$command = array_shift($parts);
	$putUsername = true;
	switch ($command) {
		case '/nick':
			$text = sprintf('%s вече се казва %s.', $parts[0], $parts[1]);
			break;
		case '/roll':
			$text = sprintf('%s хвърли %s и получи %s.', $parts[0], $parts[1], $parts[2]);
			break;
		case '/me':
		case '/action':
			$text = sprintf('<span class="action">%s %s</span>', formatUsername($message), implode(' ', $parts));
			$putUsername = false;
			break;
		case '/login':
			$text = sprintf('%s влезе в чата.', $parts[0]);
			break;
		case '/logout':
			if ( empty($parts[1])) {
				$string = '%s излезе от чата.';
			} else if ($parts[1] == 'Timeout') {
				$string = '%s излезе автоматично от чата (Изтичане на времето).';
			} else if ($parts[1] == 'IP') {
				$string = '%s излезе автоматично от чата (Грешен айпи адрес).';
			} else {
				$string = $message['text'];
			}
			$text = sprintf($string, $parts[0]);
			break;
		default:
			$text = $message['text'];
	}

	if ( ! $putUsername) {
		$message['userName'] = false;
	}

	$message['text'] = $text;

	return $message;
}


$emoticons = array(
	':)' => 'smile.png',
	':(' => 'sad.png',
	';)' => 'wink.png',
	';-)' => 'wink.png',
	':P' => 'razz.png',
	':D' => 'grin.png',
	':|' => 'plain.png',
	':O' => 'surprise.png',
	':?' => 'confused.png',
	' 8)' => 'glasses.png',
	'8o' => 'eek.png',
	' B)' => 'cool.png',
	':-)' => 'smile-big.png',
	':-(' => 'crying.png',
	':-*' => 'kiss.png',
	'O:-D' => 'angel.png',
	'&gt;:-D' => 'devilish.png',
	'}:-D' => 'devilish.png',
	':o)' => 'monkey.png',
	':idea:' => 'idea.png',
	':important:' => 'important.png',
	':help:' => 'help.png',
	':error:' => 'error.png',
	':warning:' => 'warning.png',
	':favorite:' => 'favorite.png',
	':coffee:' => 'extra/coffee.gif',
	':beer:' => 'extra/beer.gif',
	':redwine:' => 'extra/redwine.gif',
	':rakija:' => 'extra/rakija.png',
	':bloodymary:' => 'extra/bloody_mary.png',
	':agree:' => 'extra/agree.gif',
	':disagree:' => 'extra/disagree.gif',
	':rose:' => 'extra/rose.gif',
	':violet:' => 'extra/violet.gif',
	':apathe:' => 'extra/apathe.gif',
	':bzgf:' => 'extra/bzgf0.gif',
	':confused:' => 'extra/confused.gif',
	':flowers:' => 'extra/flowers.gif',
	':hih:' => 'extra/hih.gif',
	':melancholy:' => 'extra/melancholy.gif',
	':ou:' => 'extra/ou.gif',
	':pc:' => 'extra/pc1.gif',
	':closedeyes:' => 'extra/closedeyes.gif',
	':shame:' => 'extra/shame.gif',
	':wub:' => 'extra/wub.gif',
	':pirate:' => 'extra/pirate2.gif',
	':metalhorns:' => 'extra/metalhorns.png',
	':trophy:' => 'extra/trophy.gif',
	':choco:' => 'extra/choco.png',
);
$emoticonsInitialized = false;

function initEmoticons()
{
	global $emoticons, $emoticonsInitialized;

	if ($emoticonsInitialized) {
		return;
	}

	foreach ($emoticons as $code => $image) {
		$root = '../../../img/emoticons';
		$emoticons[$code] = sprintf('<img src="%s/%s" alt="%s">', $root, $image, $code);
		if ($code[0] == ' ') {
			$emoticons[$code] = ' ' . $emoticons[$code];
		}
	}

	$emoticonsInitialized = true;
}

function replaceEmoticons($text)
{
	global $emoticons;

	return ltrim(strtr(' '.$text, $emoticons));
}

function replaceBbCode($text)
{
	$text = ' ' . $text;
	$text = preg_replace('!(?<=[\s>])(https?://[^])\s<*]+[^])\s<*,.])!', '<a href="$1">$1</a>', $text);
	$text = preg_replace('!\[url=([^]]+)\](.+)\[/url\]!U', '<a href="$1">$2</a>', $text);
	$text = preg_replace('!\[url\](.+)\[/url\]!U', '<a href="$1">$1</a>', $text);

	$text = preg_replace('!\[color=([^]]+)\]!', '<span style="color:$1">', $text);

	$codes = array(
		'[b]' => '<b>', '[/b]' => '</b>',
		'[i]' => '<i>', '[/i]' => '</i>',
		'[code]' => '<code>', '[/code]' => '</code>',
		'[quote]' => '<q>', '[/quote]' => '</q>',
		'[img]' => '<img src="', '[/img]' => '">',
		'[/color]' => '</span>',
		"\n" => "<br>\n",
		'  ' => '&nbsp;&nbsp;',
	);
	$text = strtr($text, $codes);
	$text = ltrim($text);

	return $text;
}


function getDateFile($date)
{
	list($year, $month) = explode('-', $date);

	return "$year/$month/$date.html";
}

function getPrevDay($date)
{
	return date('Y-m-d', strtotime('-1 day', strtotime($date)));
}


function getNextDay($date)
{
	return date('Y-m-d', strtotime('+1 day', strtotime($date)));
}

function getHumanDate($datetime)
{
	if (empty($datetime)) {
		return '';
	}

	if (strpos($datetime, ' ') === false) {
		$date = $datetime;
		$time = '';
	} else {
		list($date, $time) = explode(' ', $datetime);
	}

	list($year, $month, $day) = explode('-', $date);

	return rtrim("$day.$month.$year $time");
}

function getYear($date)
{
	list($year) = explode('-', $date);

	return $year;
}

function printAllCommands()
{
	foreach (getAllUsedCommands() as $command => $example) {
		echo "$example\n";
	}
}

function getAllUsedCommands()
{
	global $db;

	$sql = 'SELECT * FROM '.ARCHIVE_TABLE;
	$result = $db->sql_query($sql);

	$commands = array();
	while ($row = $db->sql_fetchrow($result)) {
		if ($row['text'][0] == '/') {
			list($command, $text) = explode(' ', $row['text']);
			if ( ! isset($commands[$command])) {
				$commands[$command] = $row['text'];
			}
		}
	}
	$db->sql_freeresult($result);

	return $commands;
}


function myfile_put_contents($filename, $data, $flags = null)
{
	if (is_dir($filename)) {
		return false;
	}
	make_parent($filename);
	$res = file_put_contents($filename, $data, $flags);
	chmod($filename, 0644);

	echo $filename, "\n";

	return $res;
}

function make_parent( $filename )
{
	$dir = dirname( $filename );
	if ( file_exists( $dir ) ) {
		@touch( $dir );
	} else {
		mkdir( $dir, 0755, true );
	}
}
