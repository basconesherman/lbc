<?php
include('../auth.php');
$ses = $_SESSION['SESS_MEMBER_ID'];
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
		<script src="js/application2.js"></script>
	</head>
	<body>
		<br/><br/>
		<div class="container">
			<div id="admin-header-left2">
				<h2 class="admin-title">&nbsp Admin Account Manager</h2>
				
				<?php include 'navbar-admin.php';?>
				
				<div class="section group">
					<div class="">
					<br/><br/><br/>
						<h2 class="medium left" style="display:inline;margin:0 0 0 20px;">My Account</h2>
						<a id="admin-button" href="add_admin.php" style="float:right;margin-right:2.2%;margin-bottom:30px;margin-top:-10px;">ADD ADMIN</a>
						<table cellpadding="1" cellspacing="1" id="resultTable">
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
									<th>Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('../connect.php');
								$result = mysql_query("SELECT * FROM tbladmins WHERE email='$ses'");
								while($row = mysql_fetch_array($result))
									{
										echo '<tr class="record">';
										echo '<td><div align="left">'.$row['fname'].'</div></td>';
										echo '<td><div align="left">'.$row['lname'].'</div></td>';
										echo '<td><div align="left">'.$row['email'].'</div></td>';
										echo '<td><div align="left">'.$row['password'].'</div></td>';
										echo '<td><div align="center"><a href="edit_admin.php?id='.$row['id'].'" title="Click To Edit">Edit</a> </div></td>';
										echo '</tr>';
									}
								?> 
							</tbody>
						</table>
						<br/><br/><br/><br/>
						<h2 class="medium left" style="display:inline;margin:0 0 0 20px;">All Accounts</h2>
						<table cellpadding="1" cellspacing="1" id="resultTable">
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
									<th>Password</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('../connect.php');
								$result = mysql_query("SELECT * FROM tbladmins");
								while($row = mysql_fetch_array($result))
									{
										echo '<tr class="record">';
										echo '<td><div align="left">'.$row['fname'].'</div></td>';
										echo '<td><div align="left">'.$row['lname'].'</div></td>';
										echo '<td><div align="left">'.$row['email'].'</div></td>';
										echo '<td><div align="left">'.$row['password'].'</div></td>';
										echo '</tr>';
									}
								?> 
							</tbody>
						</table>
					</div>
				</div>
				<br/><br/><br/><br/>
			</div>
			
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
   url: "delete_client.php",
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