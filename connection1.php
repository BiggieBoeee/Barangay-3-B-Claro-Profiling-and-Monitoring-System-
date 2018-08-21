<?php

$connections = mysqli_connect("localhost", "root", "","barangaysystem");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}else {
	echo "connected.";
}

if(isset($_POST['submit'])){

		$contact_no = $_POST["contact_no"];
		$last_name = $_POST["last_name"];
		$first_name = $_POST["first_name"];
		$middle_name = $_POST["middle_name"];
		$gender = $_POST["gender"];
		$birth_date = $_POST["birth_date"];
		$birth_place = $_POST["birth_place"];
		$email_add = $_POST["email_add"];
		$address = $_POST["address"];
		$religion = $_POST["religion"];
		$citizenship = $_POST["citizenship"];
		$civil_status = $_POST["civil_status"];
		$educ_attain = $_POST["educ_attain"];
		$occupation = $_POST["occupation"]; 
		

	$sql = "INSERT INTO tblresident(contact_no,last_name,first_name, middle_name,gender,birth_date,birth_place,email_add,address,religion,citizenship,civil_status,educ_attain,occupation )
	VALUES('$contact_no', '$last_name', '$first_name', '$middle_name', '$gender', '$birth_date', '$birth_place', '$email_add','$address', '$religion','$citizenship', '$civil_status', '$educ_attain', '$occupation')"; 

				//important database syntax 
		mysqli_query($connections,$sql);
		$sql1=$connections->query("SELECT * FROM tblresident");

	while ( $row=$sql1-> fetch_assoc()) {
		
		echo $row['first_name']."<br>";
		echo $row['last_name']."<br>";
		echo $row['contact_no']."<br>";
		echo $row['resident_ID']."<br>";
	}



echo $last_name;
echo $first_name;
echo $contact_no;
echo $address;



	 // if ($connect->query($sql) === TRUE ) {
		# code...
	//	echo "Thank you! Your profile has been added!";
	// }else {
		// echo "Error bro". $sql . "<br><br>" . $connect->error;

	// }
}




?>