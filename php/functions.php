<?php



include("db_connection.php");

	class Map_ad{
		private $name;
		private $lat;
		private $lng;
		
		function __construct($name, $lat, $lng){
			$this->name = $name;
			$this->lat = $lat;
			$this->lng = $lng;
		}
		
		function getName(){
			return $this->name;
		}
		function getLat(){
			return $this->lat;
		}
		function getLng(){
			return $this->lng;
		}
	}
	
	
	function FillArray(){
		// sending query
		$result = mysql_query("SELECT * from map_ads");
		$i = 0;
		$array;
		
		while($row = mysql_fetch_array($result)) {
			$mapAd = new Map_ad($row['NAME'], $row['LAT'], $row['LNG']);
			$array['$i'] = $row['NAME'];
			
			$name = $row['NAME'];
			$lat = $row['LAT'];
			$lng = $row['LNG'];
			
			echo "<script>global_nome['$i'] = '$name';
					
					mapAds[$i] =
						{
							'name': '$name',
							'lat': '$lat',
							'lng': '$lng'
						}
					
			
				</script>";
			
			$i++;
			
		}
	}
	
	function Outra(){
		$array = array(1,2,3,4,5);
		$numArray = count($array);
		
		for($i = 0; $i < $numArray; $i++){
			echo "<script>global_nome['$i'] = '$array[$i]';</script>";
		}	
	}
  
 ?>