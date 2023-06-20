<?php
//this file is for the data from the register_test.php to be posted into the database
include_once("config.php");


	// if(isset($_POST['submit']))
{
	$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	
	if(empty($firstname)|| empty($lastname) || empty($age) || empty($email) || empty($password) || empty($username)) 
	{
		echo "<font color='red'>Some field is empty.</font><br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
	}

	else
	{
		$result = mysqli_query($mysqli, "INSERT INTO students(firstname, lastname, age, email, password, username) 
			VALUES('$firstname', '$lastname', '$age', '$email', '$password', '$username')");
		if (!$result) die("Insertion failed: ".mysqli_error($mysqli));
		else{
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='display_student.php'>View Result</a>";
		}
}
}
?>