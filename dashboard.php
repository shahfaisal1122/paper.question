<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location:login.php");
    exit();
}

// Display dashboard content for authenticated users
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>