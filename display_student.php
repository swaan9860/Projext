<?php
// this file is for displaying the data in the table registered in the project database after registration has been successful
// including the database connection file
include_once("config.php");

// Query for students table
$studentsResult = mysqli_query($mysqli, "SELECT * FROM students ORDER BY id DESC");
if (!$studentsResult) die("Database fetch failed: " . mysqli_errno($mysqli));

// Query for teachers table
$teachersResult = mysqli_query($mysqli, "SELECT * FROM teachers ORDER BY id DESC");
if (!$teachersResult) die("Database fetch failed: " . mysqli_errno($mysqli));
?>

<html>
<head>
    <title>HomePage</title>
</head>
<body>
    <a href="student_register.html">Add New Student Data</a><br/><br/>
    <table width='80%' border="0">
        <tr bgcolor='#CCCCCC'>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Username</td>
            <td>Age</td>
            <td>Email</td>
            <td>Action</td>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($studentsResult)) {
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <a href="teacher_register.html">Add New Data For Teacher</a><br/><br/>
    <table width='80%' border="0">
        <tr bgcolor='#CCCCCC'>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Username</td>
            <td>Age</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($teachersResult)) {
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
