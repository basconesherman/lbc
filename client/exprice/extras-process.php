<?php
	include('../connect.php');
	$id = $_COOKIE["user2"];
	
	$round = $_POST['rounding'];
	$diecut = $_POST['diecutting'];
	$cutout = $_POST['cutout'];
	$painting = $_POST['edgepainting'];
	$gliding = $_POST['edgegliding'];
	
	if(empty($painting)){
		$painting = 'No';
	}
	else{
		$painting = "PMS ".$_POST['edgepainting'];
	}
	
	mysql_query("UPDATE tblpreorder SET rounding='$round', diecutting='$diecut', cutout='$cutout', edgepainting='$painting', edgegliding='$gliding' WHERE id='$id'");
	header("location: uploadnormal.php");
?>