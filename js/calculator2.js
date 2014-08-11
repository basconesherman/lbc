$(document).ready(function() {	
	var size = "standard";
	var quantity = 0;
	var round = 0;
	var diecut = "";
	
	/*FOR SIZE*/
	$('#sizeValue').val(size);
	$( ".size-boxes" ).click(function() {
		for(var i = 1; i <= 3; i++){		
			if ( $( "#size"+i ).hasClass( "selected" ) ) {
				size = $("#size"+i).data("key"+i);
				$('#sizeValue').val(size);
			}
		}
	});
	
	/*FOR QUANTITY*/
	$( "#quantity-box" ).click(function() {
		for(var j = 4; j <= 7; j++){		
			if ( $( "#quant"+j ).hasClass( "selected" ) ) {
				quantity = $("#quant"+j).data("key"+j);
				$('#quantityValue').val(quantity);
			}
		}
	});
	
	/*FOR EXTRAS*/
	$( ".rounding" ).click(function() {
		for(var j = 8; j <= 9; j++){
			var a = j-7;
			if ( $( "#in"+a ).hasClass( "activated" ) ) {
				round = $("#round"+a).data("key"+j);
				$('#roundingValue').val(round);
			}
		}
	});
	
	$( "#shaping1" ).click(function() {
		if( $("#shape1").css('display') == 'none'){
			$( "#in1" ).removeClass( "activated" );
			$( "#in2" ).removeClass( "activated" );
			
			$("#in1").addClass( "deactivated", -1000);
			$("#in2").addClass( "deactivated", -1000);
		}
	});
	
	$( "#shaping2" ).click(function() {
		if( $("#shape2").css('display') == 'block'){
			diecut = $("#diecutting").data("key"+10);
			$('#diecutValue').val(diecut);
		}
		else{
			$('#diecutValue').val("No");
		}
	});
	
	$( "#shaping3" ).click(function() {
		if( $("#shape3").css('display') == 'none'){
			$('#painting').val("");
			$("#painting").addClass( "deactivated", -1000);
			$( "#painting" ).removeClass( "activated" );
		}
		else{
			$("#painting").addClass( "activated", -1000);
			$( "#painting" ).removeClass( "deactivated" );
		}
	});
	
	$( "#shaping4" ).click(function() {
		if( $("#shape4").css('display') == 'none'){
			$('#gliding').val("No");
			$("#gliding").addClass( "deactivated", -1000);
			$( "#gliding" ).removeClass( "activated" );
		}
		else{
			$("#gliding").addClass( "activated", -1000);
			$( "#gliding" ).removeClass( "deactivated" );
		}
	});
	
	$( "#shaping5" ).click(function() {
		if( $("#shape5").css('display') == 'block'){
			diecut = $("#cutout").data("key"+11);
			$('#cutoutValue').val(diecut);
		}
		else{
			$('#cutoutValue').val("No");
		}
	});
});