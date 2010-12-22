<?php

$sql = 'SELECT user_id
	FROM ' . USERS_TABLE . "
		WHERE  user_colour_change = 0
			AND " . $db->sql_in_set('user_id', $user_id_ary);
$result = $db->sql_query($sql);

$user_colour_static = array();
while ($row = $db->sql_fetchrow($result))
{
	$user_colour_static[] = $row['user_id'];
}
$db->sql_freeresult($result);

$user_id_ary = array_diff($user_id_ary, $user_colour_static);
