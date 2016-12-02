<html>
<meta charset="UTF-8">
<head>
<?php $array = (array)json_decode($_COOKIE['colorimetria_parameters']);$salao =$array['companyname'];$user = $array['username']; $page = 'home';	 if($array['usertype'] == 'professional'){
	 include  'MenuProfessionals.php';
}else{
	 include  'Menu.php';
}
?>
</head>
<body>
<div class="container">
<?php $title = 'SUA COR DE CABELO'; include 'TitleProfessionals.php';?>
</div>
<table style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important; width:100%;height:87%;">
<tr class="checkdiv">
<td class="imgHome TextColors" id="1.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-02.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">PRETO
</td>
<td class="imgHome TextColors" id="2.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-03.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">ESCURO
</td>
<td class="imgHome TextColors" id="3.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-04.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">CASTANHO ESCURO
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" id="4.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-06.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">CASTANHO MÉDIO
</td>
<td class="imgHome TextColors" id="5.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-01.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">CASTANHO CLARO
</td>
<td class="imgHome TextColors" id="6.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-05.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO ESCURO
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" id="7.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-07.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO MÉDIO
</td>
<td class="imgHome TextColors" id="8.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-08.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO CLARO
</td>
<td class="imgHome TextColors" id="9.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-09.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO MUITO CLARO
</td>
</tr>
<tr class="checkdiv">
<td class="imgHome TextColors" id="10.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-10.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO CLARÍSSIMO
</td> 
<td class="imgHome TextColors" id="11.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-11.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO SUPER CLARO
</td>
<td class="imgHome TextColors" id="12.0" onclick="seleciona(this);" style="background-image:url('img/Cores/Jezzy%20-%20Materiais%20Coloracao-12.jpg');z-index:99999999;background-size: contain;background-color: white;text-align: -webkit-center;vertical-align: bottom;width: 33%;height: 20%;padding-bottom: 1.2%!important;">LOURO EXTRA CLARO
</td>
</tr>
</table>
</body>
<script>

function seleciona(elemento){
	var tam = $(".imgHomeActive").length;
	var elementos = $(".imgHomeActive");
	for(var i=0; i<tam; i++){
		 document.getElementsByClassName('imgHomeActive')[i].setAttribute("class", "TextColors imgHome");
	}
	elemento.setAttribute('class', 'TextColors imgHomeActive');
	var ColorChoices = ($.cookieStorage.get('ColorChoices'));
	ColorChoices.OriginalColor = elemento.id;
	$.cookieStorage.set("ColorChoices", ColorChoices);
	window.location.href = "myWhiteHairs.php";
	}
</script>
</html>