<!DOCTYPE HTML>
<html>
	<head>
		<title>Esc Maps | O melhor lugar para encontrar o seu imóvel</title>
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
		<form action="php/insertAd.php" method="post">
			name:<input type="text" name="fName"><br>
			lat:<input type="text" name="fLat"><br>
			lng:<input type="text" name="fLng"><br>
			<input type="submit">
		</form>
	</body>
</html>