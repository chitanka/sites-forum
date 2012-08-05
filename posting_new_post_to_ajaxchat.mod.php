<?php
define('HIDDEN_CHANNEL_ID', 44);
$specialChannels = array(HIDDEN_CHANNEL_ID, 46, 47);

// $true_title = (($mode == 'edit') || (empty($post_data['topic_title'])))
// 	? $post_data['post_subject']
// 	: $post_data['topic_title'];
$true_title = $post_data['forum_name'] .': ' . $post_data['post_subject'];
// Remove all the http formatting from the topic_title
$str_from = array('&lt;', '&gt;', '&#91;', '&#93;', '&#46;', '&#58;', '&#058;','&amp;', '&quot;');
$str_to = array('<', '>', '[', ']', '.', ':', ':', '&', '"');
$clean_title = str_replace($str_from, $str_to, $true_title);

#print_r($post_data);
#file_put_contents('posting.log', print_r($post_data, true)."\n\n", FILE_APPEND);

if ($user->data['user_id'] == ANONYMOUS) {
	$username = empty($post_data['username']) ? 'гост' : $post_data['username'];
} else {
	$username = empty($user->data['user_colour'])
		? $user->data['username']
		: "[color=#{$user->data['user_colour']}]{$user->data['username']}[/color]";
}

$chat_post = '[i]'
	. ($mode == 'edit' ? 'Променено мнение' : 'Ново мнение') . ': '
	. '[url=' . generate_board_url()
	//. '/viewtopic.php?p=' . $data['post_id']
	. '/post'.$data['post_id'].'.html'
	. '#p' . $data['post_id'] . ']'
	. $clean_title . '[/url]'
	. ' от [b]'. $username .'[/b]'
	. '[/i]';

$sql_ary = array(
	'userID'   => 2147483647, // chatbot id
	'userName' => 'Аякс',
	'userRole' => 4,          // bot
	'channel'  => 0,
	'channel' => (in_array($data['forum_id'], $specialChannels) ? HIDDEN_CHANNEL_ID : 0),
	'dateTime' => date('Y-m-d H:i:s'),
	'ip'       => '',
	'text'     => $chat_post,
);

$chat_sql = 'INSERT INTO ajax_chat_messages ' . $db->sql_build_array('INSERT', $sql_ary);
$db->sql_query($chat_sql);
$db->sql_freeresult($chat_sql);
