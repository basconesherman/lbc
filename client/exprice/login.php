<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include('../connect.php');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitizing the POST values
	$email = clean($_POST['user-email']);
	$password = clean($_POST['user-pass']);
	$enc = MD5($password);
	$check_pos = "empty";
	
	//Definining the type of user
	$result = mysql_query("SELECT * FROM tblusers WHERE email='$email' AND password='$enc'");
	while($row = mysql_fetch_array($result)){
		$check_pos = $row['type'];
	}
	
	//If $position = admin
	if ($check_pos=='admin'){
		//Create query
		$search="SELECT * FROM tbladmins WHERE email='$email' AND password='$enc'";
		$result=mysql_query($search);
		
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['email'];
				session_write_close();
				//if ($level="admin"){
				header("location: admin/index.php");
				exit();
			}else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	else if (($check_pos=='client') && (isset($_COOKIE["user"]))){
		//Create query
		$search="SELECT * FROM tblclients WHERE email='$email' AND password='$enc'";
		$result=mysql_query($search);
		
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['email'];
				session_write_close();
				//if ($level="admin"){
				header("location: client/pricing/upload.php");
				exit();
			}else {
				//Login failed
				header("location: ../pricing/upload.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	
	else if ($check_pos=='client'){
		//Create query
		$search="SELECT * FROM tblclients WHERE email='$email' AND password='$enc'";
		$result=mysql_query($search);
		
		//Check whether the query was successful or not
		if($result) {
			if(mysql_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['email'];
				session_write_close();
				//if ($level="admin"){
				header("location: client/index.php");
				exit();
			}else {
				//Login failed
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	else{echo "ERROR LOGGING IN!";}
?>