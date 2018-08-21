<?php 


$connections = mysqli_connect("localhost", "root", "", "barangaysystem");
if (mysqli_connect_errno()) {
	# code...
	echo "Failed to connect MySQL:" . mysqli_connect_error();
}



?>