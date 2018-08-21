
<?php
// connection
$connection = mysqli_connect('localhost','root','','barangaysystem');
//select database
mysqli_select_db($connection,'tblresident');
//UPDATE query
$sql = "UPDATE person SET last_name='$_POST['last_name']',first_name=$_POST['first_name']', middle_name=$_POST['middle_name']', address=$_POST['address']' WHERE ID ='$_POST['id']'";
//execute the query
if (mysqli_query($connection,$sql))
header("refresh:1; url=update.php");
else
	echo "Not Updated";

$
?>

