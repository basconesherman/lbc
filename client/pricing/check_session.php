<?php
	session_start();
	$name = $_SESSION['SESS_MEMBER_ID'];
	if(!isSet($name))
	{
		//session expired
		echo "1";
	} else {
		//session not expired
		echo "0";
	}
?>