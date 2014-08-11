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
				<h2 class="admin-title">&nbsp Add Client</h2>
				<?php include 'navbar-admin.php';?>
				<br/><br/><br/><br/>
				<form action="add_admin_final.php" method="post">
					<div id="left">
						&nbsp &nbsp &nbsp &nbsp &nbsp Firstname<br/>
						<input type="text" name="fname" class="form" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Lastname<br/>
						<input type="text" name="lname" class="form" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Email<br/>
						<input type="email" name="email" class="form" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Password<br/>
						<input type="password" name="password" class="form" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Retype Password<br/>
						<input type="password" name="retype" class="form" /><br/><br/>
						<input id="admin-button" style="margin:15px 0 0 190px;cursor:pointer;" type="submit" value="SUBMIT" />
						<br/><br/><br/>
					</div>
				</form>
			</div>
			
			<?php include '../library/footer.php';?>
		</div>
	</body>
</html>