<script>
$(document).ready(function() {	
	var paper = "single";
	var quantity = 100;
	var color1 = 0;
	var color2 = 0;
	var total = 0;
	
	$('.radioBtn').click(function() {
		/*FOR COLORS*/
		for(var j = 0; j <= 3; j++){		
			
			if ( $( "#radio"+j ).hasClass( "activated" ) ) {
				color1 = $("#radio"+j).data("key"+(j));
			}
		}
	
		for(var k = 4; k <= 7; k++){		
			
			if ( $( "#radio"+k ).hasClass( "activated" ) ) {
				color2 = $("#radio"+k).data("key"+(k));
			}
		}
			
		/*1ply or 2ply*/
		var ply = <?php echo $ply1;?>;
		var ply2 = <?php echo $ply2;?>;
		paper = "<?php echo substr($type,0,6);?>";
		quantity =  <?php echo $quant;?>;
		
		/*COMPUTATION PROCESS*/
		/*Single Type with 1ply - color process*/
		/*single stock - 1 ply - 1 color*/
		if((paper == "single") && (ply == 1) && (color1 == 1)){
			if(quantity == 100){total = 150;}
			else if(quantity == 250){total = 250;}
			else if(quantity == 500){total = 350;}
			else{total = 475;}
		}
		/*single stock - 1 ply - 2 color*/
		if((paper == "single") && (ply == 1) && (color1 == 2)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*single stock - 1 ply - 3 color*/
		if((paper == "single") && (ply == 1) && (color1 == 3)){
			if(quantity == 100){total = 350;}
			else if(quantity == 250){total = 500;}
			else if(quantity == 500){total = 600;}
			else{total = 725;}
		}
		/*Single Type with 2ply - color process*/
		/*single stock - 2 ply - 1 color*/
		if((paper == "single") && (ply == 2) && (color1 == 1)){
			if(quantity == 100){total = 180;}
			else if(quantity == 250){total = 325;}
			else if(quantity == 500){total = 500;}
			else{total = 775;}
		}
		/*single stock - 2 ply - 2 color*/
		if((paper == "single") && (ply == 2) && (color1 == 2)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*single stock - 2 ply - 3 color*/
		if((paper == "single") && (ply == 2) && (color1 == 3)){
			if(quantity == 100){total = 380;}
			else if(quantity == 250){total = 575;}
			else if(quantity == 500){total = 750;}
			else{total = 1025;}
		}
		
		/*duplex stock - 1 ply - 1 ply*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*duplex stock - 1 ply - 2 ply*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*duplex stock - 2 ply - 2 ply*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2)){
			if(quantity == 100){total = 310;}
			else if(quantity == 250){total = 525;}
			else if(quantity == 500){total = 775;}
			else{total = 1200;}
		}
		
		/*Duplex Type with 1ply - color process*/
		/*duplex stock - 1 ply - 1 ply - 1 color - 1 color*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*duplex stock - 1 ply - 1 ply - 1 color - 2 color - vice versa*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 350;}
			else if(quantity == 250){total = 500;}
			else if(quantity == 500){total = 600;}
			else{total = 725;}
		}
		/*duplex stock - 1 ply - 1 ply - 1 color - 3 color - vice versa*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 450;}
			else if(quantity == 250){total = 625;}
			else if(quantity == 500){total = 725;}
			else{total = 850;}
		}
		/*duplex stock - 1 ply - 1 ply - 2 color - 2 color*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 450;}
			else if(quantity == 250){total = 625;}
			else if(quantity == 500){total = 725;}
			else{total = 850;}
		}
		/*duplex stock - 1 ply - 1 ply - 2 color - 3 color - vice versa*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 550;}
			else if(quantity == 250){total = 750;}
			else if(quantity == 500){total = 850;}
			else{total = 975;}
		}
		/*duplex stock - 1 ply - 1 ply - 3 color - 3 color*/
		if((paper == "duplex") && (ply == 1) && (ply2 == 1) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 650;}
			else if(quantity == 250){total = 875;}
			else if(quantity == 500){total = 975;}
			else{total = 1100;}
		}
		
		/*Duplex Type with 1ply - 2ply - vice versa - color process*/
		/*duplex stock -  1 color - 1 color*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*duplex stock - 1 color - 2 color - vice versa*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 380;}
			else if(quantity == 250){total = 575;}
			else if(quantity == 500){total = 750;}
			else{total = 1025;}
		}
		/*duplex stock - 1 color - 3 color - vice versa*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 480;}
			else if(quantity == 250){total = 700;}
			else if(quantity == 500){total = 875;}
			else{total = 1150;}
		}
		/*duplex stock - 2 color - 2 color*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 480;}
			else if(quantity == 250){total = 700;}
			else if(quantity == 500){total = 875;}
			else{total = 1150;}
		}
		/*duplex stock - 2 color - 3 color - vice versa*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 580;}
			else if(quantity == 250){total = 825;}
			else if(quantity == 500){total = 1000;}
			else{total = 1275;}
		}
		/*duplex stock - 3 color - 3 color*/
		if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 680;}
			else if(quantity == 250){total = 950;}
			else if(quantity == 500){total = 1125;}
			else{total = 1400;}
		}
		
		/*Duplex Type with 2ply - 2ply - color process*/
		/*duplex stock -  1 color - 1 color*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 310;}
			else if(quantity == 250){total = 525;}
			else if(quantity == 500){total = 775;}
			else{total = 1200;}
		}
		/*duplex stock - 1 color - 2 color - vice versa*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 410;}
			else if(quantity == 250){total = 650;}
			else if(quantity == 500){total = 900;}
			else{total = 1325;}
		}
		/*duplex stock - 1 color - 3 color - vice versa*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 510;}
			else if(quantity == 250){total = 775;}
			else if(quantity == 500){total = 1025;}
			else{total = 1450;}
		}
		/*duplex stock - 2 color - 2 color*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 510;}
			else if(quantity == 250){total = 775;}
			else if(quantity == 500){total = 1025;}
			else{total = 1450;}
		}
		/*duplex stock - 2 color - 3 color - vice versa*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 610;}
			else if(quantity == 250){total = 900;}
			else if(quantity == 500){total = 1150;}
			else{total = 1575;}
		}
		/*duplex stock - 3 color - 3 color*/
		if((paper == "duplex") && (ply == 2) && (ply2 == 2) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 710;}
			else if(quantity == 250){total = 1025;}
			else if(quantity == 500){total = 1275;}
			else{total = 1700;}
		}
		
		/*FOR FOILED SELECTIONS*/
		var foil = 0;
		for(a=1; a <= 6; a++){
			if ( $( "#foil"+a ).hasClass( "activated" ) ) {
				foil += 25;
			}
		}
		
		total += foil;
		
		$("#totalValue").text("$"+total+".00");
		$("#paperTotal").val(total);
	});
});
</script>