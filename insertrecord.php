<?php

	include "config/settings.php";

	// Fetching Values From URL
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$studentno = $_POST['studentno'];
	$course = $_POST['course'];

	if (isset($_POST['name'])) {
		$query = mysqli_query($conn,"INSERT INTO student_record(name,surname, email, course, student_number) 
		VALUES ('$name', '$surname', '$email','$course', '$studentno')"); //Insert Query
		echo "Form Submitted succesfully";
	}
	mysqli_close($conn); // Connection Closed
?>