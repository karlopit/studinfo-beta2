<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Admin Menu</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <button class="menu-btn" id="menu-toggle">☰ Menu</button>
        <div class="sidebar" id="sidebar">
            <button class="back-btn" id="close-sidebar">← Back</button>
            <h2>Admin Menu</h2>
            <div class="menu-options">
                <a href="add.php" class="menu-item">Add Student Info</a>
                <a href="task-ad.php" class="menu-item">Tasks</a>
                <a href="php/logout.php" class="menu-item">Log Out</a>
            </div>
        </div>
        <div class="main-content">
            <?php if (isset($_SESSION['user_id'])): ?>
                <p>Welcome, Admin!</p>
            <?php else: ?>
                <p>Please log in to access the admin panel.</p>
            <?php endif; ?>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>