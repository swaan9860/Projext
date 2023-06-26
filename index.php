<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="container">
        <h1>This is for student management system</h1>

        <div class="card">
            <h2>Recent Activity</h2>
            <?php
                // PHP code to fetch and display recent activity from the database
                $currentTimestamp = time();
                echo "<p>Current Timestamp: $currentTimestamp</p>";

                $currentDateTime = date("Y-m-d H:i:s");
                echo "<p>Current Date and Time: $currentDateTime</p>";
            ?>
        </div>

        <div class="card">
            <h2>Tasks</h2>
            <a href="log_test.html">Login here.</a>
            <p>Don't have an account yet?</p>
            <a href="register_test.html">Register here!</a>
        </div>
    </div>
</body>
</html>
