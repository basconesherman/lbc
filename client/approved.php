<?php
include('../auth.php');
include "../connect.php";
$id = $_SESSION['SESS_MEMBER_ID'];
mysql_query("UPDATE tblorders SET design_approval='Approved' WHERE email='$id'");
echo "<p>PDF successfully approved.<br/><a href='home.php'>Back to Your Account</a></p>";
//header("location: home.php");
?>