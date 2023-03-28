<?php
/**
*
* acp_styles [Bulgarian]
*
* @package language
* @version $Id: styles.php 9046 2008-11-02 16:19:11Z nacholibre $
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> 'Управлението на стиловете става от тук. Стила се състои от шаблон, тема и imageset. Можете да променяте съществуващите стилове, изтривате, деактивирате, активирате, създавате или импортвате. Чрез функцията за преглед, можете да прегледате стила преди да го приложите на форума. Стила по подразбиране е маркиран с (*). На всеки стил е изведена информация колко хора го използват.',

	'CANNOT_BE_INSTALLED'						=> 'Не може да се добави',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Сигурен ли сте, че искате да премахнете избраните стилове?',
	'COPYRIGHT'									=> 'Авторско право',

	'DEACTIVATE_DEFAULT'						=> 'Стила по подразбиране не може да бъде деактивиран',
	'DELETE_FROM_FS'							=> 'Изтрий от файловата система',
	'DELETE_STYLE_FILES_FAILED'					=> 'Грешка при изтриване на файлове от стила "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Файловете за стила "%s" бяха успешно изтрити.',
	'DETAILS'									=> 'Детайли',

	'INHERITING_FROM'							=> 'Наследява от',
	'INSTALL_STYLE'								=> 'Инсталирай стила',
	'INSTALL_STYLES'							=> 'Инсталирай стиловете',
	'INSTALL_STYLES_EXPLAIN'					=> 'От тук можете да добавяте нови стилове.<br>Ако не може да намерите определен стил в списъка, проверете дали вече не е инсталиран. Ако не е инсталиран, проверете дали е качен успешно.',
	'INVALID_STYLE_ID'							=> 'Невалиден идентификационен номер (ID) на стила.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Няма намерени стилове.',
	'NO_UNINSTALLED_STYLE'						=> 'Не са немерени деинсталирани стилове.',

	'PURGED_CACHE'								=> 'Кеша беше изтрит.',

	'REQUIRES_STYLE'							=> 'Този стил изисква стила "%s" да бъде инсталиран.',

	'STYLE_ACTIVATE'							=> 'Активирай',
	'STYLE_ACTIVE'								=> 'Активен',
	'STYLE_DEACTIVATE'							=> 'Деактивирай',
	'STYLE_DEFAULT'								=> 'Направи по подразбиране',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Стила трябва първо да се активира преди да може да се направи по подразбиране',
	'STYLE_ERR_INVALID_PARENT'					=> 'Невалиден родителски стил',
	'STYLE_ERR_NAME_EXIST'						=> 'Стил с това име вече съществува.',
	'STYLE_ERR_STYLE_NAME'						=> 'Трябва да дадете име на този стил.',
	'STYLE_INSTALLED'							=> 'Стила "%s" беше инсталиран.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Връщане обратно към стиловете',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Инсталирай още стилове',
	'STYLE_NAME'								=> 'Име',
	'STYLE_NAME_RESERVED'						=> 'Стила "%s" не може да бъде инсталиран, защото името е резервирано.',
	'STYLE_NOT_INSTALLED'						=> 'Стила "%s" не беше инсталиран.',
	'STYLE_PATH'								=> 'Път до стила',
	'STYLE_UNINSTALL'							=> 'Деинсталирай',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Стила "%s" не може да бъде изтрит защото има други стилове, които го използват като родителски.',
	'STYLE_UNINSTALLED'							=> 'Стила "%s" беше премахнат успешно.',
	'STYLE_PHPBB_VERSION'						=> 'phpBB версия',
	'STYLE_USED_BY'								=> 'Използван от (включва и ботове)',
	'STYLE_VERSION'								=> 'Версия на стила',

	'UNINSTALL_PROSILVER'						=> 'Стила “prosilver” не може да бъде премахнат.',
	'UNINSTALL_DEFAULT'							=> 'Стила по подразбиране не може да бъде премахнат.',

	'BROWSE_STYLES_DATABASE'					=> 'Разгледай базата данни със стилове',
]);
