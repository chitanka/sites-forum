<?php
/**
*
* viewforum [Bulgarian]
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
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Важни съобщения',

	'FORUM_PERMISSIONS'		=> 'Права за форума',

	'ICON_ANNOUNCEMENT'		=> 'Важно съобщение',
	'ICON_STICKY'			=> 'Важна тема',

	'LOGIN_NOTIFY_FORUM'	=> 'You have been notified about this forum, please login to view it.',

	'MARK_TOPICS_READ'		=> 'Отбелязване на темите като прочетени',

	'NEW_POSTS_HOT'			=> 'Има нови мнения [ популярна ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Има нови мнения [ заключена ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Няма нови мнения [ популярна ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Няма нови мнения [ заключена ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Нямате права да четете темите в този форум.',
	'NO_UNREAD_POSTS_HOT'		=> 'Няма непрочетени мнения [ популярна ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Няма непрочетени мнения [ заключена ]',

	'POST_FORUM_LOCKED'		=> 'Форумът е заключен',

	'TOPICS_MARKED'			=> 'Темите във форума бяха отбелязани като прочетени.',

	'UNREAD_POSTS_HOT'		=> 'Непрочетени мнения [ популярна ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочетени мнения [ заключена ]',

	'VIEW_FORUM'			=> 'Преглед на форума',
	'VIEW_FORUM_TOPIC'		=> 'Една тема',
	'VIEW_FORUM_TOPICS'		=> '%d теми',
));
