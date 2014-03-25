<?php

	//Data Base connection
	$servidor = "localhost";
	$bd       = "esc_maps";
	$usuario = "root";
	$senha = "";

	mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
	mysql_select_db($bd);
?>