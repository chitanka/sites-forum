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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Използвайте тази настройка, ако опцията се променя много често за да бъде ефективно кеширана.',
	'CLI_CONFIG_CURRENT'				=> 'Сегашната стойност, използвайте 0 и 1 за булеви стойности',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно изтрита конфигурация %s.',
	'CLI_CONFIG_NEW'					=> 'Нова стойност, използвайте 0 и 1 за булеви стойности',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Конфигурацията %s не съществува',
	'CLI_CONFIG_OPTION_NAME'			=> 'Име на конфигурационната опция',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Използвайте тази настройка, ако стойността трябва да се показва без нов ред накрая.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'С колко да се увеличи',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно увеличена опция %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не може да се настрой конфигурация %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно настроена конфигурация %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Показва списък с завършени и незавършени cron задачи',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Пуска всички готови cron задачи.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Име на задачата която да се изпълни',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Покажи всички инсталирани и налични миграции.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обновява базата данни като пуска миграции.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Върни миграция.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Изтрива конфигурационна опция',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Спира определено разширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Пуска определено разширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Намира миграция от която не зависи.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Поправя дървовидната структура на форуми и модули.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Връща конфигурационната стойност на определена опция',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличава конфигурационна стойност от тип число',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Показва всички разширение в базата данни и на файловата система.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Име на средата.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Пусни в Сигурен Режим (без разширения).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Пусни shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Изчиства определено разширение.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Показва типовете текст, които може да бъдат анализирани',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Налични анализатори:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Анализира запаметените текстове със сегашният text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип на текст за анализиране. Оставете празно за да се анализира всичко.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не запазвай нищо; само покажи какво ще се случи',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Най-ниското ID за обработка',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Най-високото ID за обработка',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизителен брой записи, които се обработват',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Стартирай анализирането там където спря предишното',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Задава конфигурационната стойност само ако старата е като новата',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Задава конфигурационната стойност',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Изтрий всички съществуващи миниатюри (thumbnails).',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Генерирай липсващите миниатюри (thumbnails).',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Пресъздай отново всички миниатюри (thumbnails).',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Провери дали форума е най-новата версия.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Име на разширението за проверка (all проверява всички разширения)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Пусни командата за проверка с кеш.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Пусни командата да проверява само стабилна или нестабилна версия.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Обновява старите хешове на пароли с хеширащият алгоритъм bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" трябва да се настрой на "стабилно" или "нестабилно".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активиране или деактивиране на потребителски акаунт.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Потребителското име на акаунта за активиране.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивирай потребителският акаунт',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Потребителя вече е активен.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Потребителя вече е неактивен.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Добави нов потребител.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Потребителско име на новият потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Парола на новият потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Имейл адрес на новият потребител',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Изпрати потвърдително писмо на новият потребител (по подразбиране не се изпраща)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Изтриване на потребителски акаунт.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Потребителско име на потребителят, които искате да изтриете',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Изтрий всички мнения на потребителя. Без тази опция, всички мнения на потребителя ще останат.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Почисти потребителските имена.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Разширението не може да се спре %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Разширението беше спряно успешно %s',
	'CLI_EXTENSION_DISABLED'			=> 'Разширението %s не е пуснато',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Разширението не може да се пусне %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Разширението се пусна успешно %s',
	'CLI_EXTENSION_ENABLED'				=> 'Разширението %s вече е пуснато',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Разширението %s не съществува',
	'CLI_EXTENSION_NAME'				=> 'Име на разширение',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Разширението не може да се изчисти %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Разширението се изчисти успешно %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Разширението не може да се актуализира %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Разширението се актуализира успешно %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Няма намерени разширение.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Разширението %s не може да бъде пускано.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Налично',
	'CLI_EXTENSIONS_DISABLED'			=> 'Спряно',
	'CLI_EXTENSIONS_ENABLED'			=> 'Активирано',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Структурата на форуми и модули беше преизчислена успешно',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Успешно са актуализирани хешовете на паролите с bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Има на миграция, включително и неймспейс (използвайте дясно наклонени черти).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Налични миграции',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Инсталирани миграции',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Показвай само наличните миграции',
	'CLI_MIGRATIONS_EMPTY'                  => 'Няма миграции.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Анализиране %1$s (диапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Анализиране %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Анализирано приключи успешно',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) изтрити.',
	'CLI_THUMBNAIL_DELETING'	=> 'Изтриване на миниатюри',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропуснати.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) генерирани.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Генериране на миниатюри',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Всички миниатюри бяха генерирани',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Всички миниатюри бяха изтрити',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Няма миниатюри за генериране',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Няма миниатюри за изтриване',

	'CLI_USER_ADD_SUCCESS'		=> 'Успешно добавен потребител %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Сигурни ли сте, че искате да изтриете ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Изчистване на потребителските имена',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Приключи успешно. Нямаше потребителски имена за почистване.',
		1	=> 'Приключи успешно. %d потребителско име почистено.',
		2	=> 'Приключи успешно. %d потребителски имена почистени.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' По желание можете да посочите име на cron задачата, която да върви само с определена крон задача.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активирайте акаунт или деактивирайте с опцията <info>--deactivate</info>.
По желание можете да изпратите имейл за потвърждение с опцията <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> '<info>%command.name%</info> командата добавя нов потребител:
Ако пуснете командата без опции, тя ще ви пита.
По желание можете да изпратите имейл за потвърждение с опцията <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Изчистването на потребителските имена, ще се увери, че всички потребителски име на са чисти.',
));
