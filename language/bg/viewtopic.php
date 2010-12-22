<?php
/**
*
* viewtopic [Bulgarian]
*
* @package language
* @version $Id$
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
	'ATTACHMENT'						=> 'Прикачен файл',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Прикачването на файлове е изключено.',

	'BOOKMARK_ADDED'		=> 'Темата беше добавена в отметките.',
	'BOOKMARK_ERR'			=> 'Темата не успя да бъде добавена в отметките. Опитайте отново.',
	'BOOKMARK_REMOVED'		=> 'Темата беше премахната от отметките.',
	'BOOKMARK_TOPIC'		=> 'Добавяне в отметки',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Махане от отметки',
	'BUMPED_BY'				=> 'Последно вдигната от %1$s на %2$s.',
	'BUMP_TOPIC'			=> 'Вдигане на темата',

	'CODE'					=> 'Код',
	'COLLAPSE_QR'			=> 'Скриване на бързия отговор',

	'DELETE_TOPIC'			=> 'Изтриване на темата',
	'DOWNLOAD_NOTICE'		=> 'Нямате необходимите права, за да разглеждате прикачените файлове.',

	'EDITED_TIMES_TOTAL'	=> 'Последната промяна е направена от %1$s на %2$s. Мнението е било променяно %3$d пъти.',
	'EDITED_TIME_TOTAL'		=> 'Последната и единствена промяна е направена от %1$s на %2$s.',
	'EMAIL_TOPIC'			=> 'Пращане на писмо на приятел',
	'ERROR_NO_ATTACHMENT'	=> 'Посоченият прикачен файл вече не съществува.',

	'FILE_NOT_FOUND_404'	=> 'Файлът <strong>%s</strong> не съществува.',
	'FORK_TOPIC'			=> 'Копиране на темата',
	'FULL_EDITOR'			=> 'Пълен редактор',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				=> 'Смяна на „Обявление“',
	'MAKE_GLOBAL'				=> 'Смяна на „Глобална“',
	'MAKE_NORMAL'				=> 'Смяна на „Обикновена“',
	'MAKE_STICKY'				=> 'Смяна на „Важна“',
	'MAX_OPTIONS_SELECT'		=> 'Може да изберете до <strong>%d</strong> отговора',
	'MAX_OPTION_SELECT'			=> 'Може да изберете само един отговор',
	'MISSING_INLINE_ATTACHMENT'	=> 'Прикаченият файл <strong>%s</strong> вече не съществува',
	'MOVE_TOPIC'				=> 'Преместване на темата',

	'NO_ATTACHMENT_SELECTED'=> 'Не сте избрали прикачени файлове.',
	'NO_NEWER_TOPICS'		=> 'Няма по-нови теми във форума.',
	'NO_OLDER_TOPICS'		=> 'Няма по-стари теми във форума.',
	'NO_UNREAD_POSTS'		=> 'В темата няма непрочетени мнения.',
	'NO_VOTE_OPTION'		=> 'Трябва да изберете отговор при гласуването.',
	'NO_VOTES'				=> 'Няма гласове',

	'POLL_ENDED_AT'			=> 'Анкетата е приключила на %s',
	'POLL_RUN_TILL'			=> 'Анкетата ще продължи до %s',
	'POLL_VOTED_OPTION'		=> 'Гласувахте за това',
	'PRINT_TOPIC'			=> 'Преглед за печат',

	'QUICK_MOD'				=> 'Инструменти за бърза модерация',
	'QUICKREPLY'			=> 'Бърз отговор',
	'QUOTE'					=> 'Цитиране на',

	'REPLY_TO_TOPIC'		=> 'Отговор на темата',
	'RETURN_POST'			=> '%sОбратно към мнението%s',

	'SHOW_QR'				=> 'Бърз отговор',
	'SUBMIT_VOTE'			=> 'Гласуване',

	'TOTAL_VOTES'			=> 'Брой гласове',

	'UNLOCK_TOPIC'			=> 'отключване на темата',

	'VIEW_INFO'				=> 'Информация за мнението',
	'VIEW_NEXT_TOPIC'		=> 'Следваща тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Предишна тема',
	'VIEW_RESULTS'			=> 'Резултати',
	'VIEW_TOPIC_POST'		=> 'едно мнение',
	'VIEW_TOPIC_POSTS'		=> '%d мнения',
	'VIEW_UNREAD_POST'		=> 'Първо непрочетено мнение',
	'VISIT_WEBSITE'			=> 'Сайт',
	'VOTE_SUBMITTED'		=> 'Гласът ви беше записан.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
