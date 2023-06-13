<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
/*if ($conn->connect_error) {
     die("Connection to database failed: " . $conn->connect_error);
}*/
sleep(10);
/* Get data from Client side using $_POST array */
$firstname  = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$age  = $_POST['age'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$username  = $_POST['username'];
/* validate whether user has entered all values. */
if(!$firstname || !$lastname || !$age || !$email || !$password || !$username ||){
  $result = 2;
}else {
   //SQL query to get results from database
   $sql    = "insert into users (firstname, lastname, age, email, password, username) values (?, ?, ?, ?, ?, ?)  ";
   $stmt   = $conn->prepare($mysqli);
   $stmt->bind_param('sss', $firstname, $lastname, $age, $email, $password, $username);
   if($stmt->execute()){
     $result = 1;
   }
}
echo $result;
$conn->close();

 
?>
