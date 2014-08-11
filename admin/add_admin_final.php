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
$pass = MD5($_POST['password']);
//Check if Password are matched
if($_POST['password'] == $_POST['retype']){
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$email = clean($_POST['email']);
	$type = "admin";
	$id = rand(100000,9999999);
	
	mysql_query("INSERT INTO tbladmins (id, fname, lname, email, password)
	VALUES ('$id','$fname','$lname','$email','$pass')");
	mysql_query("INSERT INTO tblusers (id,email, password, type)
	VALUES ('$id','$email','$pass','$type')");
	header("location: account.php");
}
else{
	echo "<script>alert('Password did not much.')</script>";
	//header("location: add_client.php");
}

?>