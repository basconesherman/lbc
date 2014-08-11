<?php
include('connect.php');
$id = clean($_POST['id']);
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
	$enteredpass = md5($_POST['current']);
		//Sanitize the POST values
		$email = clean($_POST['email']);
		$pass = MD5(clean($_POST['new']));
		mysql_query("UPDATE tblclients SET email='$email', password='$pass' WHERE id='$id'");
		mysql_query("UPDATE tblusers SET email='$email', password='$pass' WHERE id='$id'");

		header("location: index.php");

?>