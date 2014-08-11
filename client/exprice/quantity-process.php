<?php
	include('../connect.php');
	$quantity = $_POST['quantity'];
	$id = $_COOKIE["user2"];
	
	mysql_query("UPDATE tblpreorder SET quantity='$quantity' WHERE id='$id'");
	header("location: color.php");
?>