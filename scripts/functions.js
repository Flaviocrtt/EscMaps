$(function() {


	//bed slider		
	$( "#slider-beds" ).slider({
		range: true,
		min: 0,
		max: 10,
		values: [ 0, 10 ],
		slide: function( event, ui ) {
			$( "#qtt" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
		}
	});
	$( "#qtt" ).val($( "#slider-beds" ).slider( "values", 0 ) + " - " + $( "#slider-beds" ).slider( "values", 1 ) );
		
	//value slider
	$( "#slider-value" ).slider({
		range: true,
		min: 0,
		max: 6000,
		values: [ 0, 6000 ],
		slide: function( event, ui ) {3
			$( "#amount" ).val( "R$" + ui.values[ 0 ] + " - R$" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "R$" + $( "#slider-value" ).slider( "values", 0 ) + " - R$" + $( "#slider-value" ).slider( "values", 1 ) );
	  
	  
});
  
//Search address by enter key
  
	function search(e) {
		if (e.keyCode == 13) {
			document.getElementById('search-button').click();
		}
	}