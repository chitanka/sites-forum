<?php
$template->assign_vars(array(
	'S_COLOUR_CHANGE'	=> $user_row['user_colour_change'],
	'USER_COLOUR'		=> $user_row['user_colour'],
	'U_SWATCH'		=> append_sid("{$phpbb_admin_path}swatch.$phpEx", 'form=user_overview&amp;name=user_colour'),
));
