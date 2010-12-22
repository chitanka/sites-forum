<?php
if ($auth->acl_get('u_change_colour'))
{
	if (!function_exists('get_colour_options'))
	{
		include($phpbb_root_path . 'includes/functions_user_colour.' . $phpEx);
	}
	$user->add_lang('mods/user_colour');
	$template->assign_vars(array(
		'USER_COLOUR'			=> $data['colour'],
		'S_USER_COLOUR_ENABLED'	=> true,
		'S_COLOUR_OPTIONS'		=> get_colour_options(),
	));
}
