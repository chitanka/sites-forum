<?php
if ($user->data['user_colour'] != $data['colour'])
{
	add_log('user', $user->data['user_id'], 'LOG_USER_COLOUR_CHANGE', $user->data['username'], $user->data['user_colour'], $data['colour']);
	if (!function_exists('user_colour_update'))
	{
		include($phpbb_root_path . 'includes/functions_user_colour.' . $phpEx);
	}
	$data['colour'] = validate_colour_code($data['colour']);
	user_colour_update($data['colour'], $user->data['user_id']);
}
