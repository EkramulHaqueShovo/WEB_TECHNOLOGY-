<?php

session_start();

if (!isset($_SESSION["teacherId"])) {
    
    header("Location: ../Main/login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>DESKBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/style.css">
  
  
</head>
<header>
    <h2>DESKBOARD</h2>
    <?php echo "Welcome, " . $_SESSION['teacherId'] ;
    ?>
    

</header>
<body>
<fieldset>
    
        <nav>
          <a href="Teacher_Profile.php">Profile</a>
            <a href="courses.php">Courses</a>
            <a href="View_student.php">Student</a>
            <a href="Notice.php">Notice</a>
            <a href="login.php">Logout</a>
          
        </nav><br>

</fieldset>
</body>
</html>