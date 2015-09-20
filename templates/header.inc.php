<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="keywords" content="minecraft, serveur, communauté, français, association, map, aventure, construction" />
		<meta name="description" content="Heavencraft est un serveur peuplé, actif et sans limites. Quelles que soient vos préférences de jeu, vous serez comblés par notre communauté et les nombreuses possibilités de notre serveur. Venez le visiter et découvrez ses différents mondes, maps et constructions, proposant de multiples façons de s'amuser sur Minecraft !" />
		<title>Heavencraft - serveur minecraft communautaire</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.5.min.css" />
		<link rel="stylesheet" type="text/css" href="css/heavencraft.min.20150813.css" />
		<link rel="stylesheet" type="text/css" href="fonts/fonts.min.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<link rel="canonical" href="http://www.heavencraft.fr" />

		<script type="text/javascript" src="js/jquery-2.1.4.min.js" defer></script>
		<script type="text/javascript" src="js/bootstrap-3.3.5.min.js" defer></script>
		<script type="text/javascript" src="js/radio.js" defer></script>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top minecraftia">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						
					</button>
					<a class="navbar-brand" href="/"><span style="color: #ffffff">Heaven</span><span style="color: #55ffff">craft</span></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="http://forum.heavencraft.fr">Forum</a></li>
						<li><a href="http://wiki.heavencraft.fr">Wiki</a></li>
						<li><a href="http://map.heavencraft.fr">Cartes</a></li>
						<li class="visible-xs"><a href="https://www.facebook.com/Heavencraft">Facebook</a></li>
						<li class="visible-xs"><a href="https://twitter.com/Heavencraftfr">Twitter</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right hidden-xs">
						<li><a class="navbar-icon" id="radio-button" href="#"><img id="radio-button-img" src="images/radio_off.png" /></a></li>
						<li><a class="navbar-icon" href="https://www.facebook.com/Heavencraft"><img src="images/wool-fb.png" /></a></li>
						<li><a class="navbar-icon" href="https://twitter.com/Heavencraftfr"><img src="images/wool-tw.png" /></a></li>
					</ul>
				</div>
			</div>
		</nav>
<?php
	if (defined('PRINT_HEADER')) {
?>
		<div id="header" class="container hidden-xs">
			<div class="text-center"><img id="logo" src="images/logo.png" /></div>
			<div class="row">
				<div class="col-xs-5"></div>
				<h1 class="col-xs-6 lead">Heavencraft est un serveur minecraft français se reposant sur sa communauté soudée, ses maps diversifiées et ses constructions époustouflantes, proposant au joueur une Aventure avec un grand A.</h1>
				<div class="col-xs-1"></div>
			</div>
		</div>
<?php
	}
?>
		<div id="page" class="container">