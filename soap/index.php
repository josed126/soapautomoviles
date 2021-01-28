<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : FullyCharge 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120604

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Marcas de Coches</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="style/jquery.poptrox-1.0.js"></script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Marcas de Coches</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photo Gallery</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
</div>

<!-- end #header -->
<div id="wrapper">
	<div id="page">
		<div id="box1">
			<p> Aqui vamos a ver las marcas de automóviles disponibles en el mercado español. Desde fabricantes centenarios, como Mercedes o Ford, a otros prácticamente recién llegados a este sector que supone más de un 8 por ciento del PIB de España. Algunos de esos recién llegados se estrenan en un sector completamente nuevo para ellos, como Tesla. Otros han nacido como marca hace poco, aunque son fabricantes con amplia tradición, como DS, englobados en otra marca. </p>
		</div>
       
		<div id="poptrox">
        <ul id="gallery"> 
		 <?php
			require_once "client.php";
			$marcas = $client->ObtenerMarcasUrl();

			foreach ($marcas as $marca => $url) {
			?>
		
		 
	
         
				<li><a href="images/<?= strtolower($marca) ?>.jpg" alt="logo <?= $marca ?> " width="500" height="300"><img src="images/<?= strtolower($marca) ?>.jpg" alt="logo <?= $marca ?> " width="200" height="100" /></a><div> 
               <h3><a href="modelos.php?marca=<?= $marca ?>" data-poptrox="ajax,600x400">Modelos <?= $marca ?></a></h3>
					<a href="<?= $url ?>" class="button style2 fit" >Ver video <?= $marca ?></a></div></li>
                 
			
	
			
			
			
				<?php
			}
			?>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
