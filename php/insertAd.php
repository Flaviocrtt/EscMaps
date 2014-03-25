<?php
include("db_connection.php");
include("functions.php");

$name = $_POST["fName"];
$Lat = $_POST["fLat"];
$Lng = $_POST["fLng"];

$query = "INSERT INTO  `map_ads` (  `LAT` ,  `LNG` ,  `NAME`) 
VALUES ('$Lat', '$Lng', '$name'); ";

mysql_query($query);

FillArray();

echo "<script>alert('salvo');<qscript>";
echo "<script>location.href='index.php'</script>";	

?>