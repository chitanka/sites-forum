<?php
$data = array_merge($data, array(
	'user_colour'			=> request_var('user_colour', $user_row['user_colour']),
	'user_colour_change'	=> request_var('colour_change', $user_row['user_colour_change']),
));
