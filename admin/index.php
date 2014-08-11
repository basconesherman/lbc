<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administrator | Letterpress Business Cards</title>
		<link type="text/css" rel="stylesheet" href="css/admin.css"/>
		<link type="text/css" rel="stylesheet" href="../css/layout.css"/>
		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="js/admin-effect.js"></script>
	</head>
	<body>
		<br/><br/>
		<div class="container">
			<div id="admin-header-left">
				<h2 class="admin-title">&nbsp Administrator</h2>
				
				<div id="admin-actions">
					<input type="radio" id="radio1" name="radios" value="0" checked>
					<label for="radio1">
						<div class="items" >
							<h2 class="item-text">Users</h2>
						</div>
					</label>
					
					<input type="radio" id="radio2" name="radios" value="1">
					<label for="radio2">
						<div class="items" >
							<h2 class="item-text">Orders</h2>
						</div>
					</label>
					
					<input type="radio" id="radio3" name="radios" value="2">
					<label for="radio3">
						<div class="items" >
							<h2 class="item-text">Price Changer</h2>
						</div>
					</label>
					
					<input type="radio" id="radio4" name="radios" value="3">
					<label for="radio4">
						<div class="items" >
							<h2 class="item-text">Account</h2>
						</div>
					</label>
					
					<input type="radio" id="radio5" name="radios" value="4">
					<label for="radio5">
						<div class="items" >
							<h2 class="item-text">Upload</h2>
						</div>
					</label>
					
					<input type="radio" id="radio6" name="radios" value="5">
					<label for="radio6">
						<div class="items" >
							<h2 class="item-text">Logout</h2>
						</div>
					</label>
				</div>
			</div>
			<div id="admin-header-right">
				<center><br/><img src="images/Logo@2x.png" width="200px" height="100px"></center>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<p id="admin-right-text"></p>
				<center>
					<br/><br/><br/><a id="admin-button" href="user.php">LAUNCH</a>
				</center>
				<br/><br/>
			</div>
			<?php include '../library/footer.php';?>
		</div>
	</body>
</html>