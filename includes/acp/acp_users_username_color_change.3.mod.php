<?php
if ($update_user_colour !== false)
{
	include($phpbb_root_path . 'includes/functions_user_colour.' . $phpEx);
	$update_user_colour = validate_colour_code($update_user_colour);

	$sql_ary += array(
		'user_colour'		=> $update_user_colour,
	);
	add_log('user', $user_id, 'LOG_USER_COLOUR_CHANGE', $user_row['username'], $user_row['user_colour'], $update_user_colour);
	user_colour_update($update_user_colour, $user_id);
}
if ($update_user_colour_change !== false)
{
	$sql_ary += array(
		'user_colour_change'		=> $update_user_colour_change,
	);
	add_log('user', $user_id, 'LOG_USER_COLOUR_LOCKED', $user_row['username']);
}
