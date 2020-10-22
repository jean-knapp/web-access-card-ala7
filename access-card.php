<?php

// Insert the access card data.

// TODO
$background_color = "#000000";
$organization = "Ala 7";
$rank = "1º Ten Av";
$handle = "Knapp";
$fullname = "Jean Marcel Knapp dos Santos";
$role = "Comandante da Esquadrilha Negro";
$logo_url = "img/logo_ala7.png";
$photo_url = "img/photo.jpg";
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
<title>Crachá <?=$role . " " . $handle?></title>
	
	<link rel="stylesheet" href="access-card.css"/>
</head>

<body>
	
	<div class="access-card--outer-border" id="outer-border" style="background-color: <?=$background_color?>">
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
		<div class="access-card--details">
			<div class="access-card--identification">
				<?=$rank?> <span class="access-card--handle"><?=$handle?></span>
			</div>
			<div class="access-card--fullname">
				<?=$fullname?>
			</div>
		</div>
		<div class="access-card--details">
			<div class="access-card--role">
				Cargo/Função
			</div>
			<div class="access-card--fullname">
				<?=$role?>
			</div>
		</div>
		<div class="access-card--footer">
			<div class="access-card--photo">
				<img src="<?=$photo_url?>" />
			</div>
			<div class="access-card--code">
				<div class="access-card--details">
					<div class="access-card--role">
						Setor
					</div>
					<div class="access-card--bold">
						<?=$sector?>
					</div>
				</div>
				<img src="<?=$barcode_url?>" id="barcode1" />
			</div>
		</div>

		
	</div>	
</body>
</html>