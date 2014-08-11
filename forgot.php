<?php
   $orig = $_POST['code_orig'];
   $code = $_POST['code'];
   
   if($orig == $code){
	   $to = $_POST['email_add'];
	   $subject = "This is subject";
	   $message = "<b>This is HTML message.</b>";
	   $message .= '<a href="www.letterpressbusinesscards.com/testing/reset.php?email='.$to.'">CLICK ME</a>';
	   $header = "From:abc@somedomain.com \r\n";
	   $header = "Cc:afgh@somedomain.com \r\n";
	   $header .= "MIME-Version: 1.0\r\n";
	   $header .= "Content-type: text/html\r\n";
	   $retval = mail ($to,$subject,$message,$header);
	   if( $retval == true )
	   {
		  echo "<script>alert('Account reset link has been sent on your email.');</script><br/>";
		  echo "<a href='index.php'>Click to go back</a>";
	   }
	   else
	   {
		  echo "<script>alert('Message could not be send.');</script></br>";
		  echo "<a href='index.php'>Click to go back</a>";
	   }
   }
   else{
	echo "<script>alert('Invalid Captcha Code');</script></br>";
    echo "<a href='index.php'>Click to go back</a>";
   }
?>