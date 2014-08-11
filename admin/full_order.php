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
				<h2 class="admin-title">&nbsp Order Details</h2>
				
				<?php include 'navbar-admin.php';?>
				
				<div class="section group">
					<div class="">
					<br/><br/>
						<h2 class="medium left" style="display:inline;margin:0 0 0 20px;">Card Specifications</h2>
						
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
							<div id="specs">
								<p class="specs-text" style="font-size:30pt;color:black;">ORDER NO: <span style="color:red;"><?php echo $id; ?></span> 
									<span style="float:right;color:black;">TOTAL ORDER PRICE: <span style="color:red;">$<?php echo $total; ?>.00</span></span>
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
									<div class="right-specs">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:left;">
											<?php echo $ptype;?><br/>
											<?php echo $pfront;?><br/>
											<?php echo $pback;?><br/>
											<?php echo $size;?><br/>
											<?php echo $quantity;?><br/>
											<?php echo $round;?><br/>
											<?php echo $die;?><br/>
											<?php echo $cut;?><br/>
										</p>
									</div>
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
									<div class="right-specs">
										<p class="specs-text" style="margin:0 0 0 30px;text-align:left;">
											<?php echo $fcolor1;?><br/>
											<?php echo $fcolor2;?><br/>
											<?php echo $fcolor3;?><br/>
											<?php echo $bcolor1;?><br/>
											<?php echo $bcolor2;?><br/>
											<?php echo $bcolor3;?><br/>
											<?php echo $paint;?><br/>
											<?php echo $glide;?><br/>
										</p>
									</div>
								</div>
							</div>
							<br/>
						</div>
					</div>
				</div>
				<br/><br/>
			</div>
			
			<a id="admin-button" href="upload_final.php?id=<?php echo $id?>" style="float:right;margin-right:2.2%;margin-bottom:30px;margin-top:-10px;">UPLOAD DESIGN</a>
			<a id="admin-button" href="edit_order.php?id=<?php echo $id;?>" style="float:right;margin-right:2.2%;margin-bottom:30px;margin-top:-10px;">EDIT ORDER</a>
			<?php include '../library/footer.php';?>
		</div>
	</body>
<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this user? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete_order.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</html>