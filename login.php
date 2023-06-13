<?php
$message = "";
if (count($_POST) > 0) {
    $isSuccess = 0;
    $conn = mysqli_connect("localhost", "root", "", "project");
    $username = $_POST['username'];
    $sql = "SELECT * FROM login WHERE username= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $username);
    $statement->execute();
    $result = $statement->get_result();
    while ($row = $result->fetch_assoc()) {
        if (! empty($row)) {
            $hashedPassword = $row["password"];
            if (password_verify($_POST["password"], $hashedPassword)) {
                $isSuccess = 1;
            }
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
    } else {
        header("Location:  ./login.php");
    }
}
?>