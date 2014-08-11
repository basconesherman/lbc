<?php
	setcookie("user2", time(), time()+7200);
	
	$id = time();

	include('../connect.php');
	$paperOption = $_POST['paper'];
	$paperFront = $_POST['radios'];
	$paperBack = $_POST['radios2'];
	
	if($paperOption == "single-stock"){		
		/*Checking ply number*/
		$plyFront = substr($paperFront,0,1);
		$plyBack = "None";
		
		/*Checking paper name*/
		$first = substr($paperFront,5,1);	
		if($first == 0){$nameFront = substr($paperFront,6,1);}
		else{$nameFront = substr($paperFront,5,2);}
		$nameBack = "None";
		
		/*Array for real paper names*/
		$names = array(
			"Lettra 1 ply white","Lettra 2 ply white","Lettra 1 ply pearl",
			"Lettra 2 ply pearl","Crest 1 ply pearl","Crest 2 ply pearl",
			"CP 1 ply dark grey","CP 1 ply real grey","Arturo 1 ply stone",
			"Kraft 1 ply","CP 1 ply scarlet","Arturo 1 ply rosa",
			"CP 1 ply navy","CP 1 ply mint"
		);
		
		/*Search name*/
		$frontName = $names[$nameFront-1];
		$backName = $nameBack;
	}
	else{
		/*Checking ply number*/
		$plyFront = substr($paperFront,0,1);
		$plyBack = substr($paperBack,0,1);
		
		/*Checking paper name*/
		$first = substr($paperFront,5,1);	
		
		if($first == 0){$nameFront = substr($paperFront,6,1);}
		else{$nameFront = substr($paperFront,5,2);}
		
		if($first == 0){$nameBack = substr($paperBack,6,1);}
		else{$nameBack = substr($paperBack,5,2);}
		
		/*Array for real paper names*/
		$names = array(
			"Lettra 1 ply white","Lettra 2 ply white","Lettra 1 ply pearl",
			"Lettra 2 ply pearl","Crest 1 ply pearl","Crest 2 ply pearl",
			"CP 1 ply dark grey","CP 1 ply real grey","Arturo 1 ply stone",
			"Kraft 1 ply","CP 1 ply scarlet","Arturo 1 ply rosa",
			"CP 1 ply navy","CP 1 ply mint"
		);
		
		/*Search name*/
		$frontName = $names[$nameFront-1];
		$backName = $names[$nameBack-1];
	}
	mysql_query("INSERT INTO tblpreorder (id, papertype, paperfront, paperback, plyfront, plyback)
	VALUES ('$id','$paperOption','$frontName','$backName','$plyFront', '$plyBack')");
	header("location: size.php");
?>