<?php
	include('../connect.php');
	$id = $_COOKIE["user"];
	
	$round = $_POST['rounding'];
	$diecut = $_POST['diecutting'];
	$cutout = $_POST['cutout'];
	$painting = $_POST['edgepainting'];
	$gliding = $_POST['edgegliding'];
	$total = $_POST['paperTotal'];
	
	if(empty($painting)){
		$painting = 'No';
	}
	else{
		$painting = "PMS ".$_POST['edgepainting'];
	}
	
	mysql_query("UPDATE tblpreorder SET rounding='$round', diecutting='$diecut', cutout='$cutout', edgepainting='$painting', edgegliding='$gliding', totalAmount='$total' WHERE id='$id'");
	header("location: upload.php");
?>