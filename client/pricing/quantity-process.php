<?php
	include('../../connect.php');
	$quantity = $_POST['quantity'];
	$total = $_POST['paperTotal'];
	$id = $_COOKIE["user"];
	
	mysql_query("UPDATE tblpreorder SET quantity='$quantity' WHERE id='$id'");
	mysql_query("UPDATE tblpreorder SET totalAmount='$total' WHERE id='$id'");
	header("location: color.php");
?>