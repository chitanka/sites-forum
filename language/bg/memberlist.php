<?php
/**
*
* memberlist [Bulgarian]
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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Най-активен форум',
	'ACTIVE_IN_TOPIC'		=> 'Най-активна тема',
	'ADD_FOE'				=> 'Добавяне като неприятел',
	'ADD_FRIEND'			=> 'Добавяне като приятел',
	'AFTER'					=> 'след',

	'ALL'					=> 'всички',

	'BEFORE'				=> 'преди',

	'CC_EMAIL'				=> 'Получаване на копие на това писмо',
	'CONTACT_USER'			=> 'Връзка с',

	'DEST_LANG'				=> 'Език',
	'DEST_LANG_EXPLAIN'		=> 'Изберете подходящ език (ако е наличен) за получателя на писмото.',

	'EMAIL_BODY_EXPLAIN'	=> 'Писмото ще бъде изпратено като чист текст, затова не включвайте HTML или BBCode. Получателят ще има възможност да отговори на личния ви адрес.',
	'EMAIL_DISABLED'		=> 'Sorry but all e-mail related functions have been disabled.',
	'EMAIL_SENT'			=> 'Писмото беше изпратено.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Писмото ще бъде изпратено като чист текст, затова не включвайте HTML или BBCode. Обърнете внимание, че информацията за темата вече е включена в писмото. Получателят ще има възможност да отговори на личния ви адрес.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid e-mail address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Трябва да въведете текст на писмото.',
	'EMPTY_MESSAGE_IM'		=> 'Трябва да въведете текст на съобщението.',
	'EMPTY_NAME_EMAIL'		=> 'Трябва да въведете истинското име на получателя.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Трябва да въведете тема на писмото.',
	'EQUAL_TO'				=> 'точно',

	'FIND_USERNAME_EXPLAIN'	=> 'Use this form to search for specific members. You do not need to fill out all fields. To match partial data use * as a wildcard. When entering dates use the format <kbd>YYYY-MM-DD</kbd>, e.g. <samp>2004-02-29</samp>. Use the mark checkboxes to select one or more usernames (several usernames may be accepted depending on the form itself) and click the Select Marked button to return to the previous form.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another e-mail at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Водач на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Hide member search',

	'IM_ADD_CONTACT'		=> 'Добавяне на контакт',
	'IM_AIM'				=> 'Необходимо е да разполагате с AOL Instant Messenger, за да може да ползвате тази функция.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Download application',
	'IM_ICQ'				=> 'Обърнете внимание, че потребителят може да е избрал да не получава мигновени съобщения.',
	'IM_JABBER'				=> 'Обърнете внимание, че потребителят може да е избрал да не получава мигновени съобщения.',
	'IM_JABBER_SUBJECT'		=> 'Това е автоматично съобщение, не му отговаряйте! Имате съобщение от %1$s при %2$s.',
	'IM_MESSAGE'			=> 'Вашето съобщение',
	'IM_MSNM'				=> 'Необходимо е да разполагате с Windows Messenger, за да може да ползвате тази функция.',
	'IM_MSNM_BROWSER'		=> 'Браузърът ви не поддържа това.',
	'IM_MSNM_CONNECT'		=> "MSNM is not connected.\nYou have to connect to MSNM to continue.",
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'			=> 'Липсва подходяща информация за връзка с потребителя.',
	'IM_NO_JABBER'			=> 'Форумната система не поддържа мигновени съобщения чрез Jabber. Необходимо е да разполагате с инсталиран клиент за Jabber, за да се свържете с потребителя.',
	'IM_RECIPIENT'			=> 'Получател',
	'IM_SEND'				=> 'Изпращане на съобщение по ',
	'IM_SEND_MESSAGE'		=> 'Изпращане на съобщение по ',
	'IM_SENT_JABBER'		=> 'Съобщението ви до %1$s беше изпратено.',
	'IM_USER'				=> 'Изпращане на мигновено съобщение',

	'LAST_ACTIVE'				=> 'Последна активност',
	'LESS_THAN'					=> 'по-малко от',
	'LIST_USER'					=> 'един потребител',
	'LIST_USERS'				=> '%d потребители',
	'LOGIN_EXPLAIN_LEADERS'		=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'The board requires you to be registered and logged in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'The board requires you to be registered and logged in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'The board requires you to be registered and logged in to view profiles.',

	'MORE_THAN'				=> 'повече от',

	'NO_EMAIL'				=> 'Не ви е разрешено да пращате електронни писма на този потребител.',
	'NO_VIEW_USERS'			=> 'Не ви е разрешено да преглеждате списъка с потребителите или техните профили.',

	'ORDER'					=> 'Подредба',
	'OTHER'					=> 'Друго',

	'POST_IP'				=> 'Пуснато от айпи адрес/домейн',

	'REAL_NAME'				=> 'Име на получателя',
	'RECIPIENT'				=> 'Получател',
	'REMOVE_FOE'			=> 'Премахване на неприятел',
	'REMOVE_FRIEND'			=> 'Премахване на приятел',

	'SELECT_MARKED'			=> 'Вземане на избраните',
	'SELECT_SORT_METHOD'	=> 'Избиране на метод за сортиране',
	'SEND_AIM_MESSAGE'		=> 'Изпращане на съобщение по AIM',
	'SEND_ICQ_MESSAGE'		=> 'Изпращане на съобщение по ICQ',
	'SEND_IM'				=> 'Мигновено съобщение',
	'SEND_JABBER_MESSAGE'	=> 'Изпращане на съобщение по Jabber',
	'SEND_MESSAGE'			=> 'Съобщение',
	'SEND_MSNM_MESSAGE'		=> 'Изпращане на съобщение по  MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Изпращане на съобщение по YIM',
	'SORT_EMAIL'			=> 'Е-поща',
	'SORT_LAST_ACTIVE'		=> 'Последна актовност',
	'SORT_POST_COUNT'		=> 'Брой мнения',

	'USERNAME_BEGINS_WITH'	=> 'Името започва с',
	'USER_ADMIN'			=> 'Администриране',
	'USER_BAN'				=> 'Блокиране',
	'USER_FORUM'			=> 'Потребителска статистика',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'На линия',
	'USER_PRESENCE'			=> 'Board presence',

	'VIEWING_PROFILE'		=> 'Преглед на профил — %s',
	'VISITED'				=> 'Последно посещение',

	'WWW'					=> 'Сайт',
));
