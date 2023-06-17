<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Dashboard</h1>

        <div class="card">
            <h2>Recent Activity</h2>
            <?php
                // PHP code to fetch and display recent activity from the database
                $recentActivity = [
                    'Logged in at 10:00 AM',
                    'Updated profile information',
                    'Posted a new blog article',
                ];

                foreach ($recentActivity as $activity) {
                    echo "<p>$activity</p>";
                }
            ?>
        </div>

        <div class="card">
            <h2>Tasks</h2>
            <a href="login_test.php">Login here.</a>
            <p>Don't have an account yet ?</p>
    </script>
            <a href="register_test.html">Register here!</a>
</body>
</html>
