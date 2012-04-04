<?php
/**
*
* captcha_qa [Bulgarian]
*
* @package language
* @version $Id$
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
	'CAPTCHA_QA'				=> 'Въпроси и отговори',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Този въпрос служи за улавяне на ботове и предотвратяване на спама.',
	'CONFIRM_QUESTION_WRONG'	=> 'Дадохте грешен отговор на въпроса.',

	'QUESTION_ANSWERS'			=> 'Отговори',
	'ANSWERS_EXPLAIN'			=> 'Въведете правилните отговори, по един на ред.',
	'CONFIRM_QUESTION'			=> 'Въпрос',

	'ANSWER'					=> 'Отговор',
	'EDIT_QUESTION'				=> 'Промяна на въпроса',
	'QUESTIONS'					=> 'Въпроси',
	'QUESTIONS_EXPLAIN'			=> 'For every form submission where you have enabled the Q&amp;A plugin, users will be asked one of the questions specified here. To use this plugin at least one question must be set in the default language. These questions should be easy for your target audience to answer but beyond the ability of a bot capable of running a Google™ search. Using a large and regularly changed set of questions will yield the best results. Enable the strict setting if your question relies on mixed case, punctuation or whitespace.',
	'QUESTION_DELETED'			=> 'Въпросът беше изтрит',
	'QUESTION_LANG'				=> 'Език',
	'QUESTION_LANG_EXPLAIN'		=> 'Езикък, на който са написани въпросът и неговите отговори.',
	'QUESTION_STRICT'			=> 'Стриктна проверка',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ако е включена, ще се прави разлика между главни и малки букви, като броят на интервалите също ще е от значение.',

	'QUESTION_TEXT'				=> 'Въпрос',
	'QUESTION_TEXT_EXPLAIN'		=> 'Въпросът, зададен на потребителя.',

	'QA_ERROR_MSG'				=> 'Please fill in all fields and enter at least one answer.',
	'QA_LAST_QUESTION'			=> 'You cannot delete all questions while the plugin is active.',

));
