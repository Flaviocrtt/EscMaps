<!DOCTYPE HTML>
<html>
<script>
	var global_nome = new Array();
	var mapAds = new Array();
	
</script>

<?php
include("php/functions.php");
FillArray();
?>
	<head>
		<title>Esc Maps | O melhor lugar para encontrar o seu imóvel!</title>
		<link rel="shortcut icon" href="images/ico-esc.ico" type="image/x-icon"/>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="scripts/maps.js"></script>
		<script src="jquery/js/jquery-1.10.2.js"></script>
		<script src="jquery/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="jquery/js/jquery-ui-1.10.4.custom.min.js"></script>
		<link href="jquery/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css" />
		<link href="jquery/css/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="scripts/functions.js"></script>
	</head>
	<body>
		<div id="top-bar">
			<div id="logo">
				<img src="images/logo-esc.png" alt="logo"/>
			</div>
			<div id="options">
				<div id="search">
					<input type="text" id="search-box" placeholder="Procure por cidade, estado, CEP..." onkeypress="search(event)"/>
					<input class="buttons" type="button" id="search-button" value="Buscar" onclick="codeAddress()">
				</div>
				<div id="menu">
					<div id="label-user">
						<h2>Visitante</h2>
					</div>
					<div id="buttons">
						<input id="anuncie" class="buttons" type="button" value="Anuncie" onclick="location.href='adCadaster.php';"/>
						<!--<input class="buttons" type="submit" value="Mais"/>-->
						<div id="divmenu" >
							<ul id="plus-menu">
								<li id="sub-plus">Mais
									<ul>
										<li><a href="#">Minha Conta</a></li>
										<li><a href="#">Contato</a></li>
										<li><a href="#">Sobre</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="side-bar">
				<div id="filter">
						<div id="boxes">
							<p class="title">Opções</p>
							<br>
							<ul class="filter-list-one">
								<li><input type="checkbox">Casas</li>
								<li><input type="checkbox">Terrenos</li>
								<li><input type="checkbox">Apartamentos</li>
								<li><input type="checkbox">Kitinetes</li>
								<li><input type="checkbox">Hoteis</li>
								<li><input type="checkbox">Quartos</li>
							</ul>
						</div>
						<div id="sliders">
							<label class="title" for="amount">Valor</label>
							<br>
							<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold; text-align:center; background:transparent;">	
							<div id="slider-value" style="margin-left:10px; margin-right:13px;"></div>
							<br><br>
							<label class="title" for="qtt">Quartos</label>
							<br>
							<input type="text" id="qtt" style="border:0; color:#f6931f; font-weight:bold; text-align:center; background:transparent;">
							<div id="slider-beds" style="margin-left:10px; margin-right:13px;"></div>
						</div>
				</div>
				<div id="ads">
				</div>
			</div>
			<div id="map">
			</div>
		</div>
	</body>
</html>