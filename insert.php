<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "barangaysystem";

$contact_no = $_POST['contact_no'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];
$address = $_POST['address'];
$birth_place = $_POST['birth_place'];
$religion = $_POST['religion'];
$civil_status = $_POST['civil_status'];
$educ_attain = $_POST['educ_attain'];
$email_add = $_POST['email_add'];
$occupation = $_POST['occupation'];
$citizenship = $_POST['citizenship'];



	//connection on db

	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname)
	
	//check connection

	if ($conn->connect_error) {

		die("connection failed: ".$conn->connect_error);
	}
	if (empty($last_name)){
		echo"Field should not be blank";
		die();
	}
		if (empty($first_name)){
		echo"Field should not be blank";
		die();
	}
		if (empty($middle_name)){
		echo"Field should not be blank";
		die();
	}
		if (empty($address)){
		echo"Field should not be blank";
		die();
	}

	$sql = "INSERT INTO tblresident (last_name,first_name, middle_name, gender, contact_no, address, birth_place, birth_date, religion, civil_status, occupation, citizenship, email_add, educ_attain)
	VALUES ('$contact_no', '$last_name', '$first_name', '$middle_name', '$gender', '$birth_date', '$address', '$birth_place', '$religion', '$civil_status', '$occupation', '$citizenship', '$email_add', '$educ_attain')";

	if ($conn->query($sql) === TRUE  ) {
		# code...
		echo"Thank you! Your profile has been added!"
	}else {
		echo "Error". $sql . "<br>" . $conn->error;

	}

$conn->close()



?>
