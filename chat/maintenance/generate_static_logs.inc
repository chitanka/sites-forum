<?php
class StaticLogGenerator
{
	const MESSAGES_TABLE = 'ajax_chat_messages';
	const ARCHIVE_TABLE = 'ajax_chat_messages_all';
	const START_CHAT_DATE = '2008-01-05';
	const CHAT_BOT_ID = 2147483647;

	private $db;
	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function generateNewLogs()
	{
		$startDate = $this->archiveMessages();
		$today = date('Y-m-d');

		$this->generateFilesForPeriod($startDate, $today);

		if ($this->getYear($startDate) != $this->getYear($today)) {
			$this->generateIndexFile();
		} else {
			$this->generateYearIndexFile($this->getYear($startDate));
		}
	}

	private function archiveMessages()
	{
		$sql = 'SELECT id, dateTime FROM '.self::ARCHIVE_TABLE.' ORDER BY id DESC LIMIT 1';
		$row = $this->db->query($sql)->fetch();

		$sql = 'INSERT '.self::ARCHIVE_TABLE.' SELECT * FROM '.self::MESSAGES_TABLE.' WHERE id > '.$row['id'];
		$this->db->exec($sql);

		list($date) = explode(' ', $row['dateTime']);

		return $date;
	}


	public function generateFilesForPeriod($startDate, $endDate)
	{
		$this->initEmoticons();

		for ($curDate = $startDate; $curDate <= $endDate; $curDate = $this->getNextDay($curDate)) {
			$this->generateFile($curDate);
		}
	}

	private function generateFile($date)
	{
		$messages = $this->getMessages($date);

		$prevDay = $this->getPrevDay($date);
		if ($prevDay < self::START_CHAT_DATE) {
			$prevDay = '';
			$prevDayLink = '#';
		} else {
			$prevDayLink = '../../' . $this->getDateFile($prevDay);
		}

		$nextDay = $this->getNextDay($date);
		$nextDayLink = '../../' . $this->getDateFile($nextDay);

		$file = __DIR__.'/../logs/'.$this->getDateFile($date);
		$tpl = file_get_contents(dirname(__FILE__).'/static_log_day.tpl.html');
		myfile_put_contents($file, strtr($tpl, array(
			'[BASEDIR/]'         => '../../../',
			'[YEAR/]'            => $this->getYear($date),
			'[DATE/]'            => $this->getHumanDate($date),
			'[MESSAGES/]'        => $this->formatMessages($messages),
			'[PREV DAY LINK/]'   => $prevDayLink,
			'[PREV DAY/]'        => ($prevDay ? '« '. $this->getHumanDate($prevDay) : ''),
			'[NEXT DAY LINK/]'   => $nextDayLink,
			'[NEXT DAY/]'        => ($nextDay ? $this->getHumanDate($nextDay) .' »' : ''),
		)));

		return $file;
	}


	private function generateIndexFile()
	{
		$rowClass = 'even';
		$startYear = $this->getYear(self::START_CHAT_DATE);
		$endYear = date('Y');
		$links = array();
		for ($year = $startYear; $year <= $endYear; $year++) {
			$this->generateYearIndexFile($year);

			$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
			$links[] = sprintf('<dt class="%s"><a href="%d/index.html">%d</a></dt><dd></dd>',
				$rowClass, $year, $year);
		}

		$file = __DIR__.'/../logs/index.html';
		$tpl = file_get_contents(dirname(__FILE__).'/static_log_index.tpl.html');
		myfile_put_contents($file, strtr($tpl, array(
			'[BASEDIR/]' => '../',
			'[LIST/]'    => '<dl>'. implode("\n", $links) . '</dl>',
		)));

		return $file;
	}


	private function generateYearIndexFile($year)
	{
		$data = array();
		$usersByDay = $this->getUsersByDay($year);

		$rowClass = 'even';
		$curDate = "$year-01-01";
		if ($curDate < self::START_CHAT_DATE) {
			$curDate = self::START_CHAT_DATE;
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
						$this->getRoleClass($userData['userRole']),
						$this->getUserNameClass($userData['userName']),
						$userData['userName'],
						$userData['count']);
				}
				$users = implode(', ', $users);
			}

			$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
			$data[] = sprintf('<dt class="%s"><a href="%s">%s</a></dt><dd class="%s">%s</dd>',
				$rowClass,
				'../' . $this->getDateFile($curDate),
				$this->getHumanDate($curDate),
				$rowClass,
				$users);
			$curDate = $this->getNextDay($curDate);
		} while ($curDate <= $endDate);

		$file = __DIR__.'/../logs/'.$year.'/index.html';
		$tpl = file_get_contents(dirname(__FILE__).'/static_log_year.tpl.html');
		myfile_put_contents($file, strtr($tpl, array(
			'[BASEDIR/]' => '../../',
			'[YEAR/]' => $year,
			'[LIST/]' => '<dl>'. implode("\n", $data) . '</dl>',
		)));

		return $file;
	}


	private function formatMessages($messages)
	{
		$out = '';
		$rowClass = 'rowEven';
		foreach ($messages as $message) {
			$rowClass = $rowClass == 'rowEven' ? 'rowOdd' : 'rowEven';
			$out .= sprintf('<div id="m%s" class="%s"><time><a href="#m%s">(%s)</a></time> %s</div>'."\n",
				$message['id'],
				$rowClass,
				$message['id'],
				$this->getHumanDate($message['dateTime']),
				$this->formatMessageText($message));
		}

		return $out;
	}


	private function formatMessageText($message)
	{
		$message['text'] = htmlspecialchars($message['text']);
		$message = $this->replaceCommand($message);
		$text = $message['text'];
		$text = $this->replaceEmoticons($text);
		$text = $this->replaceBbCode($text);

		if ($this->isChatBot($message['userRole'])) {
			$class = 'chatBotMessage';
			if ($this->isLoginMessage($message)) {
				$class .= ' login';
			}
			$text = sprintf('<span class="%s">%s</span>', $class, $text);
		}

		$userName = $message['userName'] ? $this->formatUsername($message) .': ' : '';

		return $userName . $text;
	}

	private function formatUsername($message)
	{
		return sprintf('<span class="%s %s">%s</span>',
			$this->getRoleClass($message['userRole']),
			$this->getUserNameClass($message['userName']),
			$message['userName']);
	}



	private function isChatBot($roleId)
	{
		return $roleId == 4;
	}

	private function getRoleClass($roleId)
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


	private function getUserNameClass($userName)
	{
		return strtr($userName, array('.' => '_', ' ' => '_'));
	}

	private function getMessages($date)
	{
		$sql = 'SELECT * FROM '.self::ARCHIVE_TABLE.'
			WHERE channel = 0 AND dateTime LIKE "'.$date.'%"';

		$messages = array();
		foreach ($this->db->query($sql)->fetchAll() as $row) {
			if ( ! $this->isSecretMessage($row)) {
				$messages[] = $row;
			}
		}

		return $messages;
	}


	private function getUsersByDay($year)
	{
		$sql = 'SELECT DISTINCT DATE_FORMAT(dateTime, "%Y-%m-%d") day, userName, userRole, COUNT(*) count
			FROM '.self::ARCHIVE_TABLE.'
			WHERE channel = 0 AND userId != '.self::CHAT_BOT_ID.' AND dateTime LIKE "'.$year.'%"
			GROUP BY day, userName
			ORDER BY day, count DESC, userName';

		$users = array();
		foreach ($this->db->query($sql)->fetchAll() as $row) {
			$users[$row['day']][] = $row;
		}

		return $users;
	}


	private function isSecretMessage($message)
	{
		$commands = array('/who', '/where', '/priv', '/query', '/list', '/invite', '/uninvite', '/error', '/delete', '/fake', '/ban', '/unban', '/ignore', '/channel', '/kick');
		foreach ($commands as $command) {
			if (strpos($message['text'], $command) === 0) {
				return true;
			}
		}

		return false;
	}


	private function isLoginMessage($message)
	{
		return strpos($message['text'], '/log') === 0;
	}


	private function replaceCommand($message)
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
				$text = sprintf('<span class="action">%s %s</span>', $this->formatUsername($message), implode(' ', $parts));
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


	private $emoticons = array(
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
		':green tea:' => 'extra/green_tea.png',
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
	private $emoticonsInitialized = false;

	private function initEmoticons()
	{
		if ($this->emoticonsInitialized) {
			return;
		}

		foreach ($this->emoticons as $code => $image) {
			$root = '../../../img/emoticons';
			$this->emoticons[$code] = sprintf('<img src="%s/%s" alt="%s">', $root, $image, $code);
			if ($code[0] == ' ') {
				$this->emoticons[$code] = ' ' . $this->emoticons[$code];
			}
		}

		$this->emoticonsInitialized = true;
	}

	private function replaceEmoticons($text)
	{
		return ltrim(strtr(' '.$text, $this->emoticons));
	}

	private function replaceBbCode($text)
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


	private function getDateFile($date)
	{
		list($year, $month) = explode('-', $date);

		return "$year/$month/$date.html";
	}

	private function getPrevDay($date)
	{
		return date('Y-m-d', strtotime('-1 day', strtotime($date)));
	}


	private function getNextDay($date)
	{
		return date('Y-m-d', strtotime('+1 day', strtotime($date)));
	}

	private function getHumanDate($datetime)
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

	private function getYear($date)
	{
		list($year) = explode('-', $date);

		return $year;
	}

	public function printAllCommands()
	{
		foreach ($this->getAllUsedCommands() as $command => $example) {
			echo "$example\n";
		}
	}

	private function getAllUsedCommands()
	{
		$sql = 'SELECT * FROM '.self::ARCHIVE_TABLE;

		$commands = array();
		foreach ($this->db->query($sql)->fetchAll() as $row) {
			if ($row['text'][0] == '/') {
				list($command, $text) = explode(' ', $row['text']);
				if ( ! isset($commands[$command])) {
					$commands[$command] = $row['text'];
				}
			}
		}

		return $commands;
	}

}



function getDb()
{
	require __DIR__.'/../../config.php';
	$dsn = "mysql:dbname=$dbname;host=$dbhost";
	if ($dbport) {
		$dsn .= ";port=$dbport";
	}
	return new PDO($dsn, $dbuser, $dbpasswd);
}

function myfile_put_contents($filename, $data, $flags = null)
{
	if (is_dir($filename)) {
		return false;
	}
	make_parent($filename);
	$res = file_put_contents($filename, $data, $flags);
	chmod($filename, 0644);

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
