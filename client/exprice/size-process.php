<?php
	include('../connect.php');
	$size = $_POST['size'];
	$id = $_COOKIE["user2"];
	
	mysql_query("UPDATE tblpreorder SET size='$size' WHERE id='$id'");
	header("location: quantity.php");
?>