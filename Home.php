<html>
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
<?php $title = 'ÁREAS DE APLICAÇÃO'; include 'TitleProfessionals.php';?>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important;">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id="retoqueDaRaiz" onclick="seleciona(this);"  style="background-image:url('img/materials/Jezzy1.jpg');z-index:99999999;">RETOQUE DA RAIZ</div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id="cabelosCurtos" onclick="seleciona(this);" style="background-image:url('img/materials/Jezzy2.jpg');z-index:99999999;">CABELOS CURTOS</div>
</div>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id="cabelosMedios" onclick="seleciona(this);" style="background-image:url('img/materials/Jezzy3.jpg');z-index:99999999;">CABELOS MÉDIOS</div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id="cabelosLongos" onclick="seleciona(this);" style="background-image:url('img/materials/Jezzy4.jpg');z-index:99999999;">CABELOS LONGOS</div>
</div>
</div>
</body>
<script>
$( document ).ready(function() {
 
});

function seleciona(elemento){
	var tam = $(".imgHomeActive").length;
	var elementos = $(".imgHomeActive");
	for(var i=0; i<tam; i++){
		 document.getElementsByClassName('imgHomeActive')[i].setAttribute("class", "newAddressText imgHome");
	}
	elemento.setAttribute('class', 'newAddressText imgHomeActive');
	
	
	var ColorChoices = {
		"HairLength":elemento.getAttribute('id'),
		"OriginalColor":"",
		"WhiteHairPercentage":"",
		"WishColor":"",
		"WishNuance":""
		};
		$.cookieStorage.set("ColorChoices", ColorChoices);

	window.location.href = 'myColorSelection.php';
	
}
</script>
</html>