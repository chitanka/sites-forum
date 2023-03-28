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
	'CONFIG_NOT_EXIST'					=> 'Конфигурационната настройка "%s" неочаквано не съществува.',

	'GROUP_NOT_EXIST'					=> 'Групата "%s" неочаквано не съществува.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Приложи зависимостите на %s.',
	'MIGRATION_DATA_DONE'				=> 'Инсталирани данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Инсталиране на данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_RUNNING'			=> 'Инсталиране на данни: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Миграциите са вече ефективно инсталирани (пропускане): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Нещо се обърка. Опитахме се да възстановим направените промени преди тази грешка, но трябва да проверите форума за грешки:<br><br>%s',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Миграцията "%1$s" не е изпълнима, липса миграция "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Миграцията "%s" не е инсталирана.',
	'MIGRATION_NOT_VALID'				=> '%s е невалидна миграция.',
	'MIGRATION_SCHEMA_DONE'				=> 'Мигриране на схемата: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Мигриране на схемата е в процес: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Мигриране на схемата е в процес: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Върнати данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Връщане на данни: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Връщане на данни: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Върната схема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Върната схема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Връщане на данни: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Миграцията е невалидна. An if statement helper is missing a condition.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Миграцията е невалидна. An if statement helper is missing a valid call to a migration step.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Миграцията е невалидна. A custom callable function could not be called.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Миграцията е невалидна. Неопределен тип за миграция.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Миграцията е невалидна. Неопределен инструмент за миграция.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Миграцията е невалидна. Неопределен метод за миграция.',

	'MODULE_ERROR'						=> 'Грешка при създаване на модул: %s',
	'MODULE_EXISTS'						=> 'Модула вече съществува: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Няколко модула с този родител вече съществуват: %s. Опитайте се да използвате преди/след ключове.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Инфо файл на модул не съществува: %2$s',
	'MODULE_NOT_EXIST'					=> 'Модула не съществува: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Не може да се определи идентификатора на родителският модул: %s',
	'PERMISSION_NOT_EXIST'				=> 'Настройката "%s" не съществува.',

	'ROLE_NOT_EXIST'					=> 'Ролята "%s" не съществува.',
));
