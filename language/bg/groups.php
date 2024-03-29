<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* [Bulgarian]
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'The selected group is already your default group.',
	'ALREADY_IN_GROUP'			=> 'You are already a member of the selected group.',
	'ALREADY_IN_GROUP_PENDING'	=> 'You already requested joining the selected group.',

	'CANNOT_JOIN_GROUP'			=> 'You are not able to join this group. You are only able to join open and freely open groups.',
	'CANNOT_RESIGN_GROUP'		=> 'You are not able to resign from this group. You are only able to resign from open and freely open groups.',
	'CHANGED_DEFAULT_GROUP'		=> 'Successfully changed default group.',

	'GROUP_AVATAR'						=> 'Аватар на групата',
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'Затворена',
	'GROUP_DESC'						=> 'Описание на групата',
	'GROUP_HIDDEN'						=> 'Скрита',
	'GROUP_INFORMATION'					=> 'Информация за групата',
	'GROUP_IS_CLOSED'					=> 'This is a closed group, new members can only join upon invitation of a group leader.',
	'GROUP_IS_FREE'						=> 'This is a freely open group, all new members are welcome.',
	'GROUP_IS_HIDDEN'					=> 'This is a hidden group, only members of this group can view its membership.',
	'GROUP_IS_OPEN'						=> 'Групата е отворена. Може да кандидатствате за членство.',
	'GROUP_IS_SPECIAL'					=> 'Това е специална група, която се управлява от администраторите.',
	'GROUP_JOIN'						=> 'Присъединяване към групата',
	'GROUP_JOIN_CONFIRM'				=> 'Are you sure you want to join the selected group?',
	'GROUP_JOIN_PENDING'				=> 'Request to join group',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Are you sure you want to request joining the selected group?',
	'GROUP_JOINED'						=> 'Successfully joined selected group.',
	'GROUP_JOINED_PENDING'				=> 'Successfully requested group membership. Please wait for a group leader to approve your membership.',
	'GROUP_LIST'						=> 'Manage users',
	'GROUP_MEMBERS'						=> 'Членове на групата',
	'GROUP_NAME'						=> 'Име на групата',
	'GROUP_OPEN'						=> 'Отворена',
	'GROUP_RANK'						=> 'Group rank',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Resign group membership',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Are you sure you want to resign your membership from the selected group?',
	'GROUP_RESIGN_PENDING'				=> 'Resign a pending group membership',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'You were successfully removed from the selected group.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.',
	'GROUP_TYPE'						=> 'Вид на групата',
	'GROUP_UNDISCLOSED'					=> 'Скрита група',
	'FORUM_UNDISCLOSED'					=> 'Moderating hidden forum(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'You need to login to view group details.',

	'NO_LEADERS'					=> 'Не сте водач на никоя група.',
	'NOT_LEADER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a leader of the selected group.',
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.',

	'PRIMARY_GROUP'		=> 'Основна група',

	'REMOVE_SELECTED'		=> 'Премахване на избраните',

	'USER_GROUP_CHANGE'			=> 'от група „%1$s“ към „%2$s“',
	'USER_GROUP_DEMOTE'			=> 'Сваляне на лидерство',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Are you sure you want to demote as group leader from the selected group?',
	'USER_GROUP_DEMOTED'		=> 'Successfully demoted your leadership.',
));
