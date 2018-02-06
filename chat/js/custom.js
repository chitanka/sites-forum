/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Overriding client side functionality:

// BEGIN OVERWRITTEN METHODS

ajaxChat.initialize = function() {
	this.setUnloadHandler();
	this.initializeDocumentNodes();
	this.loadPageAttributes();
	//this.initEmoticons();
	this.initColorCodes();
	this.initializeSettings();
	this.setSelectedStyle();
	this.customInitialize();
	this.setStatus('retrying');
	if(typeof this.initializeFunction === 'function') {
		this.initializeFunction();
	}
	if(!this.isCookieEnabled()) {
		this.addChatBotMessageToChatList('/error CookiesRequired');
	} else {
		if(this.startChatOnLoad) {
			this.startChat();
		} else {
			this.setStartChatHandler();
			this.requestTeaserContent();
		}
	}
};

ajaxChat.getUserNodeString = function(userID, userName, userRole) {
	var encodedUserName, str;
	if(this.userNodeString && userID === this.userID) {
		return this.userNodeString;
	} else {
		encodedUserName = this.scriptLinkEncode(userName);
		str	= '<div id="'
			+ this.getUserDocumentID(userID)
			+ '"><a href="javascript:ajaxChat.toggleUserMenu(\''
			+ this.getUserMenuDocumentID(userID)
			+ '\', \''
			+ encodedUserName
			+ '\', '
			+ userID
			+ ');" class="'
			+ this.getRoleClass(userRole)
			+ ' ' + this.getUserNameClass(userName) // borislav
			+ '" title="'
			+ this.lang['toggleUserMenu'].replace(/%s/, userName)
			+ '">'
			+ this.getCustomUserName(userName) // borislav
			+ '</a>'
			+ '<ul class="userMenu" id="'
			+ this.getUserMenuDocumentID(userID)
			+ '"'
			+ ((userID === this.userID) ?
				'>'+this.getUserNodeStringItems(encodedUserName, userID, false) :
				' style="display:none;">')
			+ '</ul>'
			+'</div>';
		if(userID === this.userID) {
			this.userNodeString = str;
		}
		return str;
	}
};


ajaxChat.getChatListMessageString = function(dateObject, userID, userName, userRole, messageID, messageText, channelID, ip) {
	var rowClass = this.DOMbufferRowClass;
	var userClass = this.getRoleClass(userRole)
		+ ' ' + this.getUserNameClass(userName); // borislav
	var colon;
	if(messageText.indexOf('/action') === 0 || messageText.indexOf('/me') === 0 || messageText.indexOf('/privaction') === 0) {
		userClass += ' action';
		colon = ' ';
	} else {
		colon = ': ';
	}
	if (messageText.indexOf('/privmsg') === 0 || messageText.indexOf('/privmsgto') === 0 || messageText.indexOf('/privaction') === 0) {
		rowClass += ' private';
	}
	var dateTime = this.settings['dateFormat'] ? '<span class="dateTime">'
		+ this.formatDate(this.settings['dateFormat'], dateObject) + '</span> ' : '';

	var privmsg = "";
	if (this.userID != userID && this.chatBotID != userID) {
		privmsg = '<span style="vertical-align: middle">'
			+ '<img style="cursor:pointer" width="13" height="13" alt="@" title="'
			+ this.lang['userMenuSendPrivateMessage']
			+ '" src="'
			+ this.settings.privmsgPng
			+ '" onclick="ajaxChat.insertMessageWrapper(\'/msg '
			+ userName
			+ ' \'); return false">'
			+ '</span> ';
	}

	return '<div id="'
		+ this.getMessageDocumentID(messageID)
		+ '" class="'
		+ rowClass
		+ '">'
		+ this.getDeletionLink(messageID, userID, userRole, channelID)
		+ dateTime
		+ privmsg
		+ '<span class="'
		+ userClass
		+ '"'
		+ this.getChatListUserNameTitle(userID, userName, userRole, ip)
		+ ' dir="'
		+ this.baseDirection
		+ '" onclick="ajaxChat.insertText(this.firstChild.nodeValue);">'
		+ userName
		+ '</span>'
		+ colon
		+ this.replaceText(messageText)
		+ '</div>';
};


ajaxChat.replaceText = function(text) {
	try{
		text = this.replaceLineBreaks(text);
		if(text.charAt(0) === '/') {
			text = this.replaceCommands(text);
		} else {
			text = this.replaceEmoticons(text);
			text = this.replaceEmojis(text);
			text = this.replaceBBCode(text);
			text = this.replaceHyperLinks(text);
			text = " " + text; // borislav: some smiley codes start with a space
		}
		text = this.breakLongWords(text);
		text = this.replaceCustomText(text);
	} catch(e){
		this.debugMessage('replaceText', e);
	}
	return text;
};

ajaxChat.replaceCommandNick = function(textParts) {
	return '<span class="chatBotMessage">'
		+ this.lang['nick'].replace(/%s/, textParts[1]).replace(/%s/, textParts[2])
		+ '</span>';
};


ajaxChat.replaceBBCodeColor = function(content, attribute) {
	if(this.settings['bbCodeColors']) {
		// Only allow predefined color codes:
		if(!attribute || !this.inArray(ajaxChat.colorCodes, attribute))
			return content;
		return 	'<span style="color:'
			+ attribute + ';">'
			+ this.replaceBBCode(content)
			+ '</span>';
	}
	return content;
};


ajaxChat.playSoundOnNewMessage = function(dateObject, userID, userName, userRole, messageID, messageText, channelID, ip) {
	var messageParts;
	if(this.settings['audio'] && this.sounds && this.lastID && !this.channelSwitch) {
		if(this.customSoundOnNewMessage(dateObject, userID, userName, userRole, messageID, messageText, channelID, ip) === false) {
			return;
		}
		messageParts = messageText.split(' ', 1);
		switch(userID) {
			case this.chatBotID:
				switch(messageParts[0]) {
					case '/login':
					case '/channelEnter':
						this.playSound(this.settings['soundEnter']);
						break;
					case '/logout':
					case '/channelLeave':
					case '/kick':
						this.playSound(this.settings['soundLeave']);
						break;
					case '/error':
						this.playSound(this.settings['soundError']);
						break;
					default:
						this.playSound(this.settings['soundChatBot']);
				}
				break;
			case this.userID:
				switch(messageParts[0]) {
					case '/privmsgto':
						this.playSound(this.settings['soundPrivate']);
						break;
					default:
						this.playSound(this.settings['soundSend']);
				}
				break;
			default:
				switch(messageParts[0]) {
					case '/privmsg':
						this.playSound(this.settings['soundPrivate']);
						break;
					default:
						if ( this.isImportantMsg(messageText) ) {
							this.playSound(this.settings['soundPrivate']);
						} else {
							this.playSound(this.settings['soundReceive']);
						}
				}
				break;
		}
	}
};


ajaxChat.blinkOnNewMessage = function(dateObject, userID, userName, userRole, messageID, messageText, channelID, ip) {
	if(this.settings['blink'] && this.lastID && !this.channelSwitch && userID !== this.userID) {
		clearInterval(this.blinkInterval);
		this.blinkInterval = setInterval(
			"ajaxChat.blinkUpdate('"
				+ this.addSlashes(this.decodeSpecialChars(userName))
				+ "', '"
				+ ( this.isImportantMsg(messageText) ? "!!!" : "@" )
				+ "')",
			this.settings['blinkInterval']
		);
	}
};

ajaxChat.blinkUpdate = function(blinkStr, marker) {
		if(!this.originalDocumentTitle) {
			this.originalDocumentTitle = document.title;
		}
		if(!arguments.callee.blink) {
			document.title = '['+marker+' ] '+blinkStr+' - '+this.originalDocumentTitle;
			arguments.callee.blink = 1;
		} else if(arguments.callee.blink > this.settings['blinkIntervalNumber']) {
			clearInterval(this.blinkInterval);
			document.title = this.originalDocumentTitle;
			arguments.callee.blink = 0;
		} else {
			if(arguments.callee.blink % 2 != 0) {
				document.title = '['+marker+' ] '+blinkStr+' - '+this.originalDocumentTitle;
			} else {
				document.title = '[ '+marker+'] '+blinkStr+' - '+this.originalDocumentTitle;
			}
			arguments.callee.blink++;
		}
	};


// END OVERWRITTEN METHODS



ajaxChat.userIsMentioned = function(messageText)
{
	return messageText.toLowerCase().indexOf(this.userName.toLowerCase()) !== -1;
};

ajaxChat.isPrivMsg = function(messageText)
{
	return messageText.indexOf("/privmsg") === 0;
};

ajaxChat.isImportantMsg = function(messageText)
{
	return this.userIsMentioned(messageText) || this.isPrivMsg(messageText);
};

ajaxChat.getCustomUserName = function(userName)
{
	if (userName[0] == "[") {
		userName = '<span class="away">' + userName + '</span>';
	}

	return userName;
};

ajaxChat.getUserNameClass = function(userName)
{
	userName = userName.replace(/[\.]/g, '_');

	if (userName.charAt(0) == "~") {
		return userName.substring(1);
	}

	var m = userName.match(/^\[(.+)\]$/);
	if (m) {
		return m[1];
	}

	return userName;
};

ajaxChat.replaceCustomCommands = function(text, textParts)
{
	var command = textParts[0];
	delete textParts[0];
	switch( command ) {
		case '/fake':
			return '<span class="chatBotMessage">' + textParts.join(" ") + '</span>';
		default:
			return text;
	}
};

ajaxChat.replaceCustomText = function(text)
{
	if (text.indexOf("chatBotMessage") == -1) {
		var userName = this.userName.replace(/[\(\)\[\]]/g, "\\$&");
		text = (" " + text).replace(
			new RegExp("(\\s+)(" + userName + "[\\wа-яА-Я]*)", "g"),
			'$1<span class="myname">$2</span>');
	}

	return text;
};

ajaxChat.replaceEmojis = function(text) {
	text = text.replace(/:(fa[sr]?)-([a-z\d_-]+):/g, this.replaceFontAwesomeCallback);
	return emojione.shortnameToImage(text);
};
ajaxChat.replaceFontAwesomeCallback = function(text, family, code) {
	return '<i class="'+family+' fa-'+code+' faicon" title="'+family+'-'+code+'"></i>';
};

// does not work
// ajaxChat.customFinalize = function()
// {
// 	$("#logoutButton").click();
// };

ajaxChat.logoutOrig = ajaxChat.logout;
ajaxChat._loggingOut = false;
ajaxChat.logout = function()
{
	ajaxChat._loggingOut = true;
	ajaxChat.logoutOrig();
};

window.onbeforeunload = function(event)
{
	if ( ! ajaxChat._loggingOut && window.confirm("Излизате ли от чата?")) {
		$("#logoutButton").click();
		alert("Чао!");
	}
};

$(function(){
	var _toggler = null;
	$('<button/>')
		.html('<img src="./img/emoticons/smile.png" alt=":-)" style="vertical-align:bottom" />')
		.click(function(){
			if ( _toggler ) {
				_toggler.toggle();
			} else {
				ajaxChat.initEmoticons();
				_toggler = $("#emoticonsContainer");
			}
			return false;
		})
		.prependTo("#bbCodeContainer");
});

jQuery.merge(ajaxChatConfig.emoticonCodes, [
	':boza:',
	':green tea:',
	':redwine:',
	':beer:',
	':coffee:',
	':rakija:',
	':bloodymary:',
	':agree:',
	':disagree:',
	':rose:',
	':violet:',
	':apathe:',
	':bzgf:',
	':confused:',
	':flowers:',
	':hih:',
	':melancholy:',
	':ou:',
	':pc:',
	':closedeyes:',
	':shame:',
	':wub:',
	':bow:',
	':pirate:',
	':metalhorns:',
	':lol:',
	':trophy:',
	':choco:'
]);

jQuery.merge(ajaxChatConfig.emoticonFiles, [
	'extra/boza.png',
	'extra/green_tea.png',
	'extra/redwine.gif',
	'https://cdn.jsdelivr.net/emojione/assets/3.1/png/32/1f37a.png',
	'extra/coffee.gif',
	'extra/rakija.png',
	'extra/bloody_mary.png',
	'https://cdn.jsdelivr.net/emojione/assets/3.1/png/32/1f44d.png',
	'https://cdn.jsdelivr.net/emojione/assets/3.1/png/32/1f44e.png',
	'extra/rose.gif',
	'extra/violet.gif',
	'extra/apathe.gif',
	'extra/bzgf0.gif',
	'extra/confused.gif',
	'extra/flowers.gif',
	'extra/hih.gif',
	'extra/melancholy.gif',
	'extra/ou.gif',
	'extra/pc1.gif',
	'extra/closedeyes.gif',
	'extra/shame.gif',
	'extra/wub.gif',
	'extra/bow.gif',
	'extra/pirate2.gif',
	'extra/metalhorns.png',
	'extra/lol.gif',
	'extra/trophy.gif',
	'extra/choco.png'
]);

ajaxChatConfig.emoticonCodes[3] = ' :P';
ajaxChatConfig.emoticonCodes[4] = ' :D';
ajaxChatConfig.emoticonCodes[5] = ' :|';
ajaxChatConfig.emoticonCodes[6] = ' :O';
ajaxChatConfig.emoticonCodes[7] = ' :?';
ajaxChatConfig.emoticonCodes[8] = ' 8)';
ajaxChatConfig.emoticonCodes[10] = ' B)';
ajaxChatConfig.emoticonCodes[15] = '}:-D';

ajaxChatConfig.settings.privmsgPng = 'img/extra/chat_privmsg.png';

ajaxChatConfig.emojis = {};


$.idleTimer(1800000);

$(document).bind("idle.idleTimer", function(){
	ajaxChat.sendMessageWrapper('/away');
});

$(document).bind("active.idleTimer", function(){
	ajaxChat.sendMessageWrapper('/back');
});
