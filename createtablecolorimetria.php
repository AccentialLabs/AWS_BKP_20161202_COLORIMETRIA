<script src="js/page/configuracao.js"></script>
<script src="lib/jquery/jquery-2.1.4.min.js"></script>';
<script src="lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>';
<script src="lib/bootstrap/js/bootstrap.min.js"></script>';
<script src="lib/bootstrap/js/bootstrap.min.js"></script>';
<script src="js/page/configuracao.js"></script>';
<script src="lib/jquery/jquery.base64.js"></script>';
<script src="lib/jquery-storage/jquery.cookie.js"></script>';
<script src="lib/jquery-storage/jquery.storageapi.min.js"></script>';
<link rel="stylesheet" href="lib/font-awesome-4.6.3/css/font-awesome.css">';
<script src="lib/jquery-confirm/js/jquery-confirm.min.js"></script>';
<link rel="stylesheet" href="lib/jquery-confirm/css/jquery-confirm.min.css">';
<script src="lib/jquery-storage/json2.js"></script>';

<script>
$( document ).ready(function() {
	
	   var colors = [1,2,3,4,5,6,7,8,9,10,11,12];
	   var nuances = [00,01,1,10,11,13,20,21,3,30,31,32,33,34,35,4,43,44,45,46,5,55,52,53,63,64,65,66,661,71];
		for(var i=0;i<colors.length;i++){
			for(var j = 0;j<nuances.length;j++){
				if(nuances[j]!=55&&nuances[j]!=44&&nuances[j]!=46&&nuances[j]!=71){
					var query = 'INSERT INTO colorimetria (id,img, ref, color, nuance) VALUES ("'+colors[i]+'.'+nuances[j]+'","'+colors[i]+'.'+nuances[j]+'.png","",'+colors[i]+','+nuances[j]+');';
		
					var conditions = {
						'User': {
						'query':query
					}
					};
		
					var postData = JSON.stringify(conditions);

					postData = {
						'params': postData
					};
		
					var url = 'http://'+api+'/users/get/query/' + createToken();

					$.ajax({
					method: "POST",
					url: url,
					data: postData
	
					}).done(function(result) {
						if(result !=''){
							var objReturn = JSON.parse(JSON.stringify(result));
							var decodeObjReturn = Base64.decode(objReturn);
							var convertedReturn = JSON.parse(decodeObjReturn);
							console.log(convertedReturn);
						}

					}).error(function (XMLHttpRequest, textStatus, errorThrown) {
						alert(errorThrown);
					});
				}else{
					if(colors[i]==4||colors[i]==5||colors[i]==6||colors[i]==7||colors[i]==8){
					var query = 'INSERT INTO colorimetria(id,img, ref, color, nuance) VALUES ("'+colors[i]+'.'+nuances[j]+'","'+colors[i]+'.'+nuances[j]+'.png","'+colors[i]+''+colors[i]+'.'+nuances[j]+'",'+colors[i]+','+nuances[j]+');';

					
					var conditions = {
						'User': {
						'query':query
						}
					};
		
					var postData = JSON.stringify(conditions);

					postData = {
						'params': postData
					};
		
						var url = 'http://'+api+'/users/get/query/' + createToken();

					$.ajax({
					method: "POST",
					url: url,
					data: postData
	
					}).done(function(result) {
						if(result !=''){
							var objReturn = JSON.parse(JSON.stringify(result));
							var decodeObjReturn = Base64.decode(objReturn);
							var convertedReturn = JSON.parse(decodeObjReturn);
							console.log(convertedReturn);
						}

					}).error(function (XMLHttpRequest, textStatus, errorThrown) {
						alert(errorThrown);
					});
					}	
				}	
			}
		}
		

});
function utf8_decode(str_data) {
    // http://kevin.vanzonneveld.net
    // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
    // +	  input by: Aman Gupta
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // *	 example 1: utf8_decode('Kevin van Zonneveld');
    // *	 returns 1: 'Kevin van Zonneveld'

    var tmp_arr = [], i = ac = c = c1 = c2 = 0;

    while (i < str_data.length) {
        c = str_data.charCodeAt(i);
        if (c < 128) {
            tmp_arr[ac++] = String.fromCharCode(c);
            i++;
        }
        else if ((c > 191) && (c < 224)) {
            c2 = str_data.charCodeAt(i + 1);
            tmp_arr[ac++] = String.fromCharCode(((c & 31) << 6) | (c2 & 63));
            i += 2;
        }
        else {
            c2 = str_data.charCodeAt(i + 1);
            c3 = str_data.charCodeAt(i + 2);
            tmp_arr[ac++] = String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
            i += 3;
        }
    }

    return tmp_arr.join('');
    function utf8_decode(str_data) {
        // http://kevin.vanzonneveld.net
        // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
        // +	  input by: Aman Gupta
        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // *	 example 1: utf8_decode('Kevin van Zonneveld');
        // *	 returns 1: 'Kevin van Zonneveld'

        var tmp_arr = [], i = ac = c = c1 = c2 = 0;

        while (i < str_data.length) {
            c = str_data.charCodeAt(i);
            if (c < 128) {
                tmp_arr[ac++] = String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = str_data.charCodeAt(i + 1);
                tmp_arr[ac++] = String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = str_data.charCodeAt(i + 1);
                c3 = str_data.charCodeAt(i + 2);
                tmp_arr[ac++] = String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }
        }

        return tmp_arr.join('');
    }
}
function generateModalAlert(mensagem) {
    if ($("#mymodal").length) {
        $("#messageModelGoesHere").html(mensagem);
    } else {
        $modalHtml =
                '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="mymodal">'
                + '<div class="modal-dialog modal-sm">'
                + '<div class="modal-content" id="messageModelGoesHere">'
                + mensagem
                + '</div>'
                + '</div>'
                + '</div>';
        $("body").append($modalHtml);
    }
}
var Base64 = {
    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    encode: function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;
        input = Base64._utf8_encode(input);
        while (i < input.length) {
            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);
            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;
            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }
            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
        }
        return output;
    },
    decode: function (input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;
        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
        while (i < input.length) {
            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));
            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;
            output = output + String.fromCharCode(chr1);
            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }
        }
        output = Base64._utf8_decode(output);
        return output;
    },
    _utf8_encode: function (string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";
        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);
            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }
        return utftext;
    },
    _utf8_decode: function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;
        while (i < utftext.length) {
            c = utftext.charCodeAt(i);
            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }
        }
        return string;
    }
};
function createToken() {
    var arraySend = {
        'secureNumbers': Math.floor(new Date().getTime() / 1000)
    };
    var json = JSON.stringify(arraySend);
    return Base64.encode(json);
}
</script>