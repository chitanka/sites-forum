<?php
// now post the message to rocketchat too
$rcCfg = require __DIR__.'/rocketchat.config.php';
require __DIR__.'/vendor/chitanka/rocket-chat-client/src/RocketChatClient.php';
$rocketchatClient = new \Chitanka\RocketChatClient($rcCfg['url'], $rcCfg['username'], $rcCfg['password'], $rcCfg['notifications_channel']);

$true_title = $post_data['forum_name'] .': ' . $post_data['post_subject'];
// Remove all the http formatting from the topic_title
$str_from = array('&lt;', '&gt;', '&#91;', '&#93;', '&#46;', '&#58;', '&#058;','&amp;', '&quot;');
$str_to = array('[', ']', '[', ']', '.', ':', ':', '&', '"');
$clean_title = str_replace($str_from, $str_to, $true_title);

$usernameClean = $user->data['user_id'] == ANONYMOUS
	? (empty($post_data['username']) ? 'гост' : $post_data['username'])
	: $user->data['username'];
$postForRocketChat = ($mode == 'edit' ? 'Променено мнение' : 'Ново мнение') . ': '
	. "<".generate_board_url()."/post{$data['post_id']}.html#p{$data['post_id']} | {$clean_title}>"
	. ' от **'. $usernameClean .'**';
$rocketchatClient->postMessage($postForRocketChat);
