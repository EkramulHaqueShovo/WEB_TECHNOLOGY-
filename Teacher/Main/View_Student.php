<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW STUDENT</title>
    <link rel="stylesheet" href="../Css/style.css">
    
</head>
<body>
    <header>
        <center><h1>STUDENTS</h1>
        <nav>
            <a href="Home_page.php">Home</a>
           
            <a href="courses.php">Courses</a>
            <a href="Notice.php">Notice</a> 
            <a href="login.php">Logout</a>
        </nav></center>
    </header>

    <center>
        <fieldset>
        <legend>STUDENTS</legend>

        <?php
        $json_data = file_get_contents('../Data/student.json');
        $data = json_decode($json_data, true);

        if ($data !== null) {
            foreach ($data as $std) {
                echo "<h4><li>Student Name: {$std['cName']}</li></h4>";
                echo "Student ID: ".$std['studentid']. '<br>';
                echo "Course Name:" .$std['coursename']. '<br>';
                echo "Course Section:" .$std['coursesection']. '<br>';
                echo "Course Schedule:" .$std['courseSchedule']. '<br>';
            }
        } else {
            echo "No student available!";
        }
        ?>
    </fieldset>
</center>
</body>
</html>
