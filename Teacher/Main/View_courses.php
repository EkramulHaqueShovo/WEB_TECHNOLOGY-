
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
   
</head>
<body>
    <header>
        <center>
        <h1>View Courses</h1>
        <nav>
            <a href="Home_page.php">Home</a>
            <a href="profile_teacher.php"> Profile</a>
            <a href="courses.php">Courses</a>
            <a href="Notice.php">Notice</a> 
            <a href="View_student.php">Student</a>
            <a href="login.php">Logout</a>

          
        </nav></center><br>
    </header>
    <center>
    <form action="../Controller/process_courses.php" method="post">

    <fieldset>
   
    <legend style="text-align: center">
            <h3>View Courses</h3>
    </legend><br>
    
<?php

$jsonString = file_get_contents('../Data/Courses.json');
$Courses = json_decode($jsonString, true);




if (!empty($Courses)) {
    echo '<ul>';
    foreach ($Courses as $Course) {
        
        echo '<br><h2><li>',"Course Title: ". $Course['courseTitle'] . '</li></h2>';
        echo "Course ID: " . $Course['courseid'] . '</li><br>';
        echo "Course Price: " . $Course['courseprice'] . '</li><br>';

        echo "Course Schedule: " . $Course['courseSchedule'] . '</li><br>';
        echo "Course Description: " . $Course['courseDescription'] . '</li><br>';
    }
    echo '</ul><br>';
} else {
    echo '<p>No courses available.</p>';
}
?>

     </fieldset>

    </center>
   </form>
    
</body>
</html>