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
	
		//Sanitize the POST values
		$ptype = clean($_POST['stock-type']);
		$pfront = clean($_POST['pfront']);
		$pback = clean($_POST['pback']);
		$size = clean($_POST['size']);
		$quantity = clean($_POST['quantity']);
		$round = clean($_POST['round']);
		$die = clean($_POST['die']);
		$cut = clean($_POST['cut']);
		$paint = clean($_POST['paint']);
		$glide = clean($_POST['glide']);
		$total = clean($_POST['total']);
		$fcolor1 = clean($_POST['fcolor1']);
		$fcolor2 = clean($_POST['fcolor2']);
		$fcolor3 = clean($_POST['fcolor3']);
		$bcolor1 = clean($_POST['bcolor1']);
		$bcolor2 = clean($_POST['bcolor2']);
		$bcolor3 = clean($_POST['bcolor3']);
		
		$ply1 = filter_var($pfront, FILTER_SANITIZE_NUMBER_INT);
		$ply2 = filter_var($pback, FILTER_SANITIZE_NUMBER_INT);
		
		$sql = mysql_query("UPDATE tblpreorder SET papertype='$ptype', paperfront='$pfront', paperback='$pback', size='$size', quantity='$quantity', 
		rounding='$round', diecutting='$die', cutout='$cut', edgepainting='$paint', edgegliding='$glide', frontcolor1='$fcolor1',
		frontcolor2='$fcolor2', frontcolor3='$fcolor3', backcolor1='$bcolor1', backcolor2='$bcolor2', backcolor3='$bcolor3', totalAmount='$total'  WHERE id='$id'");
		
		$sql2 = mysql_query("UPDATE tblorders SET quantity='$quantity'");
		
		//mysql_query("UPDATE tblusers SET email='$email', password='$pass' WHERE id='$id'");

		header("location: full_order.php?id=".$id);

?>