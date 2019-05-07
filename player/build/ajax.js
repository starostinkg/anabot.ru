/**
 *   AjaxRequest Class
 *   Разработчик: KiriK [mail@kirik.ws]
 *   Документация: http://www.kirik.ws/ajax.html
 *
 *   Распространяется под лицензией GNU General Public License, version 3:
 *   http://www.gnu.org/licenses/lgpl.txt
**/
function AjaxRequest(url, execute) {
    var HttpRequest;
    var _OnLoad = function () { }
    var _OnComplete = function () { }
    var _OnError = function () {
        /* alert('AJAX query error.'); */
    }
    var Execute = function (responseText) {
        var obj = document.createElement('div');
        obj.innerHTML = responseText;
        var elts = obj.getElementsByTagName('script');

        for(var i = 0; i < elts.length; i++) {
            eval(elts[i].text);
            elts[i].parentNode.removeChild(elts[i]);
        }
    }

    this.OnLoad = function (fn) {
        _OnLoad = fn;
    }

    this.OnComplete = function (fn) {
        _OnComplete = fn;
    }

    this.OnError = function (fn) {
        _OnComplete = fn;
    }

    this.Post = function (params) {
        if(this.RequestPrepare()) {
            params = this.StrPrepare(params);
            HttpRequest.open('POST', url, true);
            HttpRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=utf-8');
            HttpRequest.setRequestHeader('Content-length', params.length);
            HttpRequest.setRequestHeader('Connection', 'close');
            HttpRequest.send(params);
        }
    }

    this.Get = function (params) {
        if(this.RequestPrepare()) {
            url += this.StrPrepare(params);
            HttpRequest.open('GET', url, true);
            HttpRequest.send(null);
        }
    }

    this.RequestPrepare = function () {
        if (window.XMLHttpRequest) { /* Mozilla, Safari,... */
            HttpRequest = new XMLHttpRequest();
            if (HttpRequest.overrideMimeType) {
                HttpRequest.overrideMimeType('text/html');
            }
        } else if (window.ActiveXObject) { /* IE */
            try {
                HttpRequest = new ActiveXObject('Msxml2.XMLHTTP');
            } catch (e) {
                try {
                    HttpRequest = new ActiveXObject('Microsoft.XMLHTTP');
                } catch (e) {
                    /* do nothing */
                }
            }
        }

        if (typeof HttpRequest == 'undefined') {
            alert('Cannot create XMLHTTP instance.');
            return false;
        }

        HttpRequest.onreadystatechange = function(e) {
            if (HttpRequest.readyState == 1) {
                _OnLoad();
            }

            if (HttpRequest.readyState == 4) {
                if(HttpRequest.status == 200) {
                    if(execute === true) {
                        Execute(HttpRequest.responseText);
                    }
                    _OnComplete(HttpRequest.responseText);
                } else {
                    _OnError(HttpRequest.status);
                }
            }
        }
        return true;
    }

    this.StrPrepare = function (obj) {
        if(obj instanceof Object) {
            var i = 0;
            var arr = [];
            for (var key in obj) {
                arr[i++] = encodeURIComponent(key) + '=' + encodeURIComponent(obj[key]);
            }
            return arr.join('&');
        } else {
            return '';
        }
    }
}



function explode( delimiter, string ) {	// Split a string by string
	// 
	// +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: kenneth
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

	var emptyArray = { 0: '' };

	if ( arguments.length != 2
		|| typeof arguments[0] == 'undefined'
		|| typeof arguments[1] == 'undefined' )
	{
		return null;
	}

	if ( delimiter === ''
		|| delimiter === false
		|| delimiter === null )
	{
		return false;
	}

	if ( typeof delimiter == 'function'
		|| typeof delimiter == 'object'
		|| typeof string == 'function'
		|| typeof string == 'object' )
	{
		return emptyArray;
	}

	if ( delimiter === true ) {
		delimiter = '1';
	}

	return string.toString().split ( delimiter.toString() );
}