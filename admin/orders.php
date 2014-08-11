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
				<h2 class="admin-title">&nbsp Order Manager</h2>
				
				<?php include 'navbar-admin.php';?>
				
				<div class="section group">
					<div class="">
					<br/><br/>
						<h2 class="medium left" style="display:inline;margin:0 0 0 20px;">List of All Orders</h2>
						<input type="text" id="filter"  placeholder="Type text to filter result..."/>
						<table cellpadding="1" cellspacing="1" id="resultTable">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Email</th>
									<th>Shipping</th>
									<th>Item Type</th>
									<th>Quantity</th>
									<th>Proof</th>
									<th>Design Approval</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('../connect.php');
								$result = mysql_query("SELECT * FROM tblorders WHERE design_approval='Needs Design'");
								while($row = mysql_fetch_array($result))
									{
										echo '<tr class="record">';
										echo '<td><div align="left">'.$row['id'].'</div></td>';
										echo '<td><div align="left">'.$row['email'].'</div></td>';
										echo '<td><div align="left">'.$row['shipping'].'</div></td>';
										echo '<td><div align="left">'.$row['item'].'</div></td>';
										echo '<td><div align="left">'.$row['quantity'].'</div></td>';
										echo '<td><div align="left">'.$row['proof'].'</div></td>';
										echo '<td><div align="left">'.$row['design_approval'].'</div></td>';
										echo '<td><div align="center"><a href="full_order.php?id='.$row['id'].'" title="Go to Order Details">More</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">Delete</a></div></td>';
										echo '</tr>';
									}
								?> 
							</tbody>
						</table>
					</div>
				</div>
				<br/><br/><br/>
				
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