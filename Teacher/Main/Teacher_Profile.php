<?php
session_start();

if (!isset($_SESSION['teacherId'])) {
    header("Location: login.php");
    exit();
}

include_once '../Controller/process_profile.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        <h1>Profile</h1>
        <nav>
            <a href="Home_page.php">Home</a>
            <a href="courses.php">Courses</a>
            <a href="Notice.php">Notice</a> 
            <a href="Student.php">Student</a>
            <a href="login.php">Logout</a>
        </nav>
        <br>
    </header>

    <fieldset>
        <h2>Teacher Profile</h2>
        <p><strong>Teacher ID:</strong> <?php echo $teacherData['Teacher ID']; ?></p>
        <p><strong>Name:</strong> <?php echo $teacherData['First Name'] . ' ' . $teacherData['Last Name']; ?></p>
        <p><strong>Email:</strong> <?php echo $teacherData['Email']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $teacherData['Date of Birth']; ?></p>
        <p><strong>Phone:</strong> <?php echo $teacherData['Phone']; ?></p>
        <p><strong>Gender:</strong> <?php echo $teacherData['Gender']; ?></p>
    </fieldset>
</body>
</html>
