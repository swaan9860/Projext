<?php
session_start(); // Start the session

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Retrieve the submitted username and email
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Perform any necessary validation and authentication checks here

    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    // Redirect the user to the home page or any other desired page
    header("Location: display_admin.php");
    exit();
}
?>
