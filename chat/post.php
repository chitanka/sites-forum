<?php
define('IN_PHPBB', true);
define('PHPBB_INSTALLED', true);
$phpbb_root_path = dirname(__FILE__) . '/../';
$phpEx = 'php';
require_once $phpbb_root_path . 'common.' . $phpEx;

if ( ! empty($_POST['m'])) {
	$sql_ary = array(
		'userID'   => 2147483647, // chatbot id
		'userName' => 'Аякс',
		'userRole' => 4,          // bot
		'channel'  => 0,
		'dateTime' => date('Y-m-d H:i:s'),
		'ip'       => '',
		'text'     => '[i]'. $_POST['m'] . '[/i]',
	);

	$chat_sql = 'INSERT INTO ajax_chat_messages ' . $db->sql_build_array('INSERT', $sql_ary);
	$db->sql_query($chat_sql);
	$db->sql_freeresult($chat_sql);
	echo 1;
} else {
	echo 0;
}
