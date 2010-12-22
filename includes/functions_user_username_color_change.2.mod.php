<?php
if (!empty($user_colour_static))
{
	unset($sql_ary['user_colour']);
	$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
		WHERE ' . $db->sql_in_set('user_id', $user_colour_static);
	$db->sql_query($sql);
}
