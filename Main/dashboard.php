<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Reports</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Navigation bar -->
    <div class="navbar">
        <h2>Dashboard</h2>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="dashboard-wrapper">
            <h1>Welcome to AvocadoHive!</h1>
            <p>What are we doing today?</p>
        </div>
    </div>
</body>
</html>
