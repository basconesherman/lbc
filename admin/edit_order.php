<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administrator | Letterpress Business Cards</title>
		<link type="text/css" rel="stylesheet" href="css/admin.css"/>
		<link type="text/css" rel="stylesheet" href="css/table.css"/>
		<link type="text/css" rel="stylesheet" href="../css/layout.css"/>
		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="js/admin-effect.js"></script>
		<script src="js/application.js"></script>
	</head>
	<body>
		<br/><br/>
		<div class="container">
			<div id="admin-header-left2">
				<h2 class="admin-title">&nbsp Edit Order Details</h2>
				
				<?php include 'navbar-admin.php';?>
				
				<div class="section group">
					<div class="">
						<?php
							$id=$_GET['id'];
							include('../connect.php');
							$result = mysql_query("SELECT * FROM tblpreorder WHERE id=$id");
							while($row = mysql_fetch_array($result)){
								$total=$row['totalAmount'];
								$ptype=$row['papertype'];
								$pfront=$row['paperfront'];
								$pback=$row['paperback'];
								$size=$row['size'];
								$quantity=$row['quantity'];
								$round=$row['rounding'];
								$die=$row['diecutting'];
								$cut=$row['cutout'];
								$fcolor1=$row['frontcolor1'];
								$fcolor2=$row['frontcolor2'];
								$fcolor3=$row['frontcolor3'];
								$bcolor1=$row['backcolor1'];
								$bcolor2=$row['backcolor2'];
								$bcolor3=$row['backcolor3'];
								$paint=$row['edgepainting'];
								$glide=$row['edgegliding'];
								
							}
						?>
						
						<div class="content-grid">
							<form action="edit_order_final.php" method="post">
							<input type="text" name="id" value="<?php echo $id?>" style="display:none;" />
							<input type="text" name="total" value="<?php echo $total?>" style="display:none;" />
							<input id="paperTotal" name="total" style="display:none;"/>
							<div id="specs">
								<p class="specs-text" style="font-size:30pt;color:black;">ORDER NO: <span style="color:red;"><?php echo $id; ?></span> 
									<span style="float:right;color:black;">TOTAL ORDER PRICE: <span id="total" style="color:red;">$<?php echo $total; ?>.00</span></span>
								</p>
								<div id="details-left">
									<div class="left-specs">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:right;">
											STOCK TYPE:<br/>
											FRONT PAPER:<br/>
											BACK PAPER:<br/>
											SIZE:<br/>
											QUANTITY:<br/>
											ROUNDING:<br/>
											DIE CUTTING:<br/>
											CUT OUT:<br/>
										</p>
									</div>
									<div class="right-specs" style="margin-top:-5px;">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:left;">
											<select id="stock" name="stock-type" class="edit-order">
												<option value="<?php echo $ptype;?>"><?php echo $ptype;?></option>
												<option value="single-stock">single-stock</option>
												<option value="duplex-stock">duplex-stock</option>
											</select><br/>
											<select id="pfront" name="pfront" class="edit-order">
												<option value="<?php echo $pfront;?>"><?php echo $pfront;?></option>
												<option value="Lettra 1 ply white">Lettra 1 ply white</option>
												<option value="Lettra 2 ply white">Lettra 2 ply white</option>
												<option value="Lettra 1 ply pearl">Lettra 1 ply pearl</option>
												<option value="Lettra 2 ply pearl">Lettra 2 ply pearl</option>
												<option value="Crest 1 ply pearl">Crest 1 ply pearl</option>
												<option value="Crest 2 ply pearl">Crest 2 ply pearl</option>
												<option value="CP 1 ply dark grey">CP 1 ply dark grey</option>
												<option value="CP 1 ply real grey">CP 1 ply real grey</option>
												<option value="Arturo 1 ply stone">Arturo 1 ply stone</option>
												<option value="Kraft 1 ply">Kraft 1 ply</option>
												<option value="CP 1 ply scarlet">CP 1 ply scarlet</option>
												<option value="Arturo 1 ply rosa">Arturo 1 ply rosa</option>
												<option value="CP 1 ply navy">CP 1 ply navy</option>
												<option value="CP 1 ply mint">CP 1 ply mint</option>
											</select><br/>
											<select id="pback" name="pback" class="edit-order">
												<option value="<?php echo $pback;?>"><?php echo $pback;?></option>
												<option value="Lettra 1 ply white">Lettra 1 ply white</option>
												<option value="Lettra 2 ply white">Lettra 2 ply white</option>
												<option value="Lettra 1 ply pearl">Lettra 1 ply pearl</option>
												<option value="Lettra 2 ply pearl">Lettra 2 ply pearl</option>
												<option value="Crest 1 ply pearl">Crest 1 ply pearl</option>
												<option value="Crest 2 ply pearl">Crest 2 ply pearl</option>
												<option value="CP 1 ply dark grey">CP 1 ply dark grey</option>
												<option value="CP 1 ply real grey">CP 1 ply real grey</option>
												<option value="Arturo 1 ply stone">Arturo 1 ply stone</option>
												<option value="Kraft 1 ply">Kraft 1 ply</option>
												<option value="CP 1 ply scarlet">CP 1 ply scarlet</option>
												<option value="Arturo 1 ply rosa">Arturo 1 ply rosa</option>
												<option value="CP 1 ply navy">CP 1 ply navy</option>
												<option value="CP 1 ply mint">CP 1 ply mint</option>
											</select><br/>
											<select id="size" name="size" class="edit-order">
												<option value="<?php echo $size;?>"><?php echo $size;?></option>
												<option value="standard">standard</option>
												<option value="square">square</option>
												<option value="skinny">skinny</option>
											</select><br/>
											<select id="quantity" name="quantity" class="edit-order">
												<option value="<?php echo $quantity;?>"><?php echo $quantity;?></option>
												<option value="100">100</option>
												<option value="250">250</option>
												<option value="500">500</option>
												<option value="1000">1000</option>
											</select><br/>
											<select id="round" name="round" class="edit-order">
												<option value="<?php echo $round;?>"><?php echo $round;?></option>
												<option value="None">None</option>
												<option value="1/4">1/4</option>
												<option value="1/8">1/8</option>
											</select><br/>
											<select id="die" name="die" class="edit-order">
												<option value="<?php echo $die;?>"><?php echo $die;?></option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select><br/>
											<select id="cut" name="cut" class="edit-order">
												<option value="<?php echo $cut;?>"><?php echo $cut;?></option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select><br/>
										</p>
									</div>
									<br/><br/><br/><br/><br/><br/><br/><br/><br/>
									<span id="note">
										*In this section, if color or extras are not available, please type "None" (Without the quotation)
									</span>
								</div>
								
								<div id="details-left">
									<div class="left-specs">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:right;">
											FRONT COLOR 1:<br/>
											FRONT COLOR 2:<br/>
											FRONT COLOR 3:<br/>
											BACK COLOR 1:<br/>
											BACK COLOR 2:<br/>
											BACK COLOR 3:<br/>
											EDGE PAINTING:<br/>
											EDGE GLIDING:<br/>
										</p>
									</div>
									<div class="right-specs" style="margin-top:-4px;">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:left;">
											<input id="fcolor1" type="text" name="fcolor1" value="<?php echo $fcolor1;?>" />
											<input id="fcolor2" type="text" name="fcolor2" value="<?php echo $fcolor2;?>" />
											<input id="fcolor3" type="text" name="fcolor3" value="<?php echo $fcolor3;?>" />
											<input id="bcolor1" type="text" name="bcolor1" value="<?php echo $bcolor1;?>" />
											<input id="bcolor2" type="text" name="bcolor2" value="<?php echo $bcolor2;?>" />
											<input id="bcolor3" type="text" name="bcolor3" value="<?php echo $bcolor3;?>" />
											<input id="paint" type="text" name="paint" value="<?php echo $paint;?>" />
											<input id="glide" type="text" name="glide" value="<?php echo $glide;?>" />
											<br/><br/>
										</p>
									</div>
									
									<input id="admin-button"style="width:250px;margin-left:50%;float:right;cursor:pointer;" type="submit" value="CHANGE ORDER">
								</div>
							</div>
							</form>
							<br/>
						</div>
					</div>
				</div>
				<br/><br/>
			</div>
			
			
			<?php include '../library/footer.php';?>
		</div>
	</body>
<script type="text/javascript">
$(document).ready(function() {	


$(".edit-order,input").click(function(){

	var paper = $("#stock").val();
	var quantity = $("#quantity").val();
	var color1 = 0;
	var color2 = 0;
	var total = 0;
	var fcolor = [$("#fcolor1").val(),$("#fcolor2").val(),$("#fcolor3").val()];
	var bcolor = [$("#bcolor1").val(),$("#bcolor2").val(),$("#bcolor3").val()];
	
	/*SET NUMBER OF COLORS IN FRONT AND BACK*/
	for(var i=0; i<=2; i++){
		if(fcolor[i] != "None"){color1+=1;}
		if(bcolor[i] != "None"){color2+=1;}
	}
	/*SET NUMBER OF PLY1 AND PLY2*/
	var ply1_temp = $("#pfront").val();
	var ply = ply1_temp.replace ( /[^\d.]/g, '' );
	var ply2_temp = $("#pback").val();
	var ply2 = ply2_temp.replace ( /[^\d.]/g, '' );
	
	/*COMPUTATION PROCESS*/
	/*Single Type with 1ply - color process*/
		/*single stock - 1 ply - 1 color*/
		if((paper == "single-stock") && (ply == 1) && (color1 == 1)){
			if(quantity == 100){total = 150;}
			else if(quantity == 250){total = 250;}
			else if(quantity == 500){total = 350;}
			else{total = 475;}
		}
		/*single stock - 1 ply - 2 color*/
		if((paper == "single-stock") && (ply == 1) && (color1 == 2)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*single stock - 1 ply - 3 color*/
		if((paper == "single-stock") && (ply == 1) && (color1 == 3)){
			if(quantity == 100){total = 350;}
			else if(quantity == 250){total = 500;}
			else if(quantity == 500){total = 600;}
			else{total = 725;}
		}
		/*Single Type with 2ply - color process*/
		/*single stock - 2 ply - 1 color*/
		if((paper == "single-stock") && (ply == 2) && (color1 == 1)){
			if(quantity == 100){total = 180;}
			else if(quantity == 250){total = 325;}
			else if(quantity == 500){total = 500;}
			else{total = 775;}
		}
		/*single stock - 2 ply - 2 color*/
		if((paper == "single-stock") && (ply == 2) && (color1 == 2)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*single stock - 2 ply - 3 color*/
		if((paper == "single-stock") && (ply == 2) && (color1 == 3)){
			if(quantity == 100){total = 380;}
			else if(quantity == 250){total = 575;}
			else if(quantity == 500){total = 750;}
			else{total = 1025;}
		}
		
		/*duplex stock - 1 ply - 1 ply*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*duplex stock - 1 ply - 2 ply*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*duplex stock - 2 ply - 2 ply*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2)){
			if(quantity == 100){total = 310;}
			else if(quantity == 250){total = 525;}
			else if(quantity == 500){total = 775;}
			else{total = 1200;}
		}
		
		/*Duplex Type with 1ply - color process*/
		/*duplex stock - 1 ply - 1 ply - 1 color - 1 color*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 250;}
			else if(quantity == 250){total = 375;}
			else if(quantity == 500){total = 475;}
			else{total = 600;}
		}
		/*duplex stock - 1 ply - 1 ply - 1 color - 2 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 350;}
			else if(quantity == 250){total = 500;}
			else if(quantity == 500){total = 600;}
			else{total = 725;}
		}
		/*duplex stock - 1 ply - 1 ply - 1 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 450;}
			else if(quantity == 250){total = 625;}
			else if(quantity == 500){total = 725;}
			else{total = 850;}
		}
		/*duplex stock - 1 ply - 1 ply - 2 color - 2 color*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 450;}
			else if(quantity == 250){total = 625;}
			else if(quantity == 500){total = 725;}
			else{total = 850;}
		}
		/*duplex stock - 1 ply - 1 ply - 2 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 550;}
			else if(quantity == 250){total = 750;}
			else if(quantity == 500){total = 850;}
			else{total = 975;}
		}
		/*duplex stock - 1 ply - 1 ply - 3 color - 3 color*/
		if((paper == "duplex-stock") && (ply == 1) && (ply2 == 1) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 650;}
			else if(quantity == 250){total = 875;}
			else if(quantity == 500){total = 975;}
			else{total = 1100;}
		}
		
		/*Duplex Type with 1ply - 2ply - vice versa - color process*/
		/*duplex stock -  1 color - 1 color*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 280;}
			else if(quantity == 250){total = 450;}
			else if(quantity == 500){total = 625;}
			else{total = 900;}
		}
		/*duplex stock - 1 color - 2 color - vice versa*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 380;}
			else if(quantity == 250){total = 575;}
			else if(quantity == 500){total = 750;}
			else{total = 1025;}
		}
		/*duplex stock - 1 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 480;}
			else if(quantity == 250){total = 700;}
			else if(quantity == 500){total = 875;}
			else{total = 1150;}
		}
		/*duplex stock - 2 color - 2 color*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 480;}
			else if(quantity == 250){total = 700;}
			else if(quantity == 500){total = 875;}
			else{total = 1150;}
		}
		/*duplex stock - 2 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 580;}
			else if(quantity == 250){total = 825;}
			else if(quantity == 500){total = 1000;}
			else{total = 1275;}
		}
		/*duplex stock - 3 color - 3 color*/
		if((paper == "duplex-stock") && ((ply == 1) && (ply2 == 2) || (ply == 2) && (ply2 == 1)) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 680;}
			else if(quantity == 250){total = 950;}
			else if(quantity == 500){total = 1125;}
			else{total = 1400;}
		}
		
		/*Duplex Type with 2ply - 2ply - color process*/
		/*duplex stock -  1 color - 1 color*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && (color1 == 1) && (color2 == 1)){
			if(quantity == 100){total = 310;}
			else if(quantity == 250){total = 525;}
			else if(quantity == 500){total = 775;}
			else{total = 1200;}
		}
		/*duplex stock - 1 color - 2 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && ((color1 == 1) && (color2 == 2) || (color1 == 2) && (color2 == 1))){
			if(quantity == 100){total = 410;}
			else if(quantity == 250){total = 650;}
			else if(quantity == 500){total = 900;}
			else{total = 1325;}
		}
		/*duplex stock - 1 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && ((color1 == 1) && (color2 == 3) || (color1 == 3) && (color2 == 1))){
			if(quantity == 100){total = 510;}
			else if(quantity == 250){total = 775;}
			else if(quantity == 500){total = 1025;}
			else{total = 1450;}
		}
		/*duplex stock - 2 color - 2 color*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && (color1 == 2) && (color2 == 2)){
			if(quantity == 100){total = 510;}
			else if(quantity == 250){total = 775;}
			else if(quantity == 500){total = 1025;}
			else{total = 1450;}
		}
		/*duplex stock - 2 color - 3 color - vice versa*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && ((color1 == 2) && (color2 == 3) || (color1 == 3) && (color2 == 2))){
			if(quantity == 100){total = 610;}
			else if(quantity == 250){total = 900;}
			else if(quantity == 500){total = 1150;}
			else{total = 1575;}
		}
		/*duplex stock - 3 color - 3 color*/
		if((paper == "duplex-stock") && (ply == 2) && (ply2 == 2) && (color1 == 3) && (color2 == 3)){
			if(quantity == 100){total = 710;}
			else if(quantity == 250){total = 1025;}
			else if(quantity == 500){total = 1275;}
			else{total = 1700;}
		}
	
	/*FOR EXTRAS*/
	var round = $("#round").val();
	var die = $("#die").val();
	var cut = $("#cut").val();
	var paint = $("#paint").val();
	var glide = $("#glide").val();
	
	if(quantity == 100){
		//Corner Roundng
		if( round != "None"){
			total += 25;
		}
		//Die Cutting
		if( die != "No"){
			total += 200;
		}
		//Cut Out
		if( cut != "No"){
			total += 200;
		}
		//Edge Paining
		if( paint != "None"){
			total += 50;
		}
		//Edge Paining
		if( glide != "None"){
			total += 100;
		}
	}
	if(quantity == 250){
		//Corner Roundng
		if( round != "None"){
			total += 50;
		}
		//Die Cutting
		if( die != "No"){
			total += 200;
		}
		//Cut Out
		if( cut != "No"){
			total += 200;
		}
		//Edge Paining
		if( paint != "None"){
			total += 75;
		}
		//Edge Paining
		if( glide != "None"){
			total += 150;
		}
	}
	else if(quantity == 500){
		//Corner Roundng
		if( round != "None"){
			total += 75;
		}
		//Die Cutting
		if( die != "No"){
			total += 200;
		}
		//Cut Out
		if( cut != "No"){
			total += 200;
		}
		//Edge Paining
		if( paint != "None"){
			total += 100;
		}
		//Edge Paining
		if( glide != "None"){
			total += 175;
		}
	}
	else if(quantity == 1000){
		//Corner Roundng
		if( round != "None"){
			total += 75;
		}
		//Die Cutting
		if( die != "No"){
			total += 200;
		}
		//Cut Out
		if( cut != "No"){
			total += 200;
		}
		//Edge Paining
		if( paint != "None"){
			total += 100;
		}
		//Edge Paining
		if( glide != "None"){
			total += 200;
		}
	}
	
	/*FOR FOILED COLORS*/
	for(var f=0; f<=2; f++){
		if(fcolor[f] == "gold"){
			total += 25;
		}if(fcolor[f] == "silver"){
			total += 25;
		}
	}
	for(var b=0; b<=2; b++){
		if(bcolor[b] == "gold"){
			total += 25;
		}if(bcolor[b] == "silver"){
			total += 25;
		}
	}
	
	$("#total").text("$"+total+".00");
	$("#paperTotal").val(total);
});
});
</script>
</html>