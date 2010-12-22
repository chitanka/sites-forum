<?php
/**
* Mylib auth plug-in for phpBB3
*/

/**
* @ignore
*/
if ( ! defined('IN_PHPBB')) {
	die('Auth Mylib');
}

require_once $phpbb_root_path . '../mylib/include/get_user.php';

// function init_mylib()
// {
// }

/**
* Login function
*/
/*function login_mylib(&$username, &$password)
{
	$row = autologin_mylib();

	if ($row) {
		// Successful login...
		return array(
			'status'		=> LOGIN_SUCCESS,
			'error_msg'		=> false,
			'user_row'		=> $row,
		);
	}

	return array(
		'status'		=> LOGIN_ERROR_EXTERNAL_AUTH,
		'error_msg'		=> 'LOGIN_ERROR_EXTERNAL_AUTH_MYLIB',
		'user_row'		=> array('user_id' => ANONYMOUS),
	);
}*/


/*
The typical flow of the *autologin *method is as follows:

Try to get external username from the external log-in information, return*array() on failure.
Try to find the phpBB user matching the external username. Return the$user_row *array or empty array if the phpBB user is disabled (USER_INACTIVE or USER_IGNORE, see *login *method).
*Create a new user with the*user_add *function (which takes *user_row *of the new user as the argument).
Note that for autologin the*user_row array should return all fields from the user table for that user, unlike the login method which only needs the mandated ones documented above.
Return the$user_row *array for the newly created user.

Returns
**user_row *array on successful autologin;
**array() *on failure.
* @return array containing the user row or empty if no auto login should take place
*/
function autologin_mylib()
{
	$mylib_user = getValidMylibUser();

	$username = $mylib_user['username'];

	if ( ($row = getDbUserByName($username)) ) {
		return ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE) ? array() : $row;
	}

	if ( ! function_exists('user_add')) {
		global $phpEx, $phpbb_root_path;

		include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
	}

	// create the user if he does not exist yet
	user_add(user_row_mylib($mylib_user));

	if ( ($row = getDbUserByName($username)) ) {
		return $row;
	}

	return array();
}


function getDbUserByName($username)
{
	global $db;

	$sql = 'SELECT *
		FROM ' . USERS_TABLE . "
		WHERE username = '" . $db->sql_escape($username) . "'";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	return $row;
}


/**
* This function generates an array which can be passed to the user_add function in order to create a user
* Copy of user_row_apache()
*/
function user_row_mylib($mylib_user)
{
	global $db, $config, $user;
	// first retrieve default group id
	$sql = 'SELECT group_id
		FROM ' . GROUPS_TABLE . "
		WHERE group_name = '" . $db->sql_escape('REGISTERED') . "'
			AND group_type = " . GROUP_SPECIAL;
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if ( ! $row) {
		trigger_error('NO_GROUP');
	}

	// generate user account data
	return array(
		'username'		=> $mylib_user['username'],
		'user_password'	=> $mylib_user['token'],
		'user_email'	=> $mylib_user['email'],
		'group_id'		=> (int) $row['group_id'],
		'user_type'		=> USER_NORMAL,
		'user_ip'		=> $user->ip,
		'user_new'		=> ($config['new_member_post_limit']) ? 1 : 0,
	);
}

/**
* The session validation function checks whether the user is still logged in
*
* @return boolean true if the given user is authenticated or false if the session should be closed
*/
function validate_session_mylib($user)
{
	$token = getMylibTokenCookie();
	if ($token && isset($user['user_password'])) {
		return $token == $user['user_password'];
	}

	// A valid session is now determined by the user type (anonymous/bot or not)
	if ($user['user_type'] == USER_IGNORE) {
		return true;
	}

	return false;
}
