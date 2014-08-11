<?php
include('../auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Order HIstory | Letterpress Business Cards</title>
		<?php include 'library/imports2.php';?>
		<link type="text/css" rel="stylesheet" href="css/order-history.css"/>
	</head>
	<body>
		<div class="container">
			<?php include 'library/header.php';?>
			<?php include '../library/navigation.php';?>
			<?php include 'library/navigation.php';?>
			<div style="margin-left:-30px;" class="title">
				<p id="title"><span>your</span> ORDER HISTORY</p>
			</div>
			
			<div id="order-table" class="section group">
				<div class="grid">
				<table cellpadding="0" cellspacing="0" id="resultTable">
					<thead>
						<tr>
							<th></th>
							<th>Date</th>
							<th>Items Ordered</th>
							<th>Quantity</th>
							<th>Proof</th>
							<th>Status</th>
							<th>Receipt</th>
						</tr>
					</thead>
					<tbody>
					<?php
						include 'connect.php';
						$inc = 1;
						$result = mysql_query("SELECT * FROM tblorders WHERE email='$user_email'");
						while($row = mysql_fetch_array($result))
							{
								echo '<tr class="record">';
								echo '<td><div align="left">Order #'.$inc.'</div></td>';
								echo '<td><div align="left">'.$row['date'].'</div></td>';
								echo '<td><div align="left">'.$row['item'].'</div></td>';
								echo '<td><div align="left">'.$row['quantity'].'</div></td>';
								echo '<td><div align="left">'.$row['proof'].'</div></td>';
								echo '<td><div align="left">'.$row['status'].'</div></td>';
								echo '<td><div align="left">'.$row['proof'].'</div></td>';
								$inc++;
							}
						?> 
					</tbody>
				</table>
				</div>
				<br/>
			</div>
			<?php include 'library/footer.php';?>
		</div>
	</body>
</html>