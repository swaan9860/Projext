<?php

// this file is for the data from the login_test.php to check and verify the login data from database
include_once("config.php");
if(isset($_REQUEST['login'])){
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
}
    $result = mysqli_query($mysqli, "SELECT * FROM students WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($result)==1) {
    header("Location: display_student.php");
    exit();
} else {
header('Location:student_login.php');
    exit();
}

?>
