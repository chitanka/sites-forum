<?php
/**
*
* @package phpBB3
* @author mtrs 2009/07/14
* @version $Id$ 1.0.2 Username colour change MOD
* @copyrigh(c) 2009 mtrs
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* @ignore
*/

if (!defined('IN_PHPBB'))
{
	exit();
}

function user_colour_update($update_user_colour, $user_id)
{
	global $db, $config;

	//We update username colours
	$sql_ary = array(
			'topic_first_poster_colour'		=> $update_user_colour,
		);
		
	$sql = 'UPDATE ' . TOPICS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
		WHERE topic_poster = ' . $user_id;
	$db->sql_query($sql);
	

	$sql_ary = array(
			'topic_last_poster_colour'		=> $update_user_colour,
		);
		
	$sql = 'UPDATE ' . TOPICS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
		WHERE topic_last_poster_id = ' . $user_id;
	$db->sql_query($sql);
	
	$sql_ary = array(
			'forum_last_poster_colour'		=> $update_user_colour,
		);	
		
	$sql = 'UPDATE ' . FORUMS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
		WHERE forum_last_poster_id = ' . $user_id;
	$db->sql_query($sql);
	
	if ($config['newest_user_id'] == $user_id)
	{
		set_config('newest_user_colour', $update_user_colour, true);
	}
}

function validate_colour_code($color_code)
{	
	global $config, $auth;
	//We also sanitize user entered colour code by comparing with allowed characters
	$allowed_chars = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
	$color_code = str_split(strtoupper($color_code));
	
	//Controll colour code and replace invalid chars with ''
	for ($i = 0, $j = sizeof($color_code); $i < $j; $i++)
	{
		if(!in_array($color_code[$i], $allowed_chars))
		{
			$color_code[$i] = '';
		}
	}
	$color_code = implode("", $color_code);
	if (strlen($color_code) > 6)
	{
		$color_code = substr($color_code, 0, 6);
	}

	//If you allow users enter colour codes in an input box at ucp profile page, uncomment this if() clause, thus user input codes will be controlled against admin and mod group colours	
	/*
	if ($config['uccm_euclidean_distance'] && !$auth->acl_gets('a_', 'm_') && !$auth->acl_getf_global('m_'))
	{
		global $user, $phpbb_root_path, $phpEx;
		
		$user->add_lang('mods/user_colour');
		
		//If the Euclidean distance between two colours is below delta_limit, user cannot take the similar colour
		$euclidean_distance = $config['uccm_euclidean_distance'];
		
		//Obtain $dissallowed_colours list from config table which was entered at ACP. As a reminder: the default admin_colour = "AA0000", $mod_colour = "00AA00"
		$dissallowed_colours = ($config['uccm_disallowed_colours']) ? explode(",", $config['uccm_disallowed_colours']) : array();
		
		//get_admin_mod_group_colours() function calls default admin, global mod, bot group colours from groups table, thus we don't allow them
		$dissallowed_colours = array_unique(array_merge($dissallowed_colours, get_admin_mod_group_colours()));
		
		for ($i = 0, $j = sizeof($dissallowed_colours); $i < $j; $i++)
		{
			if (similar_colour($color_code, $dissallowed_colours[$i]) < $euclidean_distance)
			{			
				meta_refresh(4, append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=profile'));
				$message = $user->lang['SIMILAR_COLOUR_WARNING'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=profile') . '">', '</a>');
				trigger_error($message, E_USER_WARNING);
			}
		}
	}
	*/
	return $color_code;
}


//HEX to RGB convert function based on http://www.anyexample.com/programming/php/php_convert_rgb_from_to_html_hex_color.xml 
function html2rgb($color)
{
	//HEX web colour codes of usernames to be converted to RGB, thus will check colour similarity
    if ($color[0] == '#')
	{
        $color = substr($color, 1);
	}

    if (strlen($color) == 6)
	{
        list($r, $g, $b) = array($color[0].$color[1],
                                 $color[2].$color[3],
                                 $color[4].$color[5]);
    }
	elseif (strlen($color) == 3)
	{
        list($r, $g, $b) = array($color[0].$color[0], $color[1].$color[1], $color[2].$color[2]);
    }
	else
	{
        return false;
	}

    $r = hexdec($r); $g = hexdec($g); $b = hexdec($b);

    return array($r, $g, $b);
}

//http://www.compuphase.com/cmetric.htm is the reference for the formula below
//Calculate the weighted Euclidean distance in R'G'B'
// delta_euclidian = sqrt (3 x pow(deltaR', 2) + 4 x pow(deltaG', 2) + 2 x pow(deltaB', 2))
function similar_colour($color1, $color2)
{	
	//Calculte euclidian distance between HEX color1 and HEX color2
	$color1 = html2rgb($color1);
	$color2 = html2rgb($color2);	
	
	$DeltaR = ($color1[0] -  $color2[0]) * ($color1[0] -  $color2[0]);
	$DeltaG = ($color1[1] -  $color2[1]) * ($color1[1] -  $color2[1]);
	$DeltaB = ($color1[2] -  $color2[2]) * ($color1[2] -  $color2[2]);

	$delta_euclidian = sqrt((3 * $DeltaR) + (4 * $DeltaG) + (2 * $DeltaB));
		
	return round($delta_euclidian);
}


//Obtain administrator, global moderator and bots group colours from GROUPS_TABLE
function get_admin_mod_group_colours()
{
	global $db;
	
	$sql = 'SELECT group_colour, group_name
		FROM ' . GROUPS_TABLE . "
		WHERE group_type = " . GROUP_SPECIAL . "";
	$result = $db->sql_query($sql);
	
	$admin_mod_bot_colours = array();
	while ($row = $db->sql_fetchrow($result))
	{
		if ($row['group_name'] == "ADMINISTRATORS" || $row['group_name'] == "GLOBAL_MODERATORS" || $row['group_name'] == "BOTS")
		{
			$admin_mod_bot_colours[] = $row['group_colour'];
		}
	}
	$db->sql_freeresult($result);	

    return $admin_mod_bot_colours;
}

function get_colour_options()
{
	global $user, $auth, $config;

	$new_colour_list = array();

	//This is the raw colour list to be offered to users to select. Some colours may be removed if they are very similar to mod and admin colours
	//Delete any colour code from this list if you don't want users pick them 
	
	$colour_list = array(
					"FFFFFF", "FFFFBF", "FFFF80", "FFFF40", "FFFF00",
					"FFBFFF", "FFBFBF", "FFBF80", "FFBF40", "FFBF00",
					"FF80FF", "FF80BF", "FF8080", "FF8040", "FF8000",
					"FF40FF", "FF40BF", "FF4080", "FF4040", "FF4000",
					"FF00FF", "FF00BF", "FF0080", "FF0040", "FF0000",

					"BFFFFF", "BFFFBF", "BFFF80", "BFFF40", "BFFF00",
					"BFBFFF", "BFBFBF", "BFBF80", "BFBF40", "BFBF00",
					"BF80FF", "BF80BF", "BF8080", "BF8040", "BF8000",
					"BF40FF", "BF40BF", "BF4080", "BF4040", "BF4000",
					"BF00FF", "BF00BF", "BF0080", "BF0040", "BF0000",
					
					"80FFFF", "80FFBF", "80FF80", "80FF40", "80FF00",
					"80BFFF", "80BFBF", "80BF80", "80BF40", "80BF00",
					"8080FF", "8080BF", "808080", "808040", "808000",
					"8040FF", "8040BF", "804080", "804040", "804000",
					"8000FF", "8000BF", "800080", "800040", "800000",	
					
					"40FFFF", "40FFBF", "40FF80", "40FF40", "40FF00",
					"40BFFF", "40BFBF", "40BF80", "40BF40", "40BF00",
					"4080FF", "4080BF", "408080", "408040", "408000",
					"4040FF", "4040BF", "404080", "404040", "404000",
					"4000FF", "4000BF", "400080", "400040", "400000",	

					"00FFFF", "00FFBF", "00FF80", "00FF40", "00FF00",
					"00BFFF", "00BFBF", "00BF80", "00BF40", "00BF00",
					"0080FF", "0080BF", "008080", "008040", "008000",
					"0040FF", "0040BF", "004080", "004040", "004000",
					"0000FF", "0000BF", "000080", "000040", "000000",					
				);

	$user->add_lang('mods/user_colour');
	$s_colour_options = '<option value="" style="background-color: #FFFFFF">' . $user->lang['NO_COLOUR'] . '</option>';
	$s_colour_options .=	'<option value="'. $user->data['user_colour'] . '" style="background-color: #'. $user->data['user_colour'] . '" selected="selected">#'. $user->data['user_colour'] . '</option>';
	
	if ($config['uccm_euclidean_distance'] && !$auth->acl_gets('a_', 'm_') && !$auth->acl_getf_global('m_'))
	{			
		//If the Euclidean distance between two colours is below delta_limit, user cannot take the similar colour
		$euclidean_distance = $config['uccm_euclidean_distance'];
		
		//Obtain $dissallowed_colours list from config table which was entered at ACP. As a reminder: the default admin_colour = "AA0000", $mod_colour = "00AA00"
		$dissallowed_colours = ($config['uccm_disallowed_colours']) ? explode(",", $config['uccm_disallowed_colours']) : array();
		
		//get_admin_mod_group_colours() function calls default admin, global mod, bot group colours from groups table, thus we don't allow them		

		$dissallowed_colours = array_unique(array_merge($dissallowed_colours, get_admin_mod_group_colours()));		
		for ($i = 0, $j = sizeof($colour_list); $i < $j; $i++)
		{	
			for ($k = 0, $l = sizeof($dissallowed_colours); $k < $l; $k++)
			{
				if (similar_colour($colour_list[$i], $dissallowed_colours[$k]) < $euclidean_distance)
				{
					$new_colour_list[] = $colour_list[$i];
					break;
				}
			}
		}
		$tem_array = array();
		//We filter dissallowed colour codes in a new temp array
		for ($i = 0, $j = sizeof($colour_list); $i < $j; $i++)
		{		
			if (!in_array($colour_list[$i], $new_colour_list))
			{
				$tem_array[] = $colour_list[$i];
			}
		}
		$colour_list = $tem_array;		
	}
	
	for ($i = 0, $j = sizeof($colour_list); $i < $j; $i++)
	{	
		$s_colour_options .= '<option value="'.$colour_list[$i].'" style="background-color: #'.$colour_list[$i].'">#'.$colour_list[$i].'</option>';
	}
	
	return $s_colour_options;
}

?>