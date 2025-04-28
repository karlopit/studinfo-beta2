<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Tasks</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <a href="main-stud.php" class="back-btn">← Back</a>
    <h2>My Tasks</h2>
    <div class="task-list">
        <div class="task-item">
            <h3>Calculus Assignment #3</h3>
            <p>Complete exercises 4.1 through 4.8 in the textbook. Show all your work.</p>
            <p>Due: April 30, 2025</p>
            <button class="submit-btn">Submit Assignment</button>
        </div>
        <!-- Add more tasks as needed -->
    </div>

    <!-- Modal for task submission -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Are you sure you want to submit this task?</p>
            <button id="confirmSubmit">Yes</button>
            <button id="cancelSubmit">No</button>
        </div>
    </div>
</body>
</html>