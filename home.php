<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    // Redirect the user to the login page if not logged in
    header("Location: display_admin.php");
    exit();
}

// Access the session variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!-- HTML content of the home page goes here -->
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome, <?php echo $username; ?>!</h1>
	<p>Your email: <?php echo $email; ?></p>

	<!-- Other content of the home page -->
</body>
</html>
