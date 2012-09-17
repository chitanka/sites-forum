<?php
/**
*
* posting [Bulgarian]
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Прикачване на файл',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Оттук можете да прикачите файлове към мнението.',
	'ADD_FILE'					=> 'Добавяне на файла',
	'ADD_POLL'					=> 'Създаване на анкета',
	'ADD_POLL_EXPLAIN'			=> 'Оставете полетата празни, ако не желаете да създадете анкета.',
	'ALREADY_DELETED'			=> 'За съжаление това съобщение е било изтрито.',
	'ATTACH_DISK_FULL'			=> 'Няма достатъчно място за съхраняване на прикачения файл.',
	'ATTACH_QUOTA_REACHED'		=> 'Тази форумна система не разползга с повече място за прикачени файлове.',
	'ATTACH_SIG'				=> 'Добавяне на подпис (може да се променя в настройките)',

	'BBCODE_A_HELP'				=> 'Прикачен файл сред текста: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Получерен текст: [b]текст[/b]',
	'BBCODE_C_HELP'				=> 'Показване на код: [code]код[/code]',
	'BBCODE_D_HELP'				=> 'Флаш: [flash=ширина,височина]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Размер на шрифта: [size=85]малък текст[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s е <em>изключен</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s е <em>включен</em>',
	'BBCODE_I_HELP'				=> 'Курсивен текст: [i]текст[/i]',
	'BBCODE_L_HELP'				=> 'Списък: [list]текст[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Списъчен елемент: [*]текст[/*]',
	'BBCODE_O_HELP'				=> 'Подреден списък: [list=]текст[/list]',
	'BBCODE_P_HELP'				=> 'Изображение: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Цитат: [quote]текст[/quote]',
	'BBCODE_S_HELP'				=> 'Цвят на шрифта: [color=red]текст[/color]  Съвет: може да ползвате и код за цвета, напр. color=#FF0000',
	'BBCODE_U_HELP'				=> 'Подчертан текст: [u]текст[/u]',
	'BBCODE_W_HELP'				=> 'Адрес: [url]http://url[/url] или [url=http://url]текст[/url]',
	'BBCODE_Y_HELP'				=> 'Списък: Добавяне на елемент към списъка',
	'BUMP_ERROR'				=> 'Не може да вдигате темата толкова скоро след последното мнение.',

	'CANNOT_DELETE_REPLIED'		=> 'Може да изтривате само мнения без отговор.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Мнението е било заключено. Повече не може да го променяте.',
	'CANNOT_EDIT_TIME'			=> 'Вече не може да променяте или изтривате това мнение.',
	'CANNOT_POST_ANNOUNCE'		=> 'Не може да пускате важни съобщения.',
	'CANNOT_POST_STICKY'		=> 'Не може да пускате важни теми.',
	'CHANGE_TOPIC_TO'			=> 'Смяна на типа на темата на',
	'CLOSE_TAGS'				=> 'Затваряне на елементите',
	'CURRENT_TOPIC'				=> 'Текуща тема',

	'DELETE_FILE'				=> 'Изтриване на файла',
	'DELETE_MESSAGE'			=> 'Изтриване на съобщението',
	'DELETE_MESSAGE_CONFIRM'	=> 'Наистина ли искате да изтриете съобщението?',
	'DELETE_OWN_POSTS'			=> 'Може да изтривате само собствените си мнения.',
	'DELETE_POST_CONFIRM'		=> 'Наистина ли желаете да изтриете мнението?',
	'DELETE_POST_WARN'			=> 'Мнението не може да бъде възстановено след изтриване',
	'DISABLE_BBCODE'			=> 'Изключване на BBCode',
	'DISABLE_MAGIC_URL'			=> 'Без автоматично разпознаване на адреси (URL)',
	'DISABLE_SMILIES'			=> 'Изключване на усмивките',
	'DISALLOWED_CONTENT'		=> 'Качването беше отказано, защото въпросният файл представлява възможна заплаха за сигурността.',
	'DISALLOWED_EXTENSION'		=> 'Разширението %s не е разрешено.',
	'DRAFT_LOADED'				=> 'Draft loaded into posting area, you may want to finish your post now.<br />Your draft will be deleted after submitting this post.',
	'DRAFT_LOADED_PM'			=> 'Draft loaded into message area, you may want to finish your private message now.<br />Your draft will be deleted after submitting this private message.',
	'DRAFT_SAVED'				=> 'Черновата беше съхранена.',
	'DRAFT_TITLE'				=> 'Заглавие на черновата',

	'EDIT_REASON'				=> 'Причина за промяна на мнението',
	'EMPTY_FILEUPLOAD'			=> 'Каченият файл е празен.',
	'EMPTY_MESSAGE'				=> 'Трябва да въведете текст на мнението.',
	'EMPTY_REMOTE_DATA'			=> 'Файлът не можа да бъде качен. Опитайте да го направите от локалния си компютър.',

	'FLASH_IS_OFF'				=> 'Кодът [flash] е <em>изключен</em>',
	'FLASH_IS_ON'				=> 'Кодът [flash] е <em>включен</em>',
	'FLOOD_ERROR'				=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'				=> 'Цвят на шрифта',
	'FONT_COLOR_HIDE'			=> 'Скриване на палитрата',
	'FONT_HUGE'					=> 'Огромен',
	'FONT_LARGE'				=> 'Голям',
	'FONT_NORMAL'				=> 'Нормален',
	'FONT_SIZE'					=> 'Размер на шрифта',
	'FONT_SMALL'				=> 'Малък',
	'FONT_TINY'					=> 'Миниатюрен',

	'GENERAL_UPLOAD_ERROR'		=> 'Прикаченият файл не можа да бъде съхранен в %s.',

	'IMAGES_ARE_OFF'			=> 'Кодът [img] е <em>изключен</em>',
	'IMAGES_ARE_ON'				=> 'Кодът [img] е <em>включен</em>',
	'INVALID_FILENAME'			=> '%s е неприемливо име на файл.',

	'LOAD'						=> 'Зареждане',
	'LOAD_DRAFT'				=> 'Зареждане на черновата',
	'LOAD_DRAFT_EXPLAIN'		=> 'Here you are able to select the draft you want to continue writing. Your current post will be cancelled, all current post contents will be deleted. View, edit and delete drafts within your User Control Panel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'You need to login in order to bump topics within this forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'You need to login in order to delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'You need to login in order to post within this forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'You need to login in order to quote posts within this forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'You need to login in order to reply to topics within this forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Въведете съобщението си. (Не може да съдържа повече от <strong>%d</strong> знака.)',
	'MESSAGE_DELETED'			=> 'Съобщението беше изтрито.',
	'MORE_SMILIES'				=> 'Още усмивки',

	'NOTIFY_REPLY'				=> 'Известяване при отговор',
	'NOT_UPLOADED'				=> 'Файлът не можа да бъде качен.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Не може да изтриете съществуващи отговори на анкетата.',
	'NO_PM_ICON'				=> 'Без иконка за ЛС',
	'NO_POLL_TITLE'				=> 'Трябва да въведете заглавие на анкетата.',
	'NO_POST'					=> 'Указаното мнение не съществува.',
	'NO_POST_MODE'				=> 'Не е посочен вид на мнението.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_SIZE_NA'				=> 'The attachment’s file size is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s file size is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Поставяне сред текста',
	'POLL_DELETE'				=> 'Изтриване на анкетата',
	'POLL_FOR'					=> 'Период на активност',
	'POLL_FOR_EXPLAIN'			=> 'Въведете 0 или оставете празно за вечна анкета.',
	'POLL_MAX_OPTIONS'			=> 'Отговори на потребител',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Това е броят отговори, които всеки потребител може да избере при гласуване.',
	'POLL_OPTIONS'				=> 'Отговори на анкетата',
	'POLL_OPTIONS_EXPLAIN'		=> 'Запишете всеки отговор на нов ред. Може да въведете до <strong>%d</strong> отговора.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Запишете всеки отговор на нов ред. Може да въведете до <strong>%d</strong> options. Ако премахнете или добавите отговори, досегашните гласове ще бъдат изтрити.',
	'POLL_QUESTION'				=> 'Въпрос',
	'POLL_TITLE_TOO_LONG'		=> 'Заглавието на анкетата не трябва да съдържа повече от 100 знака.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Анкетата е прекалено голяма. Опитайте се да я съкратите.',
	'POLL_VOTE_CHANGE'			=> 'Разрешаване на повторно гласуване',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ако е включено, потребителите имат възможност да променят гласа си.',
	'POSTED_ATTACHMENTS'		=> 'Прикачени файлове',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'Съобщението беше изтрито.',
	'POST_EDITED'				=> 'Съобщението беше променено.',
	'POST_EDITED_MOD'			=> 'Съобщението беше променено, но ще е видно едва когато бъде одобрено от модератор.',
	'POST_GLOBAL'				=> 'глобална',
	'POST_ICON'					=> 'Иконка за мнението',
	'POST_NORMAL'				=> 'обикновена',
	'POST_REVIEW'				=> 'Post review',
	'POST_REVIEW_EDIT'			=> 'Post review',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'Съобщението беше пуснато.',
	'POST_STORED_MOD'			=> 'Съобщението беше пратено, но ще е видно едва когато бъде одобрено от модератор.',
	'POST_TOPIC_AS'				=> 'Пускане на темата като',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> 'You may embed only %1$d quotes within each other.',

	'SAVE'						=> 'Запис като чернова',
	'SAVE_DATE'					=> 'Записано на',
	'SAVE_DRAFT'				=> 'Запис като чернова',
	'SAVE_DRAFT_CONFIRM'		=> 'Обърнете внимание, че записването като чернова включва само заглавието и съдържанието на съобщението. Всичко останало ще бъде премахнато. Искате ли да съхраните черновата си?',
	'SMILIES'					=> 'Усмивки',
	'SMILIES_ARE_OFF'			=> 'Усмивките са <em>изключени</em>',
	'SMILIES_ARE_ON'			=> 'Усмивките са <em>включени</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Времево ограничение за важни теми и обявления',
	'STICK_TOPIC_FOR'			=> 'Да бъде важна',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Въведете 0 или оставете празно, за да няма ограничение във времето. Обърнете внимание, че периодът на важност се изчислява от датата на мнението.',
	'STYLES_TIP'				=> 'Съвет: Стиловете могат да се прилагат и върху маркиран текст.',

	'TOO_FEW_CHARS'				=> 'Съобщението ви е прекалено късо.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Съобщението ви съдържа %1$d знака. Трябва да въведете поне %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Посочете поне два възможни отговора.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'			=> 'Съобщението ви е прекалено дълго.',
	'TOO_MANY_CHARS_POST'		=> 'Съобщението ви съдържа %1$d знака, а са разрешени само %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Подписът ви съдържа %1$d знака, а са разрешени само %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Посочили сте прекалено много възможни отговори.',
	'TOO_MANY_SMILIES'			=> 'Съобщението ви съдържа прекалено много усмивки. Разрешени са само %d.',
	'TOO_MANY_URLS'				=> 'Съобщението ви съдържа прекалено много връзки. Разрешени са само %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Темата беше вдигната.',

	'UNAUTHORISED_BBCODE'		=> 'Не може да ползвате определени кодове: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'			=> 'Обновяване на коментара',
	'URL_INVALID'				=> 'Въведеният адрес е неправилен.',
	'URL_NOT_FOUND'				=> 'Посоченият файл не можа да бъде намерен.',
	'URL_IS_OFF'				=> 'Кодът [url] е <em>изключен</em>',
	'URL_IS_ON'					=> 'Кодът [url] е <em>включен</em>',
	'USER_CANNOT_BUMP'			=> 'не може да вдигате теми.',
	'USER_CANNOT_DELETE'		=> 'Не може да изтривате мнения.',
	'USER_CANNOT_EDIT'			=> 'Не може да променяте мнения.',
	'USER_CANNOT_REPLY'			=> 'Не може да отговаряте.',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sПреглед на изпратеното мнение%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sПреглед на изпратеното лично съобщение%s',

	'WRONG_FILESIZE'			=> 'Файлът е по-голям от разрешения размер от %1d %2s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',

	// borislav
	'SEO_URL' => 'Красив адрес',
));
