<?php
include('connect.php');

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
if($_POST['pass1'] == $_POST['pass2']){

//Sanitize the POST values
$fname = clean($_POST['fn']);
$lname = clean($_POST['ln']);
$email = clean($_POST['email']);
$pass = clean($_POST['pass1']);
$addr1 = clean($_POST['addr1']);
$addr2 = clean($_POST['addr2']);
$addr3 = clean($_POST['addr3']);
$ship = $addr1." ".$addr2." ".$addr3;
$city = clean($_POST['city']);
$state = clean($_POST['state']);
$zip = clean($_POST['zip']);
$type = "client";
$enc = MD5($pass);
mysql_query("INSERT INTO tblclients (fname, lname, email, password, shipping, city, state, zip)
VALUES ('$fname','$lname','$email','$enc','$ship', '$city', '$state', '$zip')");
mysql_query("INSERT INTO tblusers (email, password, type)
VALUES ('$email','$enc','$type')");
echo "<script>alert('ACCOUNT SUCCESFULLY CREATED!');window.location.href = 'upload.php';</script>";
}
else{echo "<script>alert('PASSWORD DIDNT MATCH!');window.location.href = 'upload.php';</script>";}
?>