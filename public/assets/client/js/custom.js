$(function () {

	var cookie = getCookie('cookie');

	if (cookie == '1') {
		return;
	} else {
		$('.cookie-message').addClass('active');
	}

	$('#cookie-accept').click(function () {
		setCookie('cookie', '1', '999999');
		$('.cookie-message').removeClass('active');
	});

	function setCookie(key, value, expiry) {
		var expires = new Date();
		expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
		document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
	}

	function getCookie(key) {
		var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
		return keyValue ? keyValue[2] : null;
	}

	function eraseCookie(key) {
		var keyValue = getCookie(key);
		setCookie(key, keyValue, '-1');
	}

})
