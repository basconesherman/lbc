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
$ship = clean($_POST['new-address']);

mysql_query("UPDATE tblclients SET shipping='$ship' WHERE email='$ref'");
header("location: change-details.php");
?>