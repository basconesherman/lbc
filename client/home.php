<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home | Letterpress Business Cards</title>
		<?php include 'library/imports2.php';?>
		<link type="text/css" rel="stylesheet" href="css/home-account.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include '../library/navigation.php';?>
		<div id="account-home">
			<?php include 'library/navigation.php';?>
			<div class="content-grid">
				<div id="home-account-left">
					<h2 id="greetings">Hi, <?php echo $user_fname;?></h2>
					<p class="article">
						Please download the PDF proof at right, review carefully and make absolutely 
						sure everything is represented and specified exactly as it should be. Once you 
						have approved the design and order details, we will begin the process to print
						your order and will not be able to make any further changes, for any reason.
					</p>
					<div id="home-account-left-one">
						<span class="label-detail">Name: <p class="details"><?php echo $user_fname." ".$user_lname;?></p></span>
						<br/>
						<span class="label-detail">Email: <p class="details"><?php echo $user_email;?></p></span>
						<br/>
						<span class="label-detail">Address:</span><br/><p id="address" class="details"><?php echo $user_shipping." ".$user_city;?></p>
					</div>
				</div>
				
				<div id="home-account-right">
					<a href="<?php echo '../upload/'.$order_id.'.pdf';?>"  target="_blank"><img id="preview-image" style="float:right;margin-right:11px;" src="../admin/images/preview.png" alt="Preview"/></a>
					<br/>
					<div id="home-account-right-one">
						<a href="#" class="right-btns"><img src="images/download-btn.png"  alt="Button" /></a>
						<a href="pricing/upload.php" class="right-btns"><img src="images/make-changes-btn.png"  alt="Button" /></a>
						<a href="approved.php" class="right-btns"><img src="images/approve-btn.png"  alt="Button" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php include 'library/footer.php';?>
		</div>
		</div>
	</body>
</html>