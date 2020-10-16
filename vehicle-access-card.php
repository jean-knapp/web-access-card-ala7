<?php

// Insert the access card data.

// TODO
$organization = "Ala 7";
$type = "Passageiro Automóvel";
$model = "Citroen C4L A THP Tend";
$licenseplate = "NAY4784";
$logo_url = "img/logo_ala7.png";

$white_stripe = true;
$red_stripe = true;
$yellow_stripe = true;
$green_stripe = true;
$cyan_stripe = true;
$blue_stripe = true;

// Use the JsBarcode script to modify #barcode1

// TODO

/** DO NOT EDIT BELOW **/

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crachá <?=$type . " " . $licenseplate?></title>
	
	<link rel="stylesheet" href="access-card.css"/>
</head>

<body>
	
	<div class="access-card--outer-border access-card--text-black" id="outer-border">
		<div class="access-card--punch-hole">
			
		</div>
		<div class="access-card--header">
			<div class="access-card--logo">
				<img src="<?=$logo_url?>"/>
			</div>
			<div class="access-card--title">
				<p>Ministério da Defesa</p>
				<p>Comando da Aeronáutica</p>
				<p class="access-card--organization"><?=$organization?></p>
			</div>
		</div>
		<div class="access-card--details access-card--text-upper">
			<div class="access-card--fullname">
				Tipo: <?=$type?>
			</div>
		</div>
		<div class="access-card--details access-card--text-upper">
			<div class="access-card--fullname">
				Modelo: <?=$model?>
			</div>
		</div>	
		<div class="access-card--details access-card--text-upper">
			<div class="access-card--fullname">
				Placa: <?=$licenseplate?>
			</div>
		</div>
		<div class="access-card--stripe" id="stripe_white">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_red">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_yellow">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_green">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_cyan">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_blue">&nbsp;</div>
		<div class="access-card--footer">
			<div class="access-card--code access-card--code-vehicle">
				<img src="img/barcode.png" id="barcode1" />
			</div>
		</div>

		
	</div>	
</body>
</html>