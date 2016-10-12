(function() {
	var getRandom = function() {
		return parseInt(Math.random() * 100000);
	};
	var getCookie = function(key) {
		if (document.cookie == '') {
			return ''
		}
		var aCookie = document.cookie.split('; ');
		for (var i = 0, l = aCookie.length; i < l; ++i) {
			var arr = aCookie[i].split('=');
			if (arr[0] == key) {
				return arr[1];
			}
		}
		return '';
	};
	var setCookie = function(key, val, option) {
		var str = key.toString() + '=' + val.toString() + ';';
		if (option) {
			for (var i in option) {
				var optionStr = i.toString() + '=' + option[i].toString() + ';';
				str += optionStr;
			}
		}
		document.cookie = str;
	};

	var cookieOption = {
		domain: 'http://www.xuetangx.com/static/js/appSrc/xuetangx.com',
		path: '/'
	};

	var setThisPageCookie = function(getSid) {
		setCookie('frontendUserTrack', getSid, cookieOption);
		setCookie('frontendUserReferrer', location.href, cookieOption);
	};


	var getSid = getCookie('frontendUserTrack');
	if (getSid === '') {
		getSid = getRandom();
	} else {
		getSid = getSid * 1 + 1;
	}

	var frontendUserReferrer = getCookie('frontendUserReferrer');

	setThisPageCookie(getSid);

	window.addEventListener('focus', function() {
		setThisPageCookie(getSid);
	}, false);

	var requestData = '&location=' + location.href + '&frontendUserTrack=' + getSid + '&frontendUserTrackPrev=' + (getSid - 1) + '&referrer=' + frontendUserReferrer + '&rnd=' + parseInt(Math.random()*100000);
	var beaconSrc = '../../../beacon-1.gif-type=page_visible.gif'/*tpa=http://www.xuetangx.com/beacon.gif?type=page_visible*/;
	var img = new Image();
	img.src = beaconSrc + requestData;

	var openTime = Date.now();
	window.addEventListener('beforeunload', function(event) {
		var durationTime = Date.now() - openTime;
		var img = new Image();
		img.src = '/beacon.gif?frontendUserTrack=' + getSid + '&durationTime=' + durationTime + '&location=' + location.href;
	}, false);
})();
