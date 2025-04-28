<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Student Menu</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <button class="menu-btn" id="menu-toggle">☰ Menu</button>
        <div class="sidebar" id="sidebar">
            <button class="back-btn" id="close-sidebar">← Back</button>
            <h2>Student Menu</h2>
            <div class="menu-options">
                <a href="info.php" class="menu-item">Info</a>
                <a href="grades.php" class="menu-item">Grades</a>
                <a href="schedule.php" class="menu-item">Schedule</a>
                <a href="task-stud.php" class="menu-item">Tasks</a>
                <a href="php/logout.php" class="menu-item">Log Out</a>
            </div>
        </div>
        <div class="main-content">
            <?php if (isset($_SESSION['user_id'])): ?>
                <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <?php else: ?>
                <p>Please log in to access your information.</p>
            <?php endif; ?>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>