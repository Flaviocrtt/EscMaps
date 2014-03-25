var map;
var geocoder;

function initialize() {

	geocoder = new google.maps.Geocoder();
	var mapOptions = {
		zoom: 4,
		center: new google.maps.LatLng(-10.851833, -55.817220)
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	LoadPoints();
	
	
}

function LoadPoints(){
	for(i = 0; i < mapAds.length; i++){
	
		var latlng = new google.maps.LatLng(mapAds[i].lat,mapAds[i].lng);
		
		var marker = new google.maps.Marker({
			position: latlng,
			map:map,
			title: mapAds[i].name
		});
	}
	
}

function codeAddress() {
	var address = document.getElementById('search-box').value;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location
		});
		} else {
			alert('Geocode was not successful for the following reason: ' + status);
		}
  });
}

google.maps.event.addDomListener(window, 'load', initialize);