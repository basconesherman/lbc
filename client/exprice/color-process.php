<?php
	include('../connect.php');
	$id = $_COOKIE["user2"];
	
	if(empty($_POST['letterpress-color1'])){
      $frontA = $_POST['foil-color1'];
    }      
    else{
		$frontA = "PMS ".$_POST['letterpress-color1'];
	}
	
	if(empty($_POST['letterpress-color2'])){
      $frontB = $_POST['foil-color2'];
    }      
    else{
		$frontB = "PMS ".$_POST['letterpress-color2'];
	}
	
	if(empty($_POST['letterpress-color3'])){
      $frontC = $_POST['foil-color3'];
    }      
    else{
		$frontC = "PMS ".$_POST['letterpress-color3'];
	}
	
	if(empty($_POST['letterpress-color4'])){
      $backA = $_POST['foil-color4'];
    }      
    else{
		$backA = "PMS ".$_POST['letterpress-color4'];
	}
	
	if(empty($_POST['letterpress-color5'])){
      $backB = $_POST['foil-color5'];
    }      
    else{
		$backB = "PMS ".$_POST['letterpress-color5'];
	}
	
	if(empty($_POST['letterpress-color6'])){
      $backC = $_POST['foil-color6'];
    }      
    else{
		$backC = "PMS ".$_POST['letterpress-color6'];
	}
	
	mysql_query("UPDATE tblpreorder SET frontcolor1='$frontA', frontcolor2='$frontB', frontcolor3='$frontC', backcolor1='$backA', backcolor2='$backB', backcolor3='$backC' WHERE id='$id'");
	header("location: extras.php");
?>