<?php

// Insert the access card data.

// TODO
$organization = "Ala 7";
$type = "Passageiro Automóvel";
$model = "Citroen C4L A THP Tend";
$licenseplate = "NAY4784";
$logo_url = "img/logo_ala7.png";
$barcode_url = "img/barcode_vehicle.jpg";

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
		<div class="access-card--stripe" id="stripe_white" style="<?=(!$white_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_red" style="<?=(!$red_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_yellow" style="<?=(!$yellow_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_green" style="<?=(!$green_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_cyan" style="<?=(!$cyan_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--stripe" id="stripe_blue" style="<?=(!$blue_stripe ? "visibility: hidden" : "")?>">&nbsp;</div>
		<div class="access-card--footer">
			<div class="access-card--code access-card--code-vehicle">
				<img src="<?=$barcode_url?>" id="barcode1" />
			</div>
		</div>

		
	</div>	
</body>
</html>