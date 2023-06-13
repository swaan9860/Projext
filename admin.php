<?php
// this file if for admins to edit the data on the registered table in project database
    // including the database connection file
    include_once("config.php");

    // check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        // update the data in the table
        $sql = "UPDATE registered SET firstname='$firstname', lastname='$lastname',
        username='$username', age='$age', email='$email' WHERE id=$id";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            // data updated successfully
            header("Location: admin.php"); // redirect to the view page or any other page
            exit();
        } else {
            // error updating data
            echo "Error updating data: " . mysqli_error($mysqli);
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <?php
        // check if the ID parameter is provided in the URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // fetch the existing data from the table
            $sql = "SELECT * FROM registered WHERE id=$id";
            $result = mysqli_query($mysqli, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $username = $row['username'];
                $age= $row['age'];
                $email = ['email'];
            } else {
                echo "Error fetching data: " . mysqli_error($mysqli);
                exit();
            }
        } else {
            echo "ID parameter not provided.";
            exit();
        }
    ?>

    <h2>Update Data</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
        <label>firstname:</label>
        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
        <label>lastame:</label>
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <label>userame:</label>
        <label>Age:</label>
        <input type="text" name="age" value="<?php echo $age; ?>"><br><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
