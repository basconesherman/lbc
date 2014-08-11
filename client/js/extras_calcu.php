<script>
$(document).ready(function() {	
	var total = <?php echo $total;?>;
	var quantity =  <?php echo $quant;?>;
	var rounding = 0;
	var diecut = 0;
	var cutout = 0;
	var painting = 0;
	var gliding = 0;
	var extras = 0;
	
	$('.radioBtn').click(function() {
		/*FOR EXTRAS*/
		if(quantity == 100){
			//Corner Roundng
			if( $("#shape1").css('display') == 'block'){
				rounding = 25;
			}
			else{rounding = 0;}
			
			//Die Cutting
			if( $("#shape2").css('display') == 'block'){
				diecut = 200;
			}
			else{diecut = 0;}
			
			//Cut Out
			if( $("#shape5").css('display') == 'block'){
				cutout = 200;
			}
			else{cutout = 0;}
			
			//Edge Painting
			if( $("#shape3").css('display') == 'block'){
				painting = 50;
			}
			else{painting = 0;}
			
			//Edge Gliding
			if( $("#shape4").css('display') == 'block'){
				gliding = 100;
			}
			else{gliding = 0;}
		}
		
		else if(quantity == 250){
			//Corner Roundng
			if( $("#shape1").css('display') == 'block'){
				rounding = 50;
			}
			else{rounding = 0;}
			
			//Die Cutting
			if( $("#shape2").css('display') == 'block'){
				diecut = 200;
			}
			else{diecut = 0;}
			
			//Cut Out
			if( $("#shape5").css('display') == 'block'){
				cutout = 200;
			}
			else{cutout = 0;}
			
			//Edge Painting
			if( $("#shape3").css('display') == 'block'){
				painting = 75;
			}
			else{painting = 0;}
			
			//Edge Gliding
			if( $("#shape4").css('display') == 'block'){
				gliding = 150;
			}
			else{gliding = 0;}
		}
		
		else if(quantity == 500){
			//Corner Roundng
			if( $("#shape1").css('display') == 'block'){
				rounding = 75;
			}
			else{rounding = 0;}
			
			//Die Cutting
			if( $("#shape2").css('display') == 'block'){
				diecut = 200;
			}
			else{diecut = 0;}
			
			//Cut Out
			if( $("#shape5").css('display') == 'block'){
				cutout = 200;
			}
			else{cutout = 0;}
			
			//Edge Painting
			if( $("#shape3").css('display') == 'block'){
				painting = 100;
			}
			else{painting = 0;}
			
			//Edge Gliding
			if( $("#shape4").css('display') == 'block'){
				gliding = 175;
			}
			else{gliding = 0;}
		}
		
		else if(quantity == 1000){
			//Corner Roundng
			if( $("#shape1").css('display') == 'block'){
				rounding = 75;
			}
			else{rounding = 0;}
			
			//Die Cutting
			if( $("#shape2").css('display') == 'block'){
				diecut = 200;
			}
			else{diecut = 0;}
			
			//Cut Out
			if( $("#shape5").css('display') == 'block'){
				cutout = 200;
			}
			else{cutout = 0;}
			
			//Edge Painting
			if( $("#shape3").css('display') == 'block'){
				painting = 100;
			}
			else{painting = 0;}
			
			//Edge Gliding
			if( $("#shape4").css('display') == 'block'){
				gliding = 200;
			}
			else{gliding = 0;}
		}
		
		extras = rounding + diecut + cutout + painting + gliding;
		
		var finalVal = total + extras;
		
		$("#totalValue").text("$"+(finalVal)+".00");
		$("#paperTotal").val(finalVal);
	});
});
</script>