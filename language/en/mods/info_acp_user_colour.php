<?php
/** 
*
* 
* @package language [English]
* @version $Id: info_acp_user_colour.php, v 1.0.2 2009/07/14 12:53:34  Exp $
* @copyright (c) 2009 mtrs
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

// Adding the permissions
$lang = array_merge($lang, array(
		'USER_COLOUR'							=> 'Username colour',
		'USER_COLOUR_EXPLAIN'					=> 'Save colour after changing default group again',
		'USER_COLOUR_CHANGE'					=> 'Username colour changes',
		'USER_COLOUR_CHANGE_EXPLAIN'			=> 'Setting NO prevents default group colour change',
		'LOG_USER_COLOUR_CHANGE'				=> '<strong>User “%1$s” username colour changed </strong><br />» from “%2$s” to “%3$s”',
		'LOG_USER_COLOUR_LOCKED'				=> '<strong>User “%1$s” username colour locked against default group colour change</strong>',
		'USERNAME_COLOUR_CHANGE'				=> 'Username colour change',
		'SIMILAR_COLOUR_CHECK'					=> 'Similar username colour control',
		'SIMILAR_COLOUR_CHECK_EXPLAIN'			=> 'Euclidean distance between allowed and disallowed colours. Decrease this distance to allow more similar username colours. Valid range is between 0 and 650. Enter 0 to disable similarity check.',
		'DISALLOWED_COLOURS'					=> 'Disallowed colours in usernames',
		'DISALLOWED_COLOURS_EXPLAIN'			=> 'Administrator and moderator username colours may not be allowed. Enter any additional colours Ex.: AA00FF,1133FF Maximum 255 characters. Administrators and moderators are not affected.',
		'REMOVE_USERNAME_COLOUR_MOD_INSTALL'	=> 'Please remove username colour MOD install file <strong>install_usercolour.php</strong>',
	));

?>