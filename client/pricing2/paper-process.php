<!-- SESSION SETTING -->
<?php
	session_start();
	$reference = $_SESSION['SESS_MEMBER_ID'];
	include '../connect.php';
	
	$searchEmail = "SELECT * FROM tblclients WHERE email='$reference'";
	$userEmail = mysql_query($searchEmail);
	
	while($row = mysql_fetch_array($userEmail)){
		$user_email = $row['email'];
		$user_fname = $row['fname'];
		$user_lname = $row['lname'];
		$user_shipping = $row['shipping'];
		$user_city = $row['city'];
	}
?>

<?php
	setcookie("user", time(), time()+7200);
	
	$id = time();
	$today = date("m.d.y");
	$email = $_SESSION['SESS_MEMBER_ID'];
	include('../connect.php');
	$paperOption = $_POST['paper'];
	$paperFront = $_POST['radios'];
	$paperBack = $_POST['radios2'];
	$total = $_POST['paperTotal'];
	
	if($paperOption == "single-stock"){		
		/*Checking ply number*/
		$plyFront = substr($paperFront,0,1);
		$plyBack = "0";
		
		/*Checking paper name*/
		$first = substr($paperFront,5,1);	
		if($first == 0){$nameFront = substr($paperFront,6,1);}
		else{$nameFront = substr($paperFront,5,2);}
		$nameBack = "0";
		
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
	mysql_query("INSERT INTO tblpreorder (id, papertype, paperfront, paperback, plyfront, plyback, totalAmount)
	VALUES ('$id','$paperOption','$frontName','$backName','$plyFront', '$plyBack', '$total')");
	
	mysql_query("INSERT INTO tblorders (id, design_approval, item, email, status, date, shipping)
	VALUES ('$id','For Approval','BCard/Letterhead','$user_email','Finalized','$today','$user_shipping')");
	header("location: size.php");
?>