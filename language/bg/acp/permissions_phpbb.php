<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Bulgarian]
*
* @package language
* @version $Id: permissions_phpbb.php 8911 2008-09-23 13:03:33Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACL_CAT_ACTIONS'		=> 'Действия',
	'ACL_CAT_CONTENT'		=> 'Съдържание',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Други',
	'ACL_CAT_PERMISSIONS'	=> 'Права',
	'ACL_CAT_PM'			=> 'Лични съобщения',
	'ACL_CAT_POLLS'			=> 'Анкети',
	'ACL_CAT_POST'			=> 'Мнения',
	'ACL_CAT_POST_ACTIONS'	=> 'Мнения действия',
	'ACL_CAT_POSTING'		=> 'Публикуване',
	'ACL_CAT_PROFILE'		=> 'Профил',
	'ACL_CAT_SETTINGS'		=> 'Настройки',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Теми действия',
	'ACL_CAT_USER_GROUP'	=> 'Потребители и Групи',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=>'Може да преглежда профили',
	'ACL_U_CHGNAME'		=>'Може да променя потребителско име',
	'ACL_U_CHGPASSWD'	=>'Може да променя паролата си',
	'ACL_U_CHGEMAIL'	=>'Може да променя email адреса си',
	'ACL_U_CHGAVATAR'	=>'Може да сменя аватара си',
	'ACL_U_CHGGRP'		=>'Може да променя групата по подразбиране',
	'ACL_U_CHGPROFILEINFO'	=> 'Може да променя профилна информация',

	'ACL_U_ATTACH'		=>'Може да прикачва файлове',
	'ACL_U_DOWNLOAD'	=>'Може да сваля файлове',
	'ACL_U_SAVEDRAFTS'	=>'Може да записва чернови',
	'ACL_U_CHGCENSORS'	=>'Може да изключва цензурата на думи',
	'ACL_U_SIG'			=>'Може да използва сигнатура',
	'ACL_U_EMOJI'		=> 'Може да използва емоджи и богат текст в заглавието на теми',

	'ACL_U_SENDPM'		=>'Може да изпраща лични съобщения',
	'ACL_U_MASSPM'		=>'Може да изпраща лични съобщения до много потребители или цяла група',
	'ACL_U_MASSPM_GROUP'=> 'Може да изпраща съобщения до групи',
	'ACL_U_READPM'		=>'Може да чете лични съобщения',
	'ACL_U_PM_EDIT'		=>'Може да променя собствените си лични съобщения',
	'ACL_U_PM_DELETE'	=>'Може да изтрива личните си съобщения',
	'ACL_U_PM_FORWARD'	=>'Може да пренасочва личните си съобщения',
	'ACL_U_PM_EMAILPM'	=>'Може да праща лични съобщения (email)',
	'ACL_U_PM_PRINTPM'	=>'Може да принтира лични съобщения',
	'ACL_U_PM_ATTACH'	=>'Може да прикачва файлове към лични съобщения',
	'ACL_U_PM_DOWNLOAD'	=>'Може да сваля файлове от лични съобщения',
	'ACL_U_PM_BBCODE'	=>'Може да използва BBCode в лични съобщения',
	'ACL_U_PM_SMILIES'	=>'Може да използва усмивки в лични съобщения',
	'ACL_U_PM_IMG'		=>'Може да използва [img] BBCode таг в лични съобщения',
	'ACL_U_PM_FLASH'	=>'Може да използва  [flash] BBCode таг в лични съобщения',

	'ACL_U_SENDEMAIL'	=>'Може да изпраща email адреси',
	'ACL_U_SENDIM'		=>'Може да изпраща моментални съобщения',
	'ACL_U_IGNOREFLOOD'	=>'Може да игнорира flood лимита',
	'ACL_U_HIDEONLINE'	=>'Може да се скрива от он-лайн статуса',
	'ACL_U_VIEWONLINE'	=>'Може да вижда кой е на линия',
	'ACL_U_SEARCH'		=>'Може да използва търсенето',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=>'Може да преглежда форум',
	'ACL_F_LIST_TOPICS' => 'Може да чете теми',
	'ACL_F_READ'		=>'Може да чете форум',
	'ACL_F_POST'		=>'Може да публикува нова тема',
	'ACL_F_REPLY'		=>'Може да отговаря в теми',
	'ACL_F_ICONS'		=>'Може да използва икони в мнение/тема',
	'ACL_F_ANNOUNCE'	=>'Може да публикува Важни теми',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Може да публикува глобални Важни теми',
	'ACL_F_STICKY'		=>'Може да публикува Закачени теми',

	'ACL_F_POLL'		=>'Може да създава анкети',
	'ACL_F_VOTE'		=>'Може да гласува в анкети',
	'ACL_F_VOTECHG'		=>'Може да променя съществуващи анкети',

	'ACL_F_ATTACH'		=>'Може да прикачва файлове',
	'ACL_F_DOWNLOAD'	=>'Може да сваля файлове',
	'ACL_F_SIGS'		=>'Може да използва подпис',
	'ACL_F_BBCODE'		=>'Може да използва BBCode',
	'ACL_F_SMILIES'		=>'Може да използва усмивки',
	'ACL_F_IMG'			=>'Може да използва [img] BBCode таг',
	'ACL_F_FLASH'		=>'Може да използва [flash] BBCode таг',

	'ACL_F_EDIT'		=>'Може да променя собствените си мнения',
	'ACL_F_DELETE'		=>'Може да изтрива собствените си мнения',
	'ACL_F_SOFTDELETE'	=> 'Може да изтрива собствените си мнения (с опция за връщане)<br /><em>Модератори, които имат права за одобрение на мнения, могат да възстановяват такива изтрити мнения.</em>',
	'ACL_F_USER_LOCK'	=>'Може да заключва собствените си мнения',
	'ACL_F_BUMP'		=>'Може да избутва теми',
	'ACL_F_REPORT'		=>'Може да сигнализира за мнения/теми',
	'ACL_F_SUBSCRIBE'	=>'Може да се абонира',
	'ACL_F_PRINT'		=>'Може да принтира теми',
	'ACL_F_EMAIL'		=>'Може да изпраща теми (email)',

	'ACL_F_SEARCH'		=>'Може да търси във форума',
	'ACL_F_IGNOREFLOOD' =>'Може да игнорира flood лимита',
	'ACL_F_POSTCOUNT'	=>'Брояч на мнения<br /><em>Настройките ще повлияят на новите мнения.</em>',
	'ACL_F_NOAPPROVE'	=>'Може да пише без одобрение',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=>'Може да променя мнения',
	'ACL_M_DELETE'		=>'Може да изтрива мнения',
	'ACL_M_SOFTDELETE'	=> 'Може да изтрива мнения (с възможност за връщане)<br /><em>Модератори, които имат права за одобрение на мнения, могат да възстановяват такива изтрити мнения.</em>',
	'ACL_M_APPROVE'		=>'Може да одобрява мнения',
	'ACL_M_REPORT'		=>'Може да затваря и изтрива сигнали',
	'ACL_M_CHGPOSTER'	=>'Може да променя автор на тема',

	'ACL_M_MOVE'	=>'Може да премества теми',
	'ACL_M_LOCK'	=>'Може да заключва теми',
	'ACL_M_SPLIT'	=>'Може да разделя теми',
	'ACL_M_MERGE'	=>'Може да съединява теми',

	'ACL_M_INFO'	=>'Може да преглежда детайли на мнение',
	'ACL_M_WARN'	=>'Може да слага предупреждения',
	'ACL_M_PM_REPORT'	=> 'Може да затваря и изтрива доклади за лични съобщения<br /><em>Тази опция се настройва глобално, не е форум базирана..</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=>'Може да управлява бановете',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Може да променя настройките на форума/проверява за нови версии',
	'ACL_A_SERVER'		=> 'Може да променя сървър/комуникационните настройки',
	'ACL_A_JABBER'		=> 'Може да променя Jabber настройките',
	'ACL_A_PHPINFO'		=> 'Може да преглежда php настройките',

	'ACL_A_FORUM'		=> 'Може да управлява форуми',
	'ACL_A_FORUMADD'	=> 'Може да добавя форуми',
	'ACL_A_FORUMDEL'	=> 'Може да изтрива форуми',
	'ACL_A_PRUNE'		=> 'Може да изчиства форуми',

	'ACL_A_ICONS'		=> 'Може да промяна иконите и усмивките в теми',
	'ACL_A_WORDS'		=> 'Може да променя цензура',
	'ACL_A_BBCODE'		=> 'Може да добавя нови BBCode тагове',
	'ACL_A_ATTACH'		=> 'Може да промяна настройките за прикачените файлове',

	'ACL_A_USER'		=> 'Може да управлява потребители',
	'ACL_A_USERDEL'		=> 'Може да изтрива/изчиства потребители',
	'ACL_A_GROUP'		=> 'Може да управлява групи',
	'ACL_A_GROUPADD'	=> 'Може да създава групи',
	'ACL_A_GROUPDEL'	=> 'Може да изтрива групи',
	'ACL_A_RANKS'		=> 'Може да управлява рангове',
	'ACL_A_PROFILE'		=> 'Може да добавя нови полета',
	'ACL_A_NAMES'		=> 'Може да управлява забранените имена',
	'ACL_A_BAN'			=> 'Може да контролира бановете',

	'ACL_A_VIEWAUTH'	=> 'Може да преглежда правата',
	'ACL_A_AUTHGROUPS'	=> 'Може да променя правата за индивидуални групи',
	'ACL_A_AUTHUSERS'	=> 'Може да променя правата за индивидуални потребители',
	'ACL_A_FAUTH'		=> 'Може да променя форум клас правата',
	'ACL_A_MAUTH'		=> 'Може да променя модератор клас правата ',
	'ACL_A_AAUTH'		=> 'Може да променя админ клас правата',
	'ACL_A_UAUTH'		=> 'Може да променя потребител клас правата',
	'ACL_A_ROLES'		=> 'Може да управлява ролите',
	'ACL_A_SWITCHPERM'	=> 'Може да използва други права',

	'ACL_A_STYLES'		=> 'Може да управлява стиловете',
	'ACL_A_EXTENSIONS'	=> 'Може да управлява разширения',
	'ACL_A_VIEWLOGS'	=> 'Може да преглежда логовете',
	'ACL_A_CLEARLOGS'	=> 'Може да изчиства логовете',
	'ACL_A_MODULES'		=> 'Може да управлява модулите',
	'ACL_A_LANGUAGE'	=> 'Може да управлява езиковите пакети',
	'ACL_A_EMAIL'		=> 'Може да изпраща масов email',
	'ACL_A_BOTS'		=> 'Може да управлява ботовете',
	'ACL_A_REASONS'		=> 'Може да управлява причините за сигнал',
	'ACL_A_BACKUP'		=> 'Може да бек-ъпва/възстановява база данни',
	'ACL_A_SEARCH'		=> 'Може да променя настройките за търсене',
));
