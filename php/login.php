<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; // Keep the password as plaintext
    $role = $_POST['role'];

    // Prepare the SQL statement based on the role
    if ($role == 'student') {
        $stmt = $pdo->prepare("SELECT * FROM students WHERE username = :username");
    } else {
        $stmt = $pdo->prepare("SELECT * FROM professors WHERE username = :username");
    }

    // Execute the statement
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Check if user exists and compare plaintext password
    if ($user && $password === $user['password']) { // Direct comparison
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role == 'student') {
            header("Location: ../main-stud.php");
        } else {
            header("Location: ../main-ad.php");
        }
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>