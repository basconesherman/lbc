<?php
define ("FILEREPOSITORY","../upload");
include('../connect.php');
if (is_uploaded_file($_FILES['pdf_document']['tmp_name'])) {

if ($_FILES['pdf_document']['type'] != "application/pdf") {

echo "<p>Files must be uploaded in PDF format.</p>";

} else {

$name = $_POST['filename'];

$result = move_uploaded_file($_FILES['pdf_document']['tmp_name'], FILEREPOSITORY."/$name.pdf");

if ($result == 1){ echo "<p>PDF document successfully uploaded.<br/><a href='upload.php'>Back to Upload Page</a></p>";
mysql_query("UPDATE tblorders SET design_approval='Waiting for Approval' WHERE id='$name'");}
else {echo "<p>There was a problem uploading the file. Check that the file is valid and try again.</p>";}

//header("location: upload.php");
}}
?>