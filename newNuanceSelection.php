<html>
<meta charset="UTF-8">
<head>
<?php $array = (array)json_decode($_COOKIE['colorimetria_parameters']);$salao =$array['companyname'];$user = $array['username']; $page = 'home';	 if($array['usertype'] == 'professional'){
	 include  'MenuProfessionals.php';
}else{
	 include  'Menu.php';
}
?>
<script src="js/page/configuracao.js"></script>
<script src="lib/hammer.js-master/hammer.js"></script>
</head>
<body>
<div class="container">
<?php $title = 'NUANCES DESEJADOS'; include 'TitleProfessionals.php';?>
</div>
<div class="FirstLine">
<div class="row" style="margin:0%!important;">
<div id="myCarousel" class="carousel slide" >
<div class="carousel-inner" role="listbox">
<div class="item active">
<div class="swipeaction">
<table style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important; width:100%;height:45%;">
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height:  20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height:  20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
</table>
</div>
</div>
<div class="item ">
<div class="swipeaction">
<table style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important; width:100%;height:45%;">
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
</table>
</div>
</div>
<div class="item ">
<div class="swipeaction">
<table style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important; width:100%;height:45%;">
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
<td class="imgHome TextColors" onclick="seleciona(this);" style="background-image:url('https://secure.jezzy.com.br/uploads/loading/14017858_10210089587742018_1484715137_n.gif');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;">
</td>
</tr>
</table>
</div>
</div>
</div>
 <a class="left carousel-control hide" href="#myCarousel" role="button" data-slide="prev" id="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control hide" href="#myCarousel" role="button" data-slide="next" id="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
</a>
 <ol class="carousel-indicators" style="bottom: -15%;">
            <li data-target="#myCarousel" data-slide-to="0" id="1" class="active" ></li>
            <li data-target="#myCarousel" data-slide-to="1" id="2"></li>
			<li data-target="#myCarousel" data-slide-to="2" id="3"></li>
 </ol>
</div>
</div>
</div>
<button style="bottom: 17%;position: fixed;width: 100%;color:white;background-color:#afaf64;padding:3%;font-family:Open Sans;" onclick="volta();" class="btn">ESCOLHER OUTRA COR</button><br>
<button style="bottom: 8.5%;position: fixed;width: 100%;color:white;background-color:#999933;padding:3%;font-family:Open Sans;" id="exbutton" disabled onclick="exemplos();" class="btn">VER EXEMPLOS</button><br>
<button style="bottom: 0%;position: fixed;width: 100%;color:white;background-color:#2597AC;padding:3%;font-family:Open Sans;" id="confbutton" disabled onclick="nextstep();" class="btn">CONFIRMAR</button>
</body>
<script>
var rolagem = "";;
function volta(){
	window.history.go(-1);
}
function exemplos(){
	var uerreele = $.cookieStorage.get('ColorChoices');
	var nuance  = uerreele.WishNuance;
	var tom  = uerreele.WishColor;
	switch(tom){
			case 'dourado':
				tom = 3;
				break;
			case 'acobreado':
				tom = 4;
				break;
			case 'irisado':
				tom = 2;
				break;
			case 'cinza':
				tom = 1;
				break;
			case 'natural':
				tom = 0;
				break;
			case 'acaju':
				tom = 5;
				break;
			case 'vermelho':
				tom = 6;
				break;
			case 'mate ou marrom':
				tom = 7;
				break;
		}
		var pasta = "";
		var caminho = "";
		if(tom == 4 || tom == 6 || tom == 5){
			 pasta = 'Vibrant%20Reds';
			 caminho = 'Vibrant-Reds';
		}else if(tom == 1 || tom == 2 || tom == 3 || tom == 8){
			 pasta = 'Rich%20Naturals';
			 caminho = 'Rich-Naturals';
		}else if(tom == 0){
			 pasta = 'Pure%20Naturals';
			 caminho = 'Pure-Naturals';
		}else if(tom == 7){
			 pasta = 'Deep%20Browns';
			 caminho = 'Deep-Browns';
		}
		var nuancesearch = '';
		if(nuance.indexOf("|")!= -1){
			 nuancesearch = nuance.split("|")[0]+"l";
		}else{
			 nuancesearch = nuance;
		}
		var query = 'select * from exemplos_colorimetria where nuance = "'+ nuancesearch + '"';
		console.log(query);
		var conditions = {
			'User': {
            'query':query
			}
		};
		
		var postData = JSON.stringify(conditions);

		postData = {
        'params': postData
		};
		
		var url = 'https://'+api+'/users/get/query/' + createToken();

		$.ajax({
        method: "POST",
        url: url,
        data: postData
	
		}).done(function(result) {
			if(result !=''){
				var objReturn = JSON.parse(JSON.stringify(result));
				var decodeObjReturn = Base64.decode(objReturn);
				var convertedReturn = JSON.parse(decodeObjReturn);
				
			
				var texto = "";
				if(convertedReturn.length>1){
					for(var k = 0;k< convertedReturn.length;k++){
					
					texto += "<img class='col-xs-3' src='img/tons/"+pasta+"/"+nuancesearch+"/"+convertedReturn[k].exemplos_colorimetria.img+"'>";
				}		
				}else{
					texto = "<img class='col-xs-3' src='img/tons/"+pasta+"/"+nuancesearch+"/"+convertedReturn[0].exemplos_colorimetria.img+"'>";
				}
						
				
		$.dialog({
		title:'Nuance '+nuancesearch+"<br><span style='font-size:1.9vh;'>(Imagens meramente ilustrativas. Confira com<br>seu Profissional, o tom/nuance desejado)</span>",
		content: "<div class='col-xs-12'>"+texto+"</div>",
		theme:'supervan',
		columnClass: 'col-md-12',
		animation: 'left',
		closeAnimation: 'right',
		backgroundDismiss: true
		});
			}else{
				generateModalAlert('Sem exemplos para esse nuance');
				$('#mymodal').modal('show');
				
			}

		}).error(function (XMLHttpRequest, textStatus, errorThrown) {
        

		});
		
		
		
		
		
	
	
}
$( document ).ready(function() {
	
		
 

		var color = $.cookieStorage.get('ColorChoices').WishColor;
	    var Originalcolor = $.cookieStorage.get('ColorChoices').OriginalColor;

		switch(color){
			case 'dourado':
				color = 3;
				break;
			case 'acobreado':
				color = 4;
				break;
			case 'irisado':
				color = 2;
				break;
			case 'cinza':
				color = 1;
				break;
			case 'natural':
				color = 0;
				break;
			case 'acaju':
				color = 5;
				break;
			case 'vermelho':
				color = 6;
				break;
			case 'mate ou marrom':
				color = 7;
				break;
		}
		
		var query = 'select * from colorimetria  WHERE color <= ' + (parseFloat(Originalcolor) + 3)/1 + " and color >= " + parseFloat(Originalcolor)/1 + ' AND img != "" and nuance LIKE "'+color+'%" ORDER BY color ASC LIMIT 100000';
		
		
		var conditions = {
			'User': {
            'query':query
			}
		};
		
		var postData = JSON.stringify(conditions);

		postData = {
        'params': postData
		};
		
		var url = 'https://'+api+'/users/get/query/' + createToken();

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
				if(convertedReturn.length<=6){
					
					rolagem = 1;
				
					(document.getElementsByClassName("carousel-indicators")[0].children[1].setAttribute('class', 'hide'));
					(document.getElementsByClassName("carousel-indicators")[0].children[2].setAttribute('class', 'hide'));
					
		
				}else if(convertedReturn.length>6 && convertedReturn.length<=12){
					
					rolagem = 2;
					
					(document.getElementsByClassName("carousel-indicators")[0].children[2].setAttribute('class', 'hide'));
					
				}else if(convertedReturn.length>12 && convertedReturn.length<=18){
					
					rolagem  = 3;
					
				}
				
			
				
				for(var k = 0;k<convertedReturn.length;k++){
					var elemento = (document.getElementsByClassName('imgHome')[k]);
					var url = ("img/nuances%20desejadas/"+convertedReturn[k].colorimetria.img);
					elemento.style.backgroundImage = "url('"+url+"')";
					elemento.id = convertedReturn[k].colorimetria.id;
				
					 
				}
				
				for(var k = convertedReturn.length;k<document.getElementsByClassName('imgHome').length;k++){
					var elemento = ( document.getElementsByClassName('imgHome')[k]);
					var url = ("");
					elemento.style.backgroundImage = "url('"+url+"')";
					elemento.style.border = "1px solid white";
				}
				
	
		for(var h=0;h<rolagem-1;h++){
		var hammertime = new Hammer(document.getElementsByClassName('swipeaction')[h]);
		
		 hammertime.on('swipeleft', function(ev) {
		
			$("#next").click();
				
		});
		
		}
		for(var h=1;h<rolagem;h++){
		
		var hammertime = new Hammer(document.getElementsByClassName('swipeaction')[h]);
	
		hammertime.on('swiperight', function(ev) {
	
			$("#prev").click();
		
		});
		
		}
				
		}else{
			$.confirm({
				title: 'Desculpe!',
				content: 'Sem nuances para tom escolhido',
				confirmButton: 'VOLTAR',
				cancelButton: false,
				theme:'supervan',// hides the cancel button.
				confirm: function(){
					window.location.href = "newColorSelection.php";
				}
});
		}

		}).error(function (XMLHttpRequest, textStatus, errorThrown) {
        alert(errorThrown);

		});
		
		
		
		
		 $('.carousel').carousel({
			interval: false
		});
		
		
    
	
   
	
		
		
		
});
function nextstep(){
	
	if($.cookieStorage.get('colorimetria_parameters').usertype == 'professional'){
		var tamanho = '';
		if($.cookieStorage.get('ColorChoices').HairLength == 'cabelosCurtos'){
			tamanho = 'Cabelos Curtos';
		}else{
			tamanho = $.cookieStorage.get('ColorChoices').HairLength;
		}
		var original = $.cookieStorage.get('ColorChoices').OriginalColor.split('.')[0];
		
		var diferenca = (($.cookieStorage.get('ColorChoices').WishNuance.split('.')[0])/1)-(($.cookieStorage.get('ColorChoices').OriginalColor.split('.')[0])/1);
	
	var volumes = "";
	if((diferenca/1) == 1){
		volumes = '20 volumes';
	}else if((diferenca/1) == 2){
		volumes = '30 volumes';
	}else if((diferenca/1) == 3){
		volumes = '40 volumes';
	}else if((diferenca/1) == 0){
		volumes = 'Não necessita';
	}
		
		$.alert({
				title: 'INFORMAÇÕES',
				content: 'Nuance: '+$.cookieStorage.get('ColorChoices').WishNuance+'<br>Tamanho do cabelo: '+tamanho+'<br>Volumes: '+volumes+"<br>Porcentagem de Cabelos Brancos: "+$.cookieStorage.get('ColorChoices').WhiteHairPercentage+"%",				
				theme:'supervan', 
				onClose: function(){
					window.location.href = 'https://'+ip+'/jezzy-mobile-professionals/public_html/home.html';
				}
		});
	}else if($.cookieStorage.get('colorimetria_parameters').usertype == 'usuario'){
		console.log($.cookieStorage.get('ColorChoices'));
		var original = $.cookieStorage.get('ColorChoices').OriginalColor.split('.')[0];
		var query = "INSERT INTO schedules_solicitation_parameters(schedules_solicitation_id, hair_length, white_hair_percentage, nuance, user_id, OriginalColor) VALUES ("+$.cookieStorage.get('colorimetria_parameters').schedule_solicitation_id+", '"+$.cookieStorage.get('ColorChoices').HairLength+"', "+$.cookieStorage.get('ColorChoices').WhiteHairPercentage+", '"+$.cookieStorage.get('ColorChoices').WishNuance+"', "+$.cookieStorage.get('colorimetria_parameters').user_id+",'"+original+"')";
		console.log(query);
		var conditions = {
			'User': {
            'query':query
			}
		};
		
		var postData = JSON.stringify(conditions);

		postData = {
        'params': postData
		};
		
		var url = 'https://'+api+'/users/get/query/' + createToken();

		$.ajax({
        method: "POST",
        url: url,
        data: postData
	
		}).done(function(result) {
			if(result ==''){
				$.confirm({
					title: '',
					content: 'Colororação inserida a solicitação de serviço!',
					confirmButton: 'VOLTAR AO JEZZY',
					cancelButton: false,
					theme:'supervan',// hides the cancel button.
					confirm: function(){
						window.location.href = 'https://'+ip+'/jezzy-mobile/public_html/home.html';
					}
				});
			}
		}).error(function (XMLHttpRequest, textStatus, errorThrown) {
       
		});
	}
}





function seleciona(elemento){
	var tam = $(".imgHomeActive").length;
	var elementos = $(".imgHomeActive");
	if(elemento.style.backgroundImage!= 'url("")'){
		for(var i=0; i<tam; i++){
			document.getElementsByClassName('imgHomeActive')[i].setAttribute("class", "TextColors imgHome");
		}
		elemento.setAttribute('class', 'TextColors imgHomeActive');
		var ColorChoices = ($.cookieStorage.get('ColorChoices'));
		ColorChoices.WishNuance = elemento.id;
		
		$.cookieStorage.set("ColorChoices", ColorChoices);	
		$("#exbutton").prop( "disabled", false );
		$("#confbutton").prop( "disabled", false );
	}
	
	
	
}
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
                + '<div class="modal-content" id="messageModelGoesHere" style="height:auto!important;">'
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
</html>