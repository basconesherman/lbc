<script>
$(document).ready(function() {	
	var paper = "single";
	var quantity = 100;
	var color = 1;
	var total = 0;
	
	var paper_multipier = 0;
	
	$('.container').click(function() {
		/*FOR QUANTITY*/
		for(var j = 4; j <= 7; j++){		
			
			if ( $( "#quant"+j ).hasClass( "selected" ) ) {
				quantity = $("#quant"+j).data("key"+(j));
			}
		}
		
		/*1ply or 2ply*/
		var ply = <?php echo $ply1;?>;
		var ply2 = <?php echo $ply2;?>;
		paper = "<?php echo substr($type,0,6);?>";
		/*COMPUTATION PROCESS*/
		/*single stock - 1 ply*/
		if((paper == "single") && (ply == 1)){
			if(quantity == 100){total = 150;}
			else if(quantity == 250){total = 250;}
			else if(quantity == 500){total = 350;}
			else{total = 475;}
		}
		/*single stock - 2 ply*/
		else if((paper == "single") && (ply == 2)){
			if(quantity == 100){total = 180;}
			else if(quantity == 250){total = 325;}
			else if(quantity == 500){total = 500;}
			else{total = 775;}
		}
		
		/*duplex stock - 1 ply - 1 ply*/
		else if((paper == "duplex") && (ply == 1) && (ply2 == 1)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*duplex stock - 1 ply - 2 ply*/
		else if((paper == "duplex") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1))){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*duplex stock - 2 ply - 2 ply*/
		else if((paper == "duplex") && (ply == 2) && (ply2 == 2)){
			if(quantity == 100){total = 310;}
			else if(quantity == 250){total = 525;}
			else if(quantity == 500){total = 775;}
			else{total = 1200;}
		}
		
		$("#totalValue").text("$"+total+".00");
		$("#paperTotal").val(total);
	});
});
</script>