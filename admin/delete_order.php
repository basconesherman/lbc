
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from tblorders where id='$id'";
 mysql_query( $sql);
 
 
 $sql2 = "delete from tblpreorder where id='$id'";
 mysql_query( $sql2);
}

?>