$(document).ready(function(){
	//Paper Option Script
	$('#duplex').click(function() {
		if($('#duplex').is(':checked')) {
			$( "#duplex-stock" ).addClass( "activated", -1000);
			$( "#duplex-stock" ).removeClass( "deactivated");
		}
	});
	$('#single').click(function() {
		if($('#single').is(':checked')) {
			$( "#duplex-stock" ).addClass( "deactivated", -1000);
			$( "#duplex-stock" ).removeClass( "activated");
		}
	});
	
	//Size Option Script
	$('#standard-box').click(function() {
			$( "#standard-box h2" ).addClass( "selected", -1000);
			$( "#square-box h2" ).removeClass( "selected");
			$( "#skinny-box h2" ).removeClass( "selected");
	});
	$('#square-box').click(function() {
			$( "#square-box h2" ).addClass( "selected", -1000);
			$( "#standard-box h2" ).removeClass( "selected");
			$( "#skinny-box h2" ).removeClass( "selected");
	});
	$('#skinny-box').click(function() {
			$( "#skinny-box h2" ).addClass( "selected", -1000);
			$( "#square-box h2" ).removeClass( "selected");
			$( "#standard-box h2" ).removeClass( "selected");
	});
	
	//Quantity Option Script
	 $(document).on("click",".quantity-boxes", function() {
		for(var j = 1; j <= 4; j++) {
		var $items= $('#quantity' + j);
		  (function(j) {
			   $items.click( function(){
				for(var b=1; b <= 4; b++){
					if(b == j){
						$( "#quantity"+b+" h2" ).addClass( "selected", -1000);
					}else{
						$( "#quantity"+b+" h2" ).removeClass( "selected");
					}
				}
				//return false;
			 });
		  }(j));
		}
	});
	
	/*for color tab*/
	//for single
	for(var i = 0; i <= 3; i++) {
	var $size= $('#radioSelect' + i);
	  (function(i) {
		   $size.click( function(){
			for(var a=0; a <= 3; a++){
				if(a ==  i){
					$( "#radio"+a ).addClass( "activated", -1000);
					$( "#radio"+a ).removeClass( "deactivated");
				}
				else{
					$( "#radio"+a ).addClass( "deactivated", -1000);
					$( "#radio"+a ).removeClass( "activated");
				}
			}
		 });
	  }(i));
	}
	//for dual type
	for(var i = 4; i <= 7; i++) {
	var $size= $('#radioSelect' + i);
	  (function(i) {
		   $size.click( function(){
			for(var a=4; a <= 7; a++){
				if(a ==  i){
					$( "#radio"+a ).addClass( "activated", -1000);
					$( "#radio"+a ).removeClass( "deactivated");
				}
				else{
					$( "#radio"+a ).addClass( "deactivated", -1000);
					$( "#radio"+a ).removeClass( "activated");
				}
			}
		 });
	  }(i));
	}
	//COLOR TYPE LOGIC
	$( "#typeSelect1" ).click(function(){ 
	  $("#type1").addClass( "activated", -1000);
	  $( "#type1" ).removeClass( "deactivated" );
	  $("#type2").addClass( "deactivated", -1000);
	  $( "#type2" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect2" ).click(function(){ 
	  $("#type2").addClass( "activated", -1000);
	  $( "#type2" ).removeClass( "deactivated" );
	  $("#type1").addClass( "deactivated", -1000);
	  $( "#type1" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect3" ).click(function(){ 
	  $("#type3").addClass( "activated", -1000);
	  $( "#type3" ).removeClass( "deactivated" );
	  $("#type4").addClass( "deactivated", -1000);
	  $( "#type4" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect4" ).click(function(){ 
	  $("#type4").addClass( "activated", -1000);
	  $( "#type4" ).removeClass( "deactivated" );
	  $("#type3").addClass( "deactivated", -1000);
	  $( "#type3" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect5" ).click(function(){ 
	  $("#type5").addClass( "activated", -1000);
	  $( "#type5" ).removeClass( "deactivated" );
	  $("#type6").addClass( "deactivated", -1000);
	  $( "#type6" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect6" ).click(function(){ 
	  $("#type6").addClass( "activated", -1000);
	  $( "#type6" ).removeClass( "deactivated" );
	  $("#type5").addClass( "deactivated", -1000);
	  $( "#type5" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect7" ).click(function(){ 
	  $("#type7").addClass( "activated", -1000);
	  $( "#type7" ).removeClass( "deactivated" );
	  $("#type8").addClass( "deactivated", -1000);
	  $( "#type8" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect8" ).click(function(){ 
	  $("#type8").addClass( "activated", -1000);
	  $( "#type8" ).removeClass( "deactivated" );
	  $("#type7").addClass( "deactivated", -1000);
	  $( "#type7" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect89" ).click(function(){ 
	  $("#type9").addClass( "activated", -1000);
	  $( "#type9" ).removeClass( "deactivated" );
	  $("#type10").addClass( "deactivated", -1000);
	  $( "#type10" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect10" ).click(function(){ 
	  $("#type10").addClass( "activated", -1000);
	  $( "#type10" ).removeClass( "deactivated" );
	  $("#type9").addClass( "deactivated", -1000);
	  $( "#type9" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect11" ).click(function(){ 
	  $("#type11").addClass( "activated", -1000);
	  $( "#type11" ).removeClass( "deactivated" );
	  $("#type12").addClass( "deactivated", -1000);
	  $( "#type12" ).removeClass( "activated" );
	  return false;
	});
	$( "#typeSelect12" ).click(function(){ 
	  $("#type12").addClass( "activated", -1000);
	  $( "#type12" ).removeClass( "deactivated" );
	  $("#type11").addClass( "deactivated", -1000);
	  $( "#type11" ).removeClass( "activated" );
	  return false;
	});
	//FOR LETTERPRESS AND FOIL
	$( "#typeSelect1" ).click(function(){ 
	  $("#letterpress1").addClass( "activated", -1000);
	  $( "#letterpress1" ).removeClass( "deactivated" );
	  
	  $("#foil1").addClass( "deactivated", -1000);
	  $( "#foil1" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect2" ).click(function(){ 
	  $("#foil1").addClass( "activated", -1000);
	  $( "#foil1" ).removeClass( "deactivated" );
	  
	  $("#letterpress1").addClass( "deactivated", -1000);
	  $( "#letterpress1" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect3" ).click(function(){ 
	  $("#letterpress2").addClass( "activated", -1000);
	  $( "#letterpress2" ).removeClass( "deactivated" );
	  
	  $("#foil2").addClass( "deactivated", -1000);
	  $( "#foil2" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect4" ).click(function(){ 
	  $("#foil2").addClass( "activated", -1000);
	  $( "#foil2" ).removeClass( "deactivated" );
	  
	  $("#letterpress2").addClass( "deactivated", -1000);
	  $( "#letterpress2" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect5" ).click(function(){ 
	  $("#letterpress3").addClass( "activated", -1000);
	  $( "#letterpress3" ).removeClass( "deactivated" );
	  
	  $("#foil3").addClass( "deactivated", -1000);
	  $( "#foil3" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect6" ).click(function(){ 
	  $("#foil3").addClass( "activated", -1000);
	  $( "#foil3" ).removeClass( "deactivated" );
	  
	  $("#letterpress3").addClass( "deactivated", -1000);
	  $( "#letterpress3" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect7" ).click(function(){ 
	  $("#letterpress4").addClass( "activated", -1000);
	  $( "#letterpress4" ).removeClass( "deactivated" );
	  
	  $("#foil4").addClass( "deactivated", -1000);
	  $( "#foil4" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect8" ).click(function(){ 
	  $("#foil4").addClass( "activated", -1000);
	  $( "#foil4" ).removeClass( "deactivated" );
	  
	  $("#letterpress4").addClass( "deactivated", -1000);
	  $( "#letterpress4" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect9" ).click(function(){ 
	  $("#letterpress5").addClass( "activated", -1000);
	  $( "#letterpress5" ).removeClass( "deactivated" );
	  
	  $("#foil5").addClass( "deactivated", -1000);
	  $( "#foil5" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect10" ).click(function(){ 
	  $("#foil5").addClass( "activated", -1000);
	  $( "#foil5" ).removeClass( "deactivated" );
	  
	  $("#letterpress5").addClass( "deactivated", -1000);
	  $( "#letterpress5" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect11" ).click(function(){ 
	  $("#letterpress6").addClass( "activated", -1000);
	  $( "#letterpress6" ).removeClass( "deactivated" );
	  
	  $("#foil6").addClass( "deactivated", -1000);
	  $( "#foil6" ).removeClass( "activated" );
	  return false;
	});
	
	$( "#typeSelect12" ).click(function(){ 
	  $("#foil6").addClass( "activated", -1000);
	  $( "#foil6" ).removeClass( "deactivated" );
	  
	  $("#letterpress6").addClass( "deactivated", -1000);
	  $( "#letterpress6" ).removeClass( "activated" );
	  return false;
	});
	//FOR COLOR NUMBER LOGIC
	$( "#radioSelect0" ).click(function(){
	  $("#colors1,#colors2,#colors3").addClass( "deactivated", -1000);
	  $( "#colors1,#colors2,#colors3" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "zero", -1000);
	   $("#colors-box").removeClass( "one" );
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("three");
	  return false;
	});
	$( "#radioSelect1" ).click(function(){ 
	  $("#colors1").addClass( "activated", -1000);
	  $( "#colors1" ).removeClass( "deactivated" );
	  $("#colors2,#colors3").addClass( "deactivated", -1000);
	  $( "#colors2,#colors3" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "one", -1000);
	  $("#colors-box").removeClass("zero");
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("three");
	  return false;
	});
	$( "#radioSelect2" ).click(function(){ 
	  $("#colors2").addClass( "activated", -1000);
	  $( "#colors2" ).removeClass( "deactivated" );
	  $("#colors3").addClass( "deactivated", -1000);
	  $( "#colors3" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "two", -1000);
	  $("#colors-box").removeClass("zero");
	  $("#colors-box").removeClass("one");
	  $("#colors-box").removeClass("three");
	  return false;
	});
	$( "#radioSelect3" ).click(function(){ 
	$("#colors1").addClass( "activated", -1000);
	  $( "#colors1" ).removeClass( "deactivated" );
	  $("#colors2").addClass( "activated", -1000);
	  $( "#colors2" ).removeClass( "deactivated" );
	  $("#colors3").addClass( "activated", -1000);
	  $( "#colors3" ).removeClass( "deactivated" );
	  
	  $("#colors-box").addClass( "three", -1000);
	  $("#colors-box").removeClass("zero");
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("one");
	  return false;
	});
	
	$( "#radioSelect4" ).click(function(){
	  $("#colors4,#colors5,#colors6").addClass( "deactivated", -1000);
	  $( "#colors4,#colors5,#colors6" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "zero", -1000);
	   $("#colors-box").removeClass( "one" );
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("three");
	  return false;
	  });
	$( "#radioSelect5" ).click(function(){ 
	  $("#colors4").addClass( "activated", -1000);
	  $( "#colors4" ).removeClass( "deactivated" );
	  $("#colors5,#colors6").addClass( "deactivated", -1000);
	  $( "#colors5,#colors6" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "one", -1000);
	   $("#colors-box").removeClass( "zero" );
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("three");
	  return false;
	});
	$( "#radioSelect6" ).click(function(){ 
	  $("#colors5").addClass( "activated", -1000);
	  $( "#colors5" ).removeClass( "deactivated" );
	  $("#colors6").addClass( "deactivated", -1000);
	  $( "#colors6" ).removeClass( "activated" );
	  
	  $("#colors-box").addClass( "two", -1000);
	   $("#colors-box").removeClass( "one" );
	  $("#colors-box").removeClass("zero");
	  $("#colors-box").removeClass("three");
	  return false;
	});
	$( "#radioSelect7" ).click(function(){ 
	$("#colors4").addClass( "activated", -1000);
	  $( "#colors4" ).removeClass( "deactivated" );
	  $("#colors5").addClass( "activated", -1000);
	  $( "#colors5" ).removeClass( "deactivated" );
	  $("#colors6").addClass( "activated", -1000);
	  $( "#colors6" ).removeClass( "deactivated" );
	  
	  $("#colors-box").addClass( "three", -1000);
	   $("#colors-box").removeClass( "one" );
	  $("#colors-box").removeClass("two");
	  $("#colors-box").removeClass("zero");
	  return false;
	});
	
	//for extras tab
	$("#shaping1").click(function(){
	  $("#shape1").toggle();
	});
	$("#shaping2").click(function(){
	  $("#shape2").toggle();
	});
	$("#shaping3").click(function(){
	  $("#shape3").toggle();
	});
	$("#shaping4").click(function(){
	  $("#shape4").toggle();
	});
	$("#shaping5").click(function(){
	  $("#shape5").toggle();
	});
	
	$( "#inch1" ).click(function(){
		if( $("#shape1").css('display') == 'block'){
		  $("#in1").addClass( "activated", -1000);
		  $( "#in1" ).removeClass( "deactivated" );
		  $("#in2").addClass( "deactivated", -1000);
		  $( "#in2" ).removeClass( "activated" );
		}
		else{
			 
		}
	  return false;
	});
	$( "#inch2" ).click(function(){ 
		if( $("#shape1").css('display') == 'block'){
		  $("#in2").addClass( "activated", -1000);
		  $( "#in2" ).removeClass( "deactivated" );
		  $("#in1").addClass( "deactivated", -1000);
		  $( "#in1" ).removeClass( "activated" );
	  }
	  return false;
	});
});