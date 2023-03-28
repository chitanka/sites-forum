<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink настойки',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink е услуга, която дискретно монетизира връзки, публикувани от потребители на вашия форум, без промяна в потребителското изживяване. Когато потребителите кликнат върху изходящите ви връзки към продукти или услуги и купуват нещо, търговците плащат на VigLink комисионна, от която дял е дарен за проекта phpBB. Избирайки да активирате VigLink и дарите приходи от проекта на phpBB, вие подкрепяте нашата организация с отворен код и гарантирате постоянната ни финансова сигурност.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Настройките могат да бъдат променяни по всяко време от “<a href="%1$s">VigLink настройки</a>” панела.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Вече няма да бъдете пренасочени към тази страница, след като изпратите предпочитаните опции по-долу, като кликнете върху бутона Изпращане.',
	'ACP_VIGLINK_ENABLE'			=> 'Включи VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Включва VigLink услугата.',
	'ACP_VIGLINK_EARNINGS'			=> 'Заявете приходите си (по изобр)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Можете да заявите приходите си, като се регистрирате за акаунт в VigLink Convert',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink услугите са спрени от phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Заявете приходите си',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Можете да заявите печалбите на вашия форум от монетизирани връзки от VigLink, вместо да дарите печалбите на проекта phpBB. За да управлявате настройките на вашия акаунт, регистрирайте акаунт „VigLink Convert“, като кликнете върху „Convert account“.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Преобразуване на акаунт',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink линка не може да бъде получен.',
));
