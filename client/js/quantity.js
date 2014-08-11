$(document).ready(function() {	
	var quantity = 0;
	
	/*FOR QUANTITY*/
	$( ".quantity-boxes" ).click(function() {
		for(var j = 4; j <= 7; j++){		
			if ( $( "#quant"+j ).hasClass( "selected" ) ) {
				quantity = $("#quant"+j).data("key"+j);
				$('#quantValue').val(quantity);
			}
		}
	});
});