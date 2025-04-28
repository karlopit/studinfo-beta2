<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Add Student Information</h2>
    <form action="php/add_student.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="student_number">Student Number:</label>
        <input type="text" id="student_number" name="student_number" required>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>
        <label for="year_section">Year and Section:</label>
        <input type="text" id="year_section" name="year_section" required>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <label for="birthplace">Birthplace:</label>
        <input type="text" id="birthplace" name="birthplace" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required>
        <label for="citizenship">Citizenship:</label>
        <input type="text" id="citizenship" name="citizenship" required>
        <label for="civil_status">Civil Status:</label>
        <input type="text" id="civil_status" name="civil_status" required>
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" id="profile_picture" name="profile_picture">
        <button type="submit">Add Student</button>
    </form>
</body>
</html>