<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Check if Password are matched
if($_POST['password'] == $_POST['retype']){
	$pass = MD5($_POST['password']);
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$email = clean($_POST['email']);
	$ship = clean($_POST['ship']);
	$city = clean($_POST['city']);
	$state = clean($_POST['state']);
	$zip = clean($_POST['zip']);
	$type = "client";
	$id = rand(100000,9999999);
	
	mysql_query("INSERT INTO tblclients (id, fname, lname, email, password, shipping, city, state, zip)
	VALUES ('$id','$fname','$lname','$email','$pass','$ship', '$city', '$state', '$zip')");
	mysql_query("INSERT INTO tblusers (id,email, password, type)
	VALUES ('$id','$email','$pass','$type')");
	header("location: user.php");
}
else{
	echo "<script>alert('Password did not much.')</script>";
	//header("location: add_client.php");
}

?>