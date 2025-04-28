<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Task Management</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <a href="main-ad.php" class="back-btn">← Back</a>
    <h2>Task Management</h2>
    <div class="create-task">
        <button class="create-task-btn">Create New Task</button>
        <div class="task-form">
            <form action="php/task_management.php" method="POST">
                <label for="task-title">Task Title</label>
                <input type="text" id="task-title" name="task-title" required>
                <label for="task-description">Description</label>
                <textarea id="task-description" name="task-description" required></textarea>
                <label for="task-deadline">Deadline</label>
                <input type="date" id="task-deadline" name="task-deadline" required>
                <button type="submit">Save Task</button>
            </form>
        </div>
    </div>
    <div class="task-list">
        <div class="task-item">
            <h3>Calculus Assignment #3</h3>
            <p>Complete exercises 4.1 through 4.8 in the textbook. Show all your work.</p>
            <p>Due: April 30, 2025</p>
            <button class="edit-btn">Edit</button>
            <button class="delete-btn">Delete</button>
        </div>
        <!-- Add more tasks as needed -->
    </div>
</body>
</html>