<?php

// Insert the access card data.

// TODO
$background_color = "#FFFF00";
$organization = "Ala 7";
$role = "Imprensa";
$logo_url = "img/logo_ala7.png";
$sector = "ESD";
$barcode_url = "img/barcode.png";

// Use the JsBarcode script to modify #barcode1

// TODO

/** DO NOT EDIT BELOW **/

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crachá <?=$role . " " . $sector?></title>
	
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
		<div class="access-card--role2" style="background-color: <?=$background_color?>">
				<?=$role?>
		</div>
		<div class="access-card--sector2"><?=$sector?></div>
		<div class="access-card--footer">
			<div class="access-card--code access-card--code-vehicle">
				<img src="<?=$barcode_url?>" id="barcode1" />
			</div>
		</div>

		
	</div>	
</body>
</html>