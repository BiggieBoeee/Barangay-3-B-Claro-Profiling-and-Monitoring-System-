<?php

//connection
$connection = mysqli_connect("localhost","root","","barangaysystem");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
}else {
  echo "connected.";
}
//UPDATE QUERY 
$sql = "UPDATE person SET contact_no='$_POST[contact_no]',last_name='$_POST[last_name]', first_name='$_POST[first_name]',middle_name='$_POST[middle_name]' WHERE tblresident='$_POST[id]'"; 

//select database
mysqli_select_db($connection,'tblresident');
//select query
$sql = "SELECT * FROM tblresident";
//execute the query
$records = mysqli_query($connection, $sql);
if (mysqli_query($connection, $sql)) {	
	
	header("refresh:1; url=index.php");
}else 
	echo "Not Update";

?>