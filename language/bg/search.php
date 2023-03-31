<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* [Bulgarian]
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
	'ALL_AVAILABLE'			=> '(без ограничение)',
	'ALL_RESULTS'			=> '(без ограничение)',

	'DISPLAY_RESULTS'		=> 'Показване на резултатите като',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Търсенето даде един резултат',
		2	=> 'Търсенето даде %d резултата',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Търсенето даде повече от един резултат',
		2	=> 'Търсенето даде повече от %d резултата',
	),

	'GLOBAL'				=> 'Глобално обявление',

	'IGNORED_TERMS'			=> 'пренебрегнати',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следните думи в заявката ви бяха пренебрегнати, защото са прекалено общи: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Към мнението',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Трябва да влезете, за да може да прегледате собствените си мнения.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Трябва да влезете, за да може да прегледате собствените си непрочетени мнения.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Трябва да влезете, за да може да прегледате новите мнения от последното ви посещение.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Превишили сте ограничението от една дума при търсенето.',
		2	=> 'Превишили сте ограничението от %1$d думи при търсенето.',
	),

	'NO_KEYWORDS'			=> 'Въведете поне една дума, съдържаща не по-малко от %d и не повече от %d знака. Знакът за маска (*) не се брои.',
	'NO_RECENT_SEARCHES'	=> 'Няма скорошни търсения.',
	'NO_SEARCH'				=> 'Не вие е разрешено да претърсвате форумната система.',
	'NO_SEARCH_RESULTS'		=> 'Не бяха намерени резултати.',
	'NO_SEARCH_LOAD'		=> 'Sorry but you cannot use search at this time. The server has high load. Please try again later.',
	'NO_SEARCH_TIME'		=> array(
		// skip 1
		2	=> 'В момента търсенето е изключено. Изчакайте няколко минути и опитайте пак.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sorry but searching for unread posts has been disabled on this board.',
	'WORD_IN_NO_POST'		=> 'Думата <strong>%s</strong> не се среща в нито едно мнение.',
	'WORDS_IN_NO_POST'		=> 'Думите <strong>%s</strong> не се срещат в нито едно мнение.',

	'POST_CHARACTERS'		=> 'знака от мненията',
	'PHRASE_SEARCH_DISABLED'	=> 'Searching by exact phrase is not supported on this board.',

	'RECENT_SEARCHES'		=> 'Скорошни търсения',
	'RESULT_DAYS'			=> 'Ограничаване до последните',
	'RESULT_SORT'			=> 'Сортиране по',
	'RETURN_FIRST'			=> 'Показване на първите',
	'RETURN_FIRST_EXPLAIN'	=> 'Въведете 0, за да се покаже цялото мнение.',
	'GO_TO_SEARCH_ADV'	=> 'Обратно към разширеното търсене',

	'SEARCHED_FOR'				=> 'Търсене на',
	'SEARCHED_TOPIC'			=> 'Претърсвана тема',
	'SEARCHED_QUERY'			=> 'Заявка за търсене',
	'SEARCH_ALL_TERMS'			=> 'Търсене на всички думи или ползване на заявката, както е записана',
	'SEARCH_ANY_TERMS'			=> 'Търсене на коя да е от думите',
	'SEARCH_AUTHOR'				=> 'Търсене по автор',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Ползвайте <strong>*</strong> за търсене в части от имената.',
	'SEARCH_FIRST_POST'			=> 'само в първото мнение от тема',
	'SEARCH_FORUMS'				=> 'Търсене във форумите',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Изберете форума или форумите, които желаете да претърсите. Подфорумите се включват автоматично освен ако не ги изключите изрично отдолу.',
	'SEARCH_IN_RESULTS'			=> 'Претърсване на резултатите',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Сложете <strong>+</strong> пред думите, които искате да откриете, и <strong>-</strong> пред тези, които не трябва да се включват в резултатите.<br /> За да откриете коя да е дума от няколко възможни, сложете всички думи в скоби и ги разделете с <strong>|</strong>, напр. <kbd>(врат|шия)</kbd>.<br/> Ползвайте <strong>*</strong> за търсене в части от думите, напр. <kbd>*енчо</kbd> за <samp>Пенчо</samp> или <samp>Генчо</samp>.',
	'SEARCH_MSG_ONLY'			=> 'само в съдържанието',
	'SEARCH_OPTIONS'			=> 'Критерии за търсенето',
	'SEARCH_QUERY'				=> 'Заявка за търсенето',
	'SEARCH_SUBFORUMS'			=> 'Претърсване на подфорумите',
	'SEARCH_TITLE_MSG'			=> 'в заглавията и съдържанието',
	'SEARCH_TITLE_ONLY'			=> 'само в заглавията на темите',
	'SEARCH_WITHIN'				=> 'Търсене',
	'SORT_ASCENDING'			=> 'възходящо',
	'SORT_AUTHOR'				=> 'автор',
	'SORT_DESCENDING'			=> 'низходящо',
	'SORT_FORUM'				=> 'форум',
	'SORT_POST_SUBJECT'			=> 'заглавие на мнението',
	'SORT_TIME'					=> 'час',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Трябва да въведете поне един знак от името на автора.',
		2	=> 'Трябва да въведете поне %d знака от името на автора.',
	),
));
