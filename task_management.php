<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task_title = $_POST['task-title'];
    $task_description = $_POST['task-description'];
    $task_deadline = $_POST['task-deadline'];
    $professor_id = $_SESSION['user_id']; // Assuming the professor is logged in

    $stmt = $pdo->prepare("INSERT INTO tasks (professor_id, title, description, deadline) VALUES (?, ?, ?, ?)");
    $stmt->execute([$professor_id, $task_title, $task_description, $task_deadline]);

    header("Location: ../task-ad.php");
}
?>