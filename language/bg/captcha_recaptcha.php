<?php
/**
*
* recaptcha [English]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2009 phpBB Group
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
	'RECAPTCHA_LANG'				=> 'bg',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'За да използвате reCaptcha, трябва да си направите акаунт от тук <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Въведеният код е грешен.',
	'RECAPTCHA_NOSCRIPT'			=> 'Моля включете джаваскрипт (JavaScript) във вашият браузър за да се зареди въпроса.',

	'RECAPTCHA_PUBLIC'				=> 'Ключ на сайта (Site key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ключ можете да получите от тук <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Моля, използвайте reCAPTCHA v2 &gt; Invisible reCAPTCHA типове.',
	'RECAPTCHA_PRIVATE'				=> 'Секретен ключ (Secret Key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ключ можете да получите от тук <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Моля, използвайте reCAPTCHA v2 &gt; Invisible reCAPTCHA типове.',

	'RECAPTCHA_INVISIBLE'			=> 'Тази кептча всъщност не е видима за потребителите, а работи автоматично на фонов режим. За да сте сигурни че работи, малка икона в десният ъгъл с логото на google captcha ще се появи.',
));
