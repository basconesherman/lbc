<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Change Details | Letterpress Business Cards</title>
		<?php include 'library/imports2.php';?>
		<link type="text/css" rel="stylesheet" href="css/change-details.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include '../library/navigation.php';?>
		</div>
		<div id="change-details">
			<?php include 'library/navigation.php';?>
			<div class="content-grid" style="width:924px;">
				<div id="change-left">
					<div style="margin-left:;" class="title">
						<p id="title" style="text-align:left;">CHANGE DETAILS</p>
						<form id="shipping-address" action="edit_shipping.php" method="post">
							<input style="display:none;" name="user-email" type="text" value="<?php echo $user_email;?>">
							<h2 class="change-title">Shipping Address</h2>
							<span id="label">current address:</span><p id="address" class="details"><?php echo $user_shipping." ".$user_city;?></p>
							<br/>
							<textarea name="new-address">
							
							</textarea>
							<button style="float:left !important;margin-left:-5px;" type="submit"><img src="images/change-address-btn.png" alt="Change Address Button" /></button>
						</form>
					</div>
				</div>
				
				<div id="change-right">
					<form id="email-address" action="edit_email.php" method="post">
						<input style="display:none;" name="user-email" type="text" value="<?php echo $user_email;?>">
						<h2 class="change-title">Email</h2>
						<span id="label">current email:</span><p id="address2" class="details"><?php echo $user_email;?></p>
						<input class="form-input-type" type="email" name="new-email"/>
						<button type="submit"><img src="images/change-email-btn.png" alt="Change Email Button" /></button>
					</form>
					
					<form id="change-password" action="#" method="post">
						<input style="display:none;" name="user-email" type="text" value="<?php echo $user_email;?>">
						<h2 class="change-title">Password</h2>
						<input class="form-input-type" type="password" name="new-password"/>
						<h2 class="change-title">Retype</h2>
						<input class="form-input-type" type="password" name="retype-new-password"/>
						<button type="submit"><img src="images/change-password-btn.png" alt="Change Password Button" /></button>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>