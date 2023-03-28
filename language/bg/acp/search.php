<?php
/**
*
* acp_search [Bulgarian]
*
* @package language
* @version $Id: search.php 9438 2009-04-11 11:09:45Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'От тук можете да управлявате търсещата машина. След промяна на някои настройки може да се наложи да пресъздадете индекса за да влязат промените в действие.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'От тук можете да дефинирате кой бекенд ще бъде използван за индексирането на мнения и търсене. Някой настройки са идентични за всички бек ендове.',

	'COMMON_WORD_THRESHOLD'					=> 'Често употребявани думи',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Думи, които се съдържат в голям процент от всичките мнения ще бъдат идентифицирани като често използвани. Често използваните думи се игнорират от търсачката. Задай 0 за изключване. Във форума трябва да има повече от 100 мнения.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Сигурен ли сте, че искате да промените бекенда? След промяна ще трябва да създадете нов индекс за новия бекенд. Ако нямате намерение да се връщате към стария бекенд можете да го изтриете за да освободите ресурс.',
	'CONTINUE_DELETING_INDEX'				=> 'Продължи изтриването',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CONTINUE_INDEXING'						=> 'Продължи индексирането',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CREATE_INDEX'							=> 'Създай индекс',

	'DELETE_INDEX'							=> 'Изтрий индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Изтрий индекса в прогрес',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Търсачката се почиства. Това ще отнеме няколко минути.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext търсенето може да се използва само с версия MySQL4 или по-нова.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext индекси могат да бъдат използвани само с MyISAM или InnoDB таблици. MySQL 5.6.4 е задължителен за fulltext на InnoDB таблици.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общия брой на индексираните мнения',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Думи с най-малко толкова знаци ще бъдат индексирани за търсачката. Тази настойка може да се промени от администратора на сървъра или вашият хостинг провайдър.',
    'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Думи с най-много толкова знаци ще бъдат индексирани за търсачката. Тази настойка може да се промени от администратора на сървъра или вашият хостинг провайдър.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL fulltext търсенето може да се използва само с PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Обща бройка индексирани мнения',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL версия',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Текстово търсене Конфигурационен профил:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Минимална дължина на ключова дума',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Максимална дължина на ключова дума',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Търсенето изисква PostgreSQL версия 8.3 или по-висока.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Конфигурационният профил използван при речника и парсирането.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Думи с най-малко толкова знака ще бъдат включени при търсенето.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Думи с не повече от толкова знака ще бъдат включени при търсенето.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Конфигурирайте следните настройки за да се генерира Sphinx конфигурационен файл',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Път то директорията с данни',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Ще се използва за индексите и логовете. Директорията трябва да е извън директорията на сайта. (също така трябва да има накрая /)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Брой мнения в често обновяващият се делта индекс',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host-a на който sphinx search daemon (searchd) слуша. Оставете празно за localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Лимит на паметта на индексатора',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Тази стойност трябва да е със сигурност по-ниска от големината на RAM паммета на сървъра. Ако имате периодични проблеми със скоростта на сайта, проблема може да е че индексатора консумира прекалено много ресурси.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Брой мнения в главният индекс',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Порта на който sphinx search daemon (searchd) слуша. Оставете празно за да използвате порта по подразбиране Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx търсачката за phpBB поддържа само MySQL и PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx конфигурационен файл',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Генерираното съдържание на Sphinx конфигурационният файл. Тези данни трябв да се поставят в sphinx.conf, който се използва от sphinx search daemon. Заменете [dbuser] и [dbpassword] със съответните потребителско име и парола за базата данни.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Директорията за данни не е въведена. Моля дефинирайте пътя и изпратете отново.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Главни настройки',
	'GO_TO_SEARCH_INDEX'					=> 'Отиди на страницата за търсене',

	'INDEX_STATS'							=> 'Статистика',
	'INDEXING_IN_PROGRESS'					=> 'Индексиране...',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Индексират се мненията във форума. Това ще отнеме от няколко минути до няколко часа в зависимост от големината на форума.',

	'LIMIT_SEARCH_LOAD'						=> 'Лимит на търсене',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ако за една минута системата превиши тази стойност търсенето ще бъде изключено автоматично, 1.0 е равно на 100% използване на процесора. Функцията е активна само при UNIX базираните сървъри.',

	'MAX_SEARCH_CHARS'						=> 'Максимални знаци (за думи) индексирани от търсачката',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Думи с максимум знаци, които ще бъдат индексирани от търсачката.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Максимален размер ключови думи',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Въвдете 0 за неограничен брой.',
	'MIN_SEARCH_CHARS'						=> 'Минимални знаци (за думи) индексирани от търсачката',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Думи с минимум знаци, които ще бъдат индексирани от търсачката.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Минимални знаци автор',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Потребителите трябва да въведат минимум толкова знаци, при използването на търсене теми/мнения по автор.',

	'PROGRESS_BAR'							=> 'Прогрес',

	'SEARCH_GUEST_INTERVAL'					=> 'Flood контрол при гости',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Броя секунди, които гостите трябва да изчакат м/у различните търсения.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Всички мнения до ID %2$d вече са индексирани, от тях %1$d мнения бяха в тази стъпка.<br />',
		2	=> 'Всички мнения до ID %2$d вече са индексирани, от тях %1$d мнения бяха в тази стъпка.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Всички мнения до ID %2$d бяха изтрити от индекса за търсене, от тях %1$d мнения бяха в тази стъпка.<br />',
		2	=> 'Всички мнения до ID %2$d бяха изтрити от индекса за търсене, от тях %1$d мнения бяха в тази стъпка.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Скоростта на индексиране в момента е по %1$.1f мнения на секунда.<br />Индексирането е в процес…',
		2	=> 'Скоростта на индексиране в момента е по %1$.1f мнения на секунда.<br />Индексирането е в процес…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> 'Скоростта на изтриване в момента е по %1$.1f мнения на секунда.<br />Изтриването е в процес…',
		2	=> 'Скоростта на изтриване в момента е по %1$.1f мнения на секунда.<br />Изтриването е в процес…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Успешно са изтрити всички мнения.',
	'SEARCH_INDEX_REMOVED'					=> 'Успешно е изтрит индекса.',
	'SEARCH_INTERVAL'						=> 'Flood контрол при потребители',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Броя секунди, които потребителите трябва да изчакат м/у различните търсения.',
	'SEARCH_STORE_RESULTS'					=> 'Дължина на кеша при търсене',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кешираните резултати ще изтекат след това време, в секунди. Настрой на 0 ако искаш да изключиш кеширането на резултати.',
	'SEARCH_TYPE'							=> 'Начин на търсене',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ви позволява да избирате м/у начините на търсене в мненията. По подразбиране phpBB използва собствен метод.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вие сменихте начина на търсене. За да използвате новия метод трябва да създадете нов индекс.',

	'TOTAL_WORDS'							=> 'Индексирани думи',
	'TOTAL_MATCHES'							=> 'Индексирани връзки м/у думи',

	'YES_SEARCH'							=> 'Включи улесненията',
	'YES_SEARCH_EXPLAIN'					=> 'Пример за улеснение е търсенето на потребители.',
	'YES_SEARCH_UPDATE'						=> 'Включи обновяването',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Обновяване на индекса при изключено търсене.',
));
