<?php
session_start();

// Check if the user is logged in and is an admin

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Include the admin dashboard content -->
    <?php include("admin.html"); ?>
</body>
</html>
