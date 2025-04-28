<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $student_number = $_POST['student_number'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $age = $_POST['age'];
    $contact_number = $_POST['contact_number'];
    $citizenship = $_POST['citizenship'];
    $civil_status = $_POST['civil_status'];

    // Handle file upload
    $profile_picture = '';
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
        $profile_picture = basename($_FILES["profile_picture"]["name"]);
    }

    $stmt = $pdo->prepare("INSERT INTO students (username, password, name, student_number, course, year_section, address, birthdate, birthplace, age, contact_number, citizenship, civil_status, profile_picture) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$username, $password, $name, $student_number, $course, $year_section, $address, $birthdate, $birthplace, $age, $contact_number, $citizenship, $civil_status, $profile_picture]);

    header("Location: ../main-ad.php");
}
?>