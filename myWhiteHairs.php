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
<?php $title = '% DE CABELOS BRANCOS'; include 'TitleProfessionals.php';?>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important;">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "10" onclick="seleciona(this);"  style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2010 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">10%</div></div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "20" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2020 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">20%</div></div>
</div>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "30" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2030 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">30%</div></div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "40" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2040 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">40%</div></div>
</div>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "50" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2050 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">50%</div></div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "60" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2060 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">60%</div></div>
</div>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "70" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2070 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">70%</div></div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "80" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2080 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">80%</div></div>
</div>
</div>
<div class="row col-xs-12" style="padding:0%!important;margin:0%!important;background-color:#2597AC;!important">
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "90" onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-%2090 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">90%</div></div>
</div>
<div class="col-xs-6 checkdiv">
<div class="newAddressText imgHome" id = "100"  onclick="seleciona(this);" style="background-image:url('img/Porcentagens%20Cabelos%20Brancos/Niveis%20de%20Cabelos%20Brancos%20-100 porcento.jpg');z-index:99999999;height:25%;"><div class="divbolinha">100%</div></div>
</div>
</div>
</body>
<script>

function seleciona(elemento){
	var tam = $(".imgHomeActive").length;
	var elementos = $(".imgHomeActive");
	for(var i=0; i<tam; i++){
		 document.getElementsByClassName('imgHomeActive')[i].setAttribute("class", "newAddressText imgHome");
	}
	elemento.setAttribute('class', 'newAddressText imgHomeActive');
	var ColorChoices = ($.cookieStorage.get('ColorChoices'));
	ColorChoices.WhiteHairPercentage = elemento.id;
	$.cookieStorage.set("ColorChoices", ColorChoices);
	window.location.href = "newColorSelection.php";
}
</script>
</html>