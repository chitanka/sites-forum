<?php
/**
* Mylib auth plug-in for phpBB3
*/

namespace chitanka\auth;

use phpbb\config\db as db_config;
use phpbb\db\driver\driver_interface;
use phpbb\request\request;
use phpbb\request\request_interface;
use phpbb\user;
use function getMylibTokenCookie;
use function getValidMylibUser;

require_once __DIR__ . '/../../../../mylib-single-login/get_user.php';

class mylib extends \phpbb\auth\provider\base {

	private db_config $config;
	private driver_interface $db;
	private request $request;
	private user $user;
	private string $root_path;
	private string $php_ext;

	public function __construct(db_config $config, driver_interface $db, request $request, user $user, string $root_path, string $php_ext) {
		$this->config = $config;
		$this->db = $db;
		$this->request = $request;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	public function login($username, $password) {
		$row = $this->autologin();

		if ($row) {
			// Successful login...
			return [
				'status' => LOGIN_SUCCESS,
				'error_msg' => false,
				'user_row' => $row,
			];
		}

		return [
			'status' => LOGIN_ERROR_EXTERNAL_AUTH,
			'error_msg' => 'LOGIN_ERROR_EXTERNAL_AUTH_MYLIB',
			'user_row' => ['user_id' => ANONYMOUS],
		];
	}


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
	public function autologin() {
		$mylib_user = getValidMylibUser($this->request->get_super_global(request_interface::COOKIE));

		$username = $mylib_user['username'];

		if (($row = $this->getDbUserByName($username))) {
			return ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE) ? [] : $row;
		}

		if (!function_exists('user_add')) {
			require $this->root_path . 'includes/functions_user.' . $this->php_ext;
		}

		// create the user if he does not exist yet
		user_add($this->user_row($mylib_user));

		if (($row = $this->getDbUserByName($username))) {
			return $row;
		}

		return [];
	}


	private function getDbUserByName($username) {
		$sql = 'SELECT *
			FROM ' . USERS_TABLE . "
			WHERE username = '" . $this->db->sql_escape($username) . "'";
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		return $row;
	}


	/**
	 * This function generates an array which can be passed to the user_add function in order to create a user
	 * Copy of user_row_apache()
	 */
	private function user_row($mylib_user) {
		// first retrieve default group id
		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . "
			WHERE group_name = '" . $this->db->sql_escape('REGISTERED') . "'
				AND group_type = " . GROUP_SPECIAL;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if (!$row) {
			trigger_error('NO_GROUP');
		}

		// generate user account data
		return [
			'username' => $mylib_user['username'],
			'user_password' => $mylib_user['token'],
			'user_email' => $mylib_user['email'],
			'group_id' => (int)$row['group_id'],
			'user_type' => USER_NORMAL,
			'user_ip' => $this->user->ip,
			'user_new' => ($this->config['new_member_post_limit']) ? 1 : 0,
		];
	}

	/**
	 * The session validation function checks whether the user is still logged in
	 *
	 * @return boolean true if the given user is authenticated or false if the session should be closed
	 */
	public function validate_session($user) {
		$token = getMylibTokenCookie($this->request->get_super_global(request_interface::COOKIE));
		if ($token && isset($user['user_password'])) {
			return $token == $user['user_password'];
		}

		// A valid session is now determined by the user type (anonymous/bot or not)
		if ($user['user_type'] == USER_IGNORE) {
			return true;
		}

		return false;
	}
}
