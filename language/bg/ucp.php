<?php
/**
*
* ucp [Bulgarian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'By accessing “%1$s” (hereinafter “we”, “us”, “our”, “%1$s”, “%2$s”), you agree to be legally bound by the following terms. If you do not agree to be legally bound by all of the following terms then please do not access and/or use “%1$s”. We may change these at any time and we’ll do our utmost in informing you, though it would be prudent to review this regularly yourself as your continued usage of “%1$s” after changes mean you agree to be legally bound by these terms as they are updated and/or amended.<br />
	<br />
	Our forums are powered by phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) which is a bulletin board solution released under the “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (hereinafter “GPL”) and can be downloaded from <a href="http://www.phpbb.com/">www.phpbb.com</a>. The phpBB software only facilitates internet based discussions, the phpBB Group are not responsible for what we allow and/or disallow as permissible content and/or conduct. For further information about phpBB, please see: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any laws be it of your country, the country where “%1$s” is hosted or International Law. Doing so may lead to you being immediately and permanently banned, with notification of your Internet Service Provider if deemed required by us. The IP address of all posts are recorded to aid in enforcing these conditions. You agree that “%1$s” have the right to remove, edit, move or close any topic at any time should we see fit. As a user you agree to any information you have entered to being stored in a database. While this information will not be disclosed to any third party without your consent, neither “%1$s” nor phpBB shall be held responsible for any hacking attempt that may lead to the data being compromised.
	',

	'PRIVACY_POLICY'		=> 'This policy explains in detail how “%1$s” along with its affiliated companies (hereinafter “we”, “us”, “our”, “%1$s”, “%2$s”) and phpBB (hereinafter “they”, “them”, “their”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) use any information collected during any session of usage by you (hereinafter “your information”).<br />
	<br />
	Your information is collected via two ways. Firstly, by browsing “%1$s” will cause the phpBB software to create a number of cookies, which are small text files that are downloaded on to your computer’s web browser temporary files. The first two cookies just contain a user identifier (hereinafter “user-id”) and an anonymous session identifier (hereinafter “session-id”), automatically assigned to you by the phpBB software. A third cookie will be created once you have browsed topics within “%1$s” and is used to store which topics have been read, thereby improving your user experience.<br />
	<br />
	We may also create cookies external to the phpBB software whilst browsing “%1$s”, though these are outside the scope of this document which is intended to only cover the pages created by the phpBB software. The second way in which we collect your information is by what you submit to us. This can be, and is not limited to: posting as an anonymous user (hereinafter “anonymous posts”), registering on “%1$s” (hereinafter “your account”) and posts submitted by you after registration and whilst logged in (hereinafter “your posts”).<br />
	<br />
	Your account will at a bare minimum contain a uniquely identifiable name (hereinafter “your user name”), a personal password used for logging into your account (hereinafter “your password”) and a personal, valid e-mail address (hereinafter “your e-mail”). Your information for your account at “%1$s” is protected by data-protection laws applicable in the country that hosts us. Any information beyond your user name, your password, and your e-mail address required by “%1$s” during the registration process is either mandatory or optional, at the discretion of “%1$s”. In all cases, you have the option of what information in your account is publicly displayed. Furthermore, within your account, you have the option to opt-in or opt-out of automatically generated e-mails from the phpBB software.<br />
	<br />
	Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at “%1$s”, so please guard it carefully and under no circumstance will anyone affiliated with “%1$s”, phpBB or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the phpBB software. This process will ask you to submit your user name and your e-mail, then the phpBB software will generate a new password to reclaim your account.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Your account has now been activated. Thank you for registering.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'The account has now been activated.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Your account has now been successfully reactivated.',
	'ACCOUNT_ADDED'					=> 'Thank you for registering, your account has been created. You may now login with your username and password.',
	'ACCOUNT_COPPA'					=> 'Your account has been created but has to be approved, please check your e-mail for details.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Your account has been updated. However, this board requires account reactivation on e-mail changes. An activation key has been sent to the new e-mail address you provided. Please check your e-mail for further information.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Your account has been updated. However, this board requires account reactivation by the administrators on e-mail changes. An e-mail has been sent to them and you will be informed when your account has been reactivated.',
	'ACCOUNT_INACTIVE'				=> 'Your account has been created. However, this board requires account activation, an activation key has been sent to the e-mail address you provided. Please check your e-mail for further information.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Your account has been created. However, this board requires account activation by the administrator group. An e-mail has been sent to them and you will be informed when your account has been activated.',
	'ACTIVATION_EMAIL_SENT'			=> 'The activation e-mail has been sent to your e-mail address.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'The activation e-mail has been sent to the administrators e-mail addresses.',
	'ADD'							=> 'Добавяне',
	'ADD_BCC'						=> 'Добавяне като [СК]',
	'ADD_FOES'						=> 'Добавяне на неприятели',
	'ADD_FOES_EXPLAIN'				=> 'Може да въведете няколко имена, всяко на отделен ред.',
	'ADD_FOLDER'					=> 'Добавяне на папка',
	'ADD_FRIENDS'					=> 'Добавяне на приятели',
	'ADD_FRIENDS_EXPLAIN'			=> 'Може да въведете няколко имена, всяко на отделен ред.',
	'ADD_NEW_RULE'					=> 'Добавяне на правило',
	'ADD_RULE'						=> 'Добавяне на правило',
	'ADD_TO'						=> 'Добавяне на [До]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Here you can add new users to the group. You may select whether this group becomes the new default for the selected users. Please enter each username on a separate line.',
	'ADMIN_EMAIL'					=> 'Разрешаване на новини по пощата от администраторите',
	'AGREE'							=> 'Приемам условията',
	'ALLOW_PM'						=> 'Разрешаване на лични съобщения от другите потребители',
	'ALLOW_PM_EXPLAIN'				=> 'Администраторите и модераторите винаги могат да ви изпращат лични съобщения.',
	'ALREADY_ACTIVATED'				=> 'You have already activated your account.',
	'ATTACHMENTS_EXPLAIN'			=> 'Това е списък на вашите прикачени файлове.',
	'ATTACHMENTS_DELETED'			=> 'Прикачените файлове бяха изтрити.',
	'ATTACHMENT_DELETED'			=> 'Прикаченият файл беше изтрит.',
	'AVATAR_CATEGORY'				=> 'Категория',
	'AVATAR_EXPLAIN'				=> 'Maximum dimensions; width: %1$d pixels, height: %2$d pixels, file size: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'The avatar functionality is currently disabled.',
	'AVATAR_GALLERY'				=> 'Локална галерия',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Could not upload avatar to %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Your avatar cannot be displayed because avatars have been disallowed.',
	'AVATAR_PAGE'					=> 'Страница',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Your current avatar cannot be displayed because its type has been disallowed.',

	'BACK_TO_DRAFTS'			=> 'Обратно към съхранените чернови',
	'BACK_TO_LOGIN'				=> 'Back to login screen',
	'BIRTHDAY'					=> 'Рожден ден',
	'BIRTHDAY_EXPLAIN'			=> 'Ако посочите година, възрастта ви ще се показва, когато имате рожден ден.',
	'BOARD_DATE_FORMAT'			=> 'Формат на датите',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Синтаксисът е същият като този при функцията <a href="http://www.php.net/date">date()</a>.',
	'BOARD_DST'					=> 'Лятно часово време (ЛЧВ)',
	'BOARD_LANGUAGE'			=> 'Език',
	'BOARD_STYLE'				=> 'Облик',
	'BOARD_TIMEZONE'			=> 'Часова зона',
	'BOOKMARKS'					=> 'Отметки',
	'BOOKMARKS_EXPLAIN'			=> 'Можете да слагате отметки към теми за бъдещи справки. За да изтриете определени отметки, първо ги изберете, а след това натиснете върху бутона <em>Премахване на избраните отметки</em>.',
	'BOOKMARKS_DISABLED'		=> 'Bookmarks are disabled on this board.',
	'BOOKMARKS_REMOVED'			=> 'Отметките бяха премахнати.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Повече не може да променяте или изтривате съобщението.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Messages cannot be moved to the folder you want to remove.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Messages cannot be moved from the outbox.',
	'CANNOT_RENAME_FOLDER'		=> 'Папката не може да бъде преименувана.',
	'CANNOT_REMOVE_FOLDER'		=> 'Папката не може да бъде премахната.',
	'CHANGE_DEFAULT_GROUP'		=> 'Смяна на основната група',
	'CHANGE_PASSWORD'			=> 'Смяна на паролата',
	'CLICK_GOTO_FOLDER'			=> '%1$sКъм папката „%3$s“%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sОбратно към папката „%3$s“%2$s',
	'CONFIRMATION'				=> 'Confirmation of registration',
	'CONFIRM_CHANGES'			=> 'Confirm changes',
	'CONFIRM_EMAIL'				=> 'Confirm e-mail address',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'You only need to specify this if you are changing your e-mail address.',
	'CONFIRM_EXPLAIN'			=> 'To prevent automated registrations the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'VC_REFRESH'				=> 'Refresh confirmation code',
	'VC_REFRESH_EXPLAIN'		=> 'If you cannot read the code you can request a new one by clicking the button.',

	'CONFIRM_PASSWORD'			=> 'Confirm password',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'You only need to confirm your password if you changed it above.',
	'COPPA_BIRTHDAY'			=> 'To continue with the registration procedure please tell us when you were born.',
	'COPPA_COMPLIANCE'			=> 'COPPA compliance',
	'COPPA_EXPLAIN'				=> 'Please note that clicking submit will create your account. However it cannot be activated until a parent or guardian approves your registration. You will be emailed a copy of the necessary form with details of where to send it.',
	'CREATE_FOLDER'				=> 'Добавяне на папка…',
	'CURRENT_IMAGE'				=> 'Текущо изпбражение',
	'CURRENT_PASSWORD'			=> 'Текуща парола',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'You must enter your current password if you wish to alter your email address or username.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'To change your password, your email address, or your username, you must enter your current password.',
	'CUR_PASSWORD_EMPTY'		=> 'You did not enter your current password.',
	'CUR_PASSWORD_ERROR'		=> 'The current password you entered is incorrect.',
	'CUSTOM_DATEFORMAT'			=> 'Собствен…',

	'DEFAULT_ACTION'			=> 'Стандартно действие',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Това действие ще бъде избрано, ако никое от горните не е подходящо.',
	'DEFAULT_ADD_SIG'			=> 'Добавяне на подпис',
	'DEFAULT_BBCODE'			=> 'Включване на BBCode',
	'DEFAULT_NOTIFY'			=> 'Известяване при отговор',
	'DEFAULT_SMILIES'			=> 'Включване на усмивки',
	'DEFINED_RULES'				=> 'Дефинирани правила',
	'DELETED_TOPIC'				=> 'Темата беше премахната.',
	'DELETE_ATTACHMENT'			=> 'Изтриване на притурката',
	'DELETE_ATTACHMENTS'		=> 'Изтриване на притурките',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Наистина ли желаете да изтриете прикачения файл?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Наистина ли желаете да изтриете прикачените файлове?',
	'DELETE_AVATAR'				=> 'Изтриване на изображението',
	'DELETE_COOKIES_CONFIRM'	=> 'Наистина ли желаете да изтриете всички бисквитки от форумната система?',
	'DELETE_MARKED_PM'			=> 'Изтриване на избраните съобщения',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Наистина ли желаете да изтриете избраните съобщения?',
	'DELETE_OLDEST_MESSAGES'	=> 'Изтриване на най-старите съобщения',
	'DELETE_MESSAGE'			=> 'Изтриване на съобщението',
	'DELETE_MESSAGE_CONFIRM'	=> 'Наистина ли желаете да изтриете това лично съобщение?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Изтриване на всички съобщения в премахната папка',
	'DELETE_RULE'				=> 'Изтриване на правилото',
	'DELETE_RULE_CONFIRM'		=> 'Наистина ли желаете да изтриете това правило?',
	'DEMOTE_SELECTED'			=> 'Понижаване на избраните',
	'DISABLE_CENSORS'			=> 'Включване на цензуриране на думи',
	'DISPLAY_GALLERY'			=> 'Display gallery',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Въведеният адрес за електронна поща не притежава валиден MX запис.',
	'DOWNLOADS'					=> 'Сваляния',
	'DRAFTS_DELETED'			=> 'Всички избрани чернови бяха изтрити.',
	'DRAFTS_EXPLAIN'			=> 'Тук можете да преглеждате, променяте или изтривате черновите си.',
	'DRAFT_UPDATED'				=> 'Черновата беше обновена.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Тук можете да променяте черновата си. Черновите не съдържат прикачени файлове или анкети.',
	'EMAIL_BANNED_EMAIL'		=> 'Въведеният адрес за електронна поща не е разрешен да се използва.',
	'EMAIL_INVALID_EMAIL'		=> 'Въведеният адрес за електронна поща е неправилен.',
	'EMAIL_REMIND'				=> 'This must be the e-mail address associated with your account. If you have not changed this via your user control panel then it is the e-mail address you registered your account with.',
	'EMAIL_TAKEN_EMAIL'			=> 'Въведеният адрес за електронна поща вече се използва.',
	'EMPTY_DRAFT'				=> 'You must enter a message to submit your changes.',
	'EMPTY_DRAFT_TITLE'			=> 'Трябва да въведете заглавие за черновата.',
	'EXPORT_AS_XML'				=> 'като XML',
	'EXPORT_AS_CSV'				=> 'като CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'като CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'като TXT',
	'EXPORT_AS_MSG'				=> 'като MSG',
	'EXPORT_FOLDER'				=> 'Изнасяне на прегледа',

	'FIELD_REQUIRED'					=> 'The field “%s” must be completed.',
	'FIELD_TOO_SHORT'					=> 'The field “%1$s” is too short, a minimum of %2$d characters is required.',
	'FIELD_TOO_LONG'					=> 'The field “%1$s” is too long, a maximum of %2$d characters is allowed.',
	'FIELD_TOO_SMALL'					=> 'The value of “%1$s” is too small, a minimum value of %2$d is required.',
	'FIELD_TOO_LARGE'					=> 'The value of “%1$s” is too large, a maximum value of %2$d is allowed.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'The field “%s” has invalid characters, only numbers are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric characters are allowed.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'The field “%s” has invalid characters, only alphanumeric, space or -+_[] characters are allowed.',
	'FIELD_INVALID_DATE'				=> 'The field “%s” has an invalid date.',
	'FIELD_INVALID_VALUE'				=> 'The field “%s” has an invalid value.',


	'FOE_MESSAGE'				=> 'Съобщение от неприятел',
	'FOES_EXPLAIN'				=> 'Неприятелите са пренебрегнати потребители. Техните мнения ще бъдат само частично видими, но все пак ще им е разрешено да ви изпращат лични съобщения. Обърнете внимание, че не може да пренебрегвате модератори или администратори.',
	'FOES_UPDATED'				=> 'Списъкът с неприятелите ви беше обновен.',
	'FOLDER_ADDED'				=> 'Папката беше добавена.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d от %2$d съобщения',
	'FOLDER_NAME_EMPTY'			=> 'Трябва да въедете име на папката.',
	'FOLDER_NAME_EXIST'			=> 'Папката <strong>%s</strong> вече съществува.',
	'FOLDER_OPTIONS'			=> 'Настройки на папката',
	'FOLDER_RENAMED'			=> 'Папката беше преименувана.',
	'FOLDER_REMOVED'			=> 'Папката беше премахната.',
	'FOLDER_STATUS_MSG'			=> 'Папката е %1$d%% пълна (%2$d от %3$d съобщения)',
	'FORWARD_PM'				=> 'Пренасочване на ЛС',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Before you may continue browsing the board you are required to change your password.',
	'FRIEND_MESSAGE'			=> 'Съобщение от приятел',
	'FRIENDS'					=> 'Приятели',
	'FRIENDS_EXPLAIN'			=> 'Този списък ви позволява бърз достъп до потребители, с които общувате често. Мненията на приятелите ви ще се открояват сред останалите.',
	'FRIENDS_OFFLINE'			=> 'Извън форума',
	'FRIENDS_ONLINE'			=> 'На линия',
	'FRIENDS_UPDATED'			=> 'Списъкът с приятелите ви беше обновен.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Действието, което се предприема при пълна папка, беше сменено.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Оригинално съобщение --------',
	'FWD_SUBJECT'				=> 'Заглавие: %s',
	'FWD_DATE'					=> 'Дата: %s',
	'FWD_FROM'					=> 'От: %s',
	'FWD_TO'					=> 'До: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Глобално съобщение',

	'HIDE_ONLINE'				=> 'Скриване на състоянието ми, когато съм на линия',
	'HIDE_ONLINE_EXPLAIN'		=> 'Промяната на тази настройка ще се отрази едва при следващото посещение.',
	'HOLD_NEW_MESSAGES'			=> 'Без приемане на нови съобщения (Новите съобщения ще бъдат задържани, докато не се освободи достатъчно място)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Новите съобщения ще стоят в опашката',

	'IF_FOLDER_FULL'			=> 'Ако папката е пълна',
	'IMPORTANT_NEWS'			=> 'Важни съобщения',
	'INVALID_USER_BIRTHDAY'			=> 'Въвели сте невалидна дата като рожден ден.',
	'INVALID_CHARS_USERNAME'	=> 'The username contains forbidden characters.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'The password does not contain the required characters.',
	'ITEMS_REQUIRED'			=> 'The items marked with * are required profile fields and need to be filled out.',

	'JOIN_SELECTED'				=> 'Присъединяване към избраните',

	'LANGUAGE'					=> 'Език',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Enter the URL of the location containing the avatar image you wish to link to.',
	'LINK_REMOTE_SIZE'			=> 'Размери на аватара',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',
	'LOGIN_EXPLAIN_UCP'			=> 'Влезте, за да имате достъп до контролното табло на потребителя.',
	'LOGIN_REDIRECT'			=> 'You have been successfully logged in.',
	'LOGOUT_FAILED'				=> 'You were not logged out, as the request did not match your session. Please contact the board administrator if you continue to experience problems.',
	'LOGOUT_REDIRECT'			=> 'You have been successfully logged out.',

	'MARK_IMPORTANT'				=> 'Отбелязване като важно',
	'MARKED_MESSAGE'				=> 'Отбелязано като важно',
	'MAX_FOLDER_REACHED'			=> 'Maximum number of allowed user defined folders reached.',
	'MESSAGE_BY_AUTHOR'				=> 'от',
	'MESSAGE_COLOURS'				=> 'Цветове на съобщенията',
	'MESSAGE_DELETED'				=> 'Съобщението беше изтрито.',
	'MESSAGE_HISTORY'				=> 'История на съобщенията',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Съобщението е било изтрито от автора си, преди да бъде доставено.',
	'MESSAGE_SENT_ON'				=> 'на',
	'MESSAGE_STORED'				=> 'Съобщението беше изпратено.',
	'MESSAGE_TO'					=> 'До',
	'MESSAGES_DELETED'				=> 'Съобщенията бяха изтрити',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Преместване на съобщенията от премахнатата папка в',
	'MOVE_DOWN'						=> 'Надолу',
	'MOVE_MARKED_TO_FOLDER'			=> 'Преместване в %s',
	'MOVE_PM_ERROR'					=> 'Възникна грешка при преместването на съобщенията в новата папка. Бяха преместени само %1d от всичките %2d съобщения.',
	'MOVE_TO_FOLDER'				=> 'Преместване в папка',
	'MOVE_UP'						=> 'Нагоре',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'You did not enter a confirm e-mail address.',
	'NEW_EMAIL_ERROR'				=> 'Въведените адреси за електронна поща не съвпадат.',
	'NEW_FOLDER_NAME'				=> 'Ново име на папка',
	'NEW_PASSWORD'					=> 'Нова парола',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'You did not enter a confirm password.',
	'NEW_PASSWORD_ERROR'			=> 'Въведените пароли не съвпадат.',
	'NOTIFY_METHOD'					=> 'Метод на известяване',
	'NOTIFY_METHOD_BOTH'			=> 'И двава',
	'NOTIFY_METHOD_EMAIL'			=> 'Само по имейл',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Метод за изпращане на съобщения чрез тази форумна система.',
	'NOTIFY_METHOD_IM'				=> 'Само по Jabber',
	'NOTIFY_ON_PM'					=> 'Известяване при нови лични съобщения',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Не може да добавяте анонимни потребители в списъка с приятелите.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Не може да добавяте ботове в списъка с приятелите.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Не може да добавяте неприятели в списъка с приятелите.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Не може да добавите себе си към списъка с приятелите.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Не може да добавяте администратори и модератори в списъка с неприятелите.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Не може да добавяте анонимни потребители в списъка с неприятелите.',
	'NOT_ADDED_FOES_BOTS'			=> 'Не може да добавяте ботове към списъка с неприятелите.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Не може да добавяте приятели в списъка с неприятелите.',
	'NOT_ADDED_FOES_SELF'			=> 'Не може да добавите себе си в списъка с неприятелите.',
	'NOT_AGREE'						=> 'Не мога да се съглася с тези правила',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'The destination folder “%s” seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGE'				=> 'Имате едно лично съобщение на опашка, защото папката ви е пълна.',
	'NOT_MOVED_MESSAGES'			=> 'Имате %d лични съобщения на опашка, защото папката ви е пълна.',
	'NO_ACTION_MODE'				=> 'Не е указано действие за съобщението.',
	'NO_AUTHOR'						=> 'Съобщението няма автор',
	'NO_AVATAR_CATEGORY'			=> 'None',

	'NO_AUTH_DELETE_MESSAGE'		=> 'You are not authorised to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'You are not authorised to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'You are not authorised to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'You are not authorised to send private messages to groups.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'You are not authorised to request a new password.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'You are not authorised to read private messages that are on hold.',
	'NO_AUTH_READ_MESSAGE'			=> 'You are not authorised to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'			=> 'You are not authorised to send private messages.',
	'NO_AUTH_SIGNATURE'				=> 'You are not authorised to define a signature.',

	'NO_BCC_RECIPIENT'			=> 'Няма',
	'NO_BOOKMARKS'				=> 'Нямате отметки.',
	'NO_BOOKMARKS_SELECTED'		=> 'Не сте избрали отметки.',
	'NO_EDIT_READ_MESSAGE'		=> 'Личното съобщение не може да бъде променено, защото вече е било прочетено.',
	'NO_EMAIL_USER'				=> 'The e-mail/username information submitted could not be found.',
	'NO_FOES'					=> 'Няма неприятели',
	'NO_FRIENDS'				=> 'Няма приятели',
	'NO_FRIENDS_OFFLINE'		=> 'Няма приятели извън форума',
	'NO_FRIENDS_ONLINE'			=> 'Няма приятели на линия',
	'NO_GROUP_SELECTED'			=> 'Не е посочена група.',
	'NO_IMPORTANT_NEWS'			=> 'В момента няма важни съобщения.',
	'NO_MESSAGE'				=> 'Личното съобщение не можа да бъде открито.',
	'NO_NEW_FOLDER_NAME'		=> 'Трябва да посочите ново име на папката.',
	'NO_NEWER_PM'				=> 'Няма по-нови съобщения.',
	'NO_OLDER_PM'				=> 'Няма по-стари съобщения.',
	'NO_PASSWORD_SUPPLIED'		=> 'Не може да влезете без парола.',
	'NO_RECIPIENT'				=> 'Не е посочен получател.',
	'NO_RULES_DEFINED'			=> 'Няма правила.',
	'NO_SAVED_DRAFTS'			=> 'Няма съхранени чернови.',
	'NO_TO_RECIPIENT'			=> 'None',
	'NO_WATCHED_FORUMS'			=> 'Нямате абонаменти за форуми.',
	'NO_WATCHED_SELECTED'		=> 'Не сте избрали форум или тема.',
	'NO_WATCHED_TOPICS'			=> 'Нямате абонаменти за теми.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case and must contain numbers.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long and must contain letters in mixed case.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d characters long, must contain letters in mixed case, must contain numbers and must contain symbols.',
	'PASSWORD'					=> 'Password',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated.',
	'PASSWORD_UPDATED'			=> 'A new password was sent to your registered e-mail address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERRED'	=> 'Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the board with this user’s permissions.<br />Please note that admin permissions were not transferred. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Изпращането на лични съобщения е изключено.',
	'PM_FROM'					=> 'От',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'Иконка',
	'PM_INBOX'					=> 'Входяща кутия',
	'PM_NO_USERS'				=> 'Посочените потребители не съществуват.',
	'PM_OUTBOX'					=> 'Изходяща кутия',
	'PM_SENTBOX'				=> 'Изпратени съобщения',
	'PM_SUBJECT'				=> 'Заглавие на съобщението',
	'PM_TO'						=> 'Изпращане до',
	'PM_USERS_REMOVED_NO_PM'	=> 'Някои потребители не бяха добавени, защото са забранили получаването на лични съобщения.',
	'POPUP_ON_PM'				=> 'Отворяне на нов прозорец при ново лично съобщение',
	'POST_EDIT_PM'				=> 'Промяна на съобщението',
	'POST_FORWARD_PM'			=> 'Пренасочване на съобщението',
	'POST_NEW_PM'				=> 'Ново лично съобщение',
	'POST_PM_LOCKED'			=> 'Пращането на лични съобщения е изключено.',
	'POST_PM_POST'				=> 'Цитиране на мнението',
	'POST_QUOTE_PM'				=> 'Цитиране на съобщението',
	'POST_REPLY_PM'				=> 'Отговор на съобщението',
	'PRINT_PM'					=> 'Преглед за печат',
	'PREFERENCES_UPDATED'		=> 'Настройките ви бяха обновени.',
	'PROFILE_INFO_NOTICE'		=> 'Обърнете внимание, че информацията тук може да се вижда от другите потребители. Полетата със звезда (*) трябва да се попълнят.',
	'PROFILE_UPDATED'			=> 'Профилът ви беше обновен.',

	'RECIPIENT'							=> 'Получател',
	'RECIPIENTS'						=> 'Получатели',
	'REGISTRATION'						=> 'Registration',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'Премахване на адреса',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Премахване на избраните отметки',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Наистина ли желаете да изтриете всички избрани отметки?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Премахване на избраните отметки',
	'REMOVE_FOLDER'						=> 'Премахване на папката',
	'REMOVE_FOLDER_CONFIRM'				=> 'Наистина ли желаете да премахнете тази папка?',
	'RENAME'							=> 'Преименуване',
	'RENAME_FOLDER'						=> 'Преименуване на папката',
	'REPLIED_MESSAGE'					=> 'Съобщение с отговор',
	'REPLY_TO_ALL'						=> 'Отговор на изпращача и на всички получатели.',
	'REPORT_PM'							=> 'докладване на личното съобщение',
	'RESIGN_SELECTED'					=> 'Напускане на избраните',
	'RETURN_FOLDER'						=> '%1$sОбратно към предишната папка%2$s',
	'RETURN_UCP'						=> '%sОбратно към контролното табло на потребителя%s',
	'RULE_ADDED'						=> 'Правилото беше добавено.',
	'RULE_ALREADY_DEFINED'				=> 'Това правило вече е било дефинирано.',
	'RULE_DELETED'						=> 'Правилото беше премахнато.',
	'RULE_LIMIT_REACHED'				=> 'Не може да добавяте повече правила за личните съобщения, защото сте достигнали максималния им брой.',
	'RULE_NOT_DEFINED'					=> 'Правилото не е зададено правилно.',
	'RULE_REMOVED_MESSAGE'				=> 'Едно лично съобщение е било премахнато заради избраното филтриране.',
	'RULE_REMOVED_MESSAGES'				=> '%d лични съобщения са били премахнати заради избраното филтриране.',

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password.',
	'SEARCH_YOUR_POSTS'			=> 'Моите мнения',
	'SEND_PASSWORD'				=> 'Изпращане на парола',
	'SENT_AT'					=> 'Изпратено',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Разрешаване на писма от други потребители',
	'SIGNATURE_EXPLAIN'			=> 'Това е текст, който може да бъде добавен след всяко ваше мнение. Има ограничение от %d знака.',
	'SIGNATURE_PREVIEW'			=> 'Подписът ви ще изглежда така',
	'SIGNATURE_TOO_LONG'		=> 'Подписът ви е твърде дълъг.',
	'SORT'						=> 'Сортиране',
	'SORT_COMMENT'				=> 'Коментар',
	'SORT_DOWNLOADS'			=> 'Сваляния',
	'SORT_EXTENSION'			=> 'Разширение',
	'SORT_FILENAME'				=> 'Файл',
	'SORT_POST_TIME'			=> 'Част',
	'SORT_SIZE'					=> 'Размер',

	'TIMEZONE'					=> 'Часова зона',
	'TO'						=> 'До',
	'TOO_MANY_RECIPIENTS'		=> 'Опитахте да изпратите лично съобщение до прекалено много получатели.',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'Контролно табло на потребителя',
	'UCP_ACTIVATE'				=> 'Activate account',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid e-mail address before your account is activated. The administrator will review your account and if approved you will receive an e-mail at the address you specified.',
	'UCP_AIM'					=> 'Адрес в AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Прикачени файлове',
	'UCP_COPPA_BEFORE'			=> 'преди %s',
	'UCP_COPPA_ON_AFTER'		=> 'на или след %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid e-mail address before your account is activated. You will receive an e-mail at the address you provide that contains an account activation link.',
	'UCP_ICQ'					=> 'Номер за ICQ',
	'UCP_JABBER'				=> 'Адрес в Jabber',

	'UCP_MAIN'					=> 'Общ преглед',
	'UCP_MAIN_ATTACHMENTS'		=> 'Прикачени файлове',
	'UCP_MAIN_BOOKMARKS'		=> 'Отметки',
	'UCP_MAIN_DRAFTS'			=> 'Чернови',
	'UCP_MAIN_FRONT'			=> 'Начало',
	'UCP_MAIN_SUBSCRIBED'		=> 'Абонаменти',

	'UCP_MSNM'					=> 'Адрес в WL/MSN',
	'UCP_NO_ATTACHMENTS'		=> 'Досега не сте пращали файлове.',

	'UCP_PREFS'					=> 'Форумни настройки',
	'UCP_PREFS_PERSONAL'		=> 'Общи настройки',
	'UCP_PREFS_POST'			=> 'Настройки за мненията',
	'UCP_PREFS_VIEW'			=> 'Настройки за прегледа',

	'UCP_PM'					=> 'Лични съобщения',
	'UCP_PM_COMPOSE'			=> 'Ново лично съобщение',
	'UCP_PM_DRAFTS'				=> 'Чернови за лични съобщения',
	'UCP_PM_OPTIONS'			=> 'Правила, папки и настройки',
	'UCP_PM_POPUP'				=> 'Лични съобщения',
	'UCP_PM_POPUP_TITLE'		=> 'Прозорец за личните съобщения',
	'UCP_PM_UNREAD'				=> 'Непрочетени съобщения',
	'UCP_PM_VIEW'				=> 'Преглед на съобщенията',

	'UCP_PROFILE'				=> 'Профил',
	'UCP_PROFILE_AVATAR'		=> 'Аватар',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Профил',
	'UCP_PROFILE_REG_DETAILS'	=> 'Настройки',
	'UCP_PROFILE_SIGNATURE'		=> 'Подпис',

	'UCP_USERGROUPS'			=> 'Групи',
	'UCP_USERGROUPS_MEMBER'		=> 'Членства',
	'UCP_USERGROUPS_MANAGE'		=> 'Групи',

	'UCP_REGISTER_DISABLE'			=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'					=> 'Изпращане на парола',
	'UCP_RESEND'					=> 'Изпращане на писмо за активиране',
	'UCP_WELCOME'					=> 'Добре дошли в контролното табло на потребителя. Тук можете да наблюдавате и управлявате профила и настройките си, както и абонаментите си за форуми и теми. Можете да изпращате и лични съобщения, в случай че това е разрешено. Преди да продължите, се уверете, че сте прочели всички важни съобщения.',
	'UCP_YIM'						=> 'Адрес в Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Приятели и неприятели',
	'UCP_ZEBRA_FOES'				=> 'Неприятели',
	'UCP_ZEBRA_FRIENDS'				=> 'Приятели',
	'UNDISCLOSED_RECIPIENT'			=> 'Таен получател',
	'UNKNOWN_FOLDER'				=> 'Непозната папка',
	'UNWATCH_MARKED'				=> 'Спиране на абонамента',
	'UPLOAD_AVATAR_FILE'			=> 'Качване от локалния компютър',
	'UPLOAD_AVATAR_URL'				=> 'Качване от URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Enter the URL of the location containing the image. The image will be copied to this site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only alphanumeric characters.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use alphanumeric, space or -+_[] characters.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Username must be between %1$d and %2$d chars long and use only ASCII characters, so no special symbols.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only letter or number characters.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use letter, number, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Length must be between %1$d and %2$d characters.',
	'USERNAME_TAKEN_USERNAME'		=> 'The username you entered is already in use, please select an alternative.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'The username you entered has been disallowed or contains a disallowed word. Please choose a different name.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'The usernames you specified could either not be found or are not activated users.',

	'VIEW_AVATARS'				=> 'Показване на аватари',
	'VIEW_EDIT'					=> 'Преглед/Промяна',
	'VIEW_FLASH'				=> 'Показване на флаш',
	'VIEW_IMAGES'				=> 'Показване на изображения в мненията',
	'VIEW_NEXT_HISTORY'			=> 'Следващо ЛС от историята',
	'VIEW_NEXT_PM'				=> 'Следващо ЛС',
	'VIEW_PM'					=> 'View message',
	'VIEW_PM_INFO'				=> 'Информация за съобщението',
	'VIEW_PM_MESSAGE'			=> 'едно съобщение',
	'VIEW_PM_MESSAGES'			=> '%d съобщения',
	'VIEW_PREVIOUS_HISTORY'		=> 'Предишно ЛС от историята',
	'VIEW_PREVIOUS_PM'			=> 'Предишно ЛС',
	'VIEW_SIGS'					=> 'Показване на подписи',
	'VIEW_SMILIES'				=> 'Показване на усмивките като изображения',
	'VIEW_TOPICS_DAYS'			=> 'Показване на темите от последните',
	'VIEW_TOPICS_DIR'			=> 'Ред на подреждане на темите',
	'VIEW_TOPICS_KEY'			=> 'Подреждане на темите по',
	'VIEW_POSTS_DAYS'			=> 'Показване на мненията от последните',
	'VIEW_POSTS_DIR'			=> 'Ред на подреждане на мненията',
	'VIEW_POSTS_KEY'			=> 'Подреждане на мненията по',

	'WATCHED_EXPLAIN'			=> 'Тук можете да видите списък на форумите и темите, за които сте се абoнирали. Ще бъдете известявани, когато в тях се появят нови мнения. За да спрете абонамента си, изберете форум или тема и натиснете върху бутона <em>Спиране на абонамента</em>.',
	'WATCHED_FORUMS'			=> 'Наблюдавани форуми',
	'WATCHED_TOPICS'			=> 'Наблюдавани теми',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database.',

	'YOUR_DETAILS'				=> 'Моята активност',
	'YOUR_FOES'					=> 'Моите неприятели',
	'YOUR_FOES_EXPLAIN'			=> 'За да премахнете потребители, първо ги изберете и след това щракнете върху бутона.',
	'YOUR_FRIENDS'				=> 'Моите приятели',
	'YOUR_FRIENDS_EXPLAIN'		=> 'За да премахнете потребители, първо ги изберете и след това щракнете върху бутона.',
	'YOUR_WARNINGS'				=> 'Моето ниво на предупреждения',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Преместване в папка',
		'MARK_AS_READ'		=> 'Отбелязване като прочетено',
		'MARK_AS_IMPORTANT'	=> 'Отбелязване като важно',
		'DELETE_MESSAGE'	=> 'Изтриване на съобщението'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Заглавие',
		'SENDER'	=> 'Изпращач',
		'MESSAGE'	=> 'Съобщение',
		'STATUS'	=> 'Статус',
		'TO'		=> 'Получател'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'е като',
		'IS_NOT_LIKE'	=> 'не е като',
		'IS'			=> 'е',
		'IS_NOT'		=> 'не е',
		'BEGINS_WITH'	=> 'започва със',
		'ENDS_WITH'		=> 'завършва със',
		'IS_FRIEND'		=> 'е приятел',
		'IS_FOE'		=> 'е неприятел',
		'IS_USER'		=> 'е потребител',
		'IS_GROUP'		=> 'е в групата',
		'ANSWERED'		=> 'отговорил',
		'FORWARDED'		=> 'пренасочил',
		'TO_GROUP'		=> 'към моята основна група',
		'TO_ME'			=> 'към мен'
	),


	'GROUPS_EXPLAIN'	=> 'Групите позволяват на администраторите по-лесното управляване на потребителите. Всеки потребител е причислен към дадена основна група, според която се определя как той се вижда от другите потребители, напр. цвят на името, аватар, ранг и т.н.<br /> Ако администраторите го позволяват, ще ви е възможно да смените основната си група, както и да се присъединявате към други групи. Някои групи може да ви дадат допълнителни права за преглед на съдържанието или пък някакви други възможности в определени области.',
	'GROUP_LEADER'		=> 'Водачества',
	'GROUP_MEMBER'		=> 'Членства',
	'GROUP_PENDING'		=> 'Заявки за членство',
	'GROUP_NONMEMBER'	=> 'Други групи',
	'GROUP_DETAILS'		=> 'Информация за групата',

	'NO_LEADER'		=> 'Няма групови водачества',
	'NO_MEMBER'		=> 'Няма групови членства',
	'NO_PENDING'	=> 'Няма чакащи членства',
	'NO_NONMEMBER'	=> 'Няма други групи',
));
