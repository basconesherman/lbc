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
//Sanitize the POST values
$ref = clean($_POST['user-email']);
$email = clean($_POST['new-email']);

mysql_query("UPDATE tblclients SET email='$email' WHERE email='$ref'");
mysql_query("UPDATE tblusers SET email='$email' WHERE email='$ref'");

mysql_query("UPDATE tblorders SET email='$email' WHERE email='$ref'");
header("location: ../index.php");
?>