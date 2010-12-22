<?php
/** 
*
* 
* @package language [English]
* @version $Id: user_colour.php,v 1.0.2 2009/07/14 12:53:34  Exp $
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
		'USER_COLOUR'				=> 'Username colour',
		'USER_COLOUR_EXPLAIN'		=> 'You may need to save colour again after default group change',
		'NO_COLOUR'					=> '#No colour',
		'LOG_USER_COLOUR_CHANGE'	=> '<strong>User “%1$s” username colour changed </strong><br />» from “%2$s” to “%3$s”',
		'SIMILAR_COLOUR_WARNING'	=> 'You have selected a very similar username colour which has been used by administrators or moderators. Please select another colour.',
		'RETURN_UCP'				=> '%sReturn to the User Control Panel%s',
));

?>