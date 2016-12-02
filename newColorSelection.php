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
<?php $title = 'COR DESEJADA'; include 'TitleProfessionals.php';?>
</div>
<!--div class="col-xs-12">
<div class="col-xs-4">1</div>
<div class="col-xs-4">2</div>
<div class="col-xs-4">3</div>
</div>
<div class="col-xs-12">
<div class="col-xs-4">4</div>
<div class="col-xs-4">5</div>
<div class="col-xs-4">6</div>
</div>
<div class="col-xs-12">
<div class="col-xs-4">7</div>
<div class="col-xs-4">8</div>
<div class="col-xs-4">9</div>
</div>
<div class="col-xs-12">
<div class="col-xs-4">10</div>
<div class="col-xs-4">11</div>
<div class="col-xs-4">12</div>
</div-->

<table style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important; width:100%;height:87%;">
<tr class="checkdiv">
<td class="WishColors TextWishColors" id="natural" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-semreflexos.jpg');">SEM REFLEXO<br>NATURAL
</td>
<td class="WishColors TextWishColors" id="cinza" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-acinzentados.jpg');">ACINZENTADO
</td>
</tr>
<tr class="checkdiv">
<td class="WishColors TextWishColors" id="irisado" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-violetas.jpg');">VIOLETA
</td>
<td class="WishColors TextWishColors" id="dourado" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-dourados.jpg');">DOURADO
</td>
</tr>
<tr class="checkdiv">
<td class="WishColors TextWishColors" id="acaju" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-acaju.jpg');">ACAJU
</td>
<td class="WishColors TextWishColors" id="acobreado" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-acrobeados.jpg');">ACOBREADOS
</td>
</tr>
<tr class="checkdiv">
<td class="WishColors TextWishColors" id="vermelho" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-vermelho.jpg');">VERMELHO
</td>
<td class="WishColors TextWishColors" id="mate ou marrom" onclick="seleciona(this);" style="background-image:url('img/Cores%20desejadas/CorDesejada-marrom.jpg');">MARROM
</td>
</tr>
</table>
</body>
<script>

function seleciona(elemento){
	var tam = $(".WishColorsActive").length;
	var elementos = $(".WishColorsActive");
	for(var i=0; i<tam; i++){
		 document.getElementsByClassName('WishColorsActive')[i].setAttribute("class", "TextWishColors WishColors");
	}
	elemento.setAttribute('class', 'TextWishColors WishColorsActive');
	var ColorChoices = ($.cookieStorage.get('ColorChoices'));
	ColorChoices.WishColor = elemento.id;
	$.cookieStorage.set("ColorChoices", ColorChoices);
	window.location.href = "newNuanceSelection.php";
	
}
</script>
</html>