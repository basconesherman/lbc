<?php
include('../connect.php');
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
	//Check if Current Password is right
	$result = mysql_query("SELECT * FROM tblclients WHERE id='$id'");
	while($row = mysql_fetch_array($result))
		{
			$current = $row['password'];
		}
	$enteredpass = md5($_POST['current']);
	if($current == $enteredpass){
		//Sanitize the POST values
		$fname = clean($_POST['fname']);
		$lname = clean($_POST['lname']);
		$email = clean($_POST['email']);
		$ship = clean($_POST['ship']);
		$city = clean($_POST['city']);
		$state = clean($_POST['state']);
		$zip = clean($_POST['zip']);
		$pass = MD5(clean($_POST['new']));
		mysql_query("UPDATE tblclients SET fname='$fname', lname='$lname', email='$email', password='$pass', shipping='$ship', city='$city', state='$state', zip='$zip' WHERE id='$id'");
		mysql_query("UPDATE tblusers SET email='$email', password='$pass' WHERE id='$id'");

		header("location: user.php");
	}
	else{
		echo "<script>alert('Password did not much.')</script>";
		//header("location: user.php");
	}

?>