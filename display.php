<?php
// this file is for displaying the data in the table regisstered in project database after register has been successful
    // including the database connection file
    include_once("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM registered ORDER BY id DESC");
    if (!$result) die("Database fetch failed: " . mysqli_errno($mysqli));
?>

<html>
<head>
    <title>HomePage</title>
</head>
<body>
    <a href="register_test.html">Add New Data</a><br/><br/>
    <table width='80%' border="0">
        <tr bgcolor='#CCCCCC'>
            <td>firstname</td>
            <td>lastname</td>
            <td>username</td>
            <td>Age</td>
            <td>Email</td>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
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
    