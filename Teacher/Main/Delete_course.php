
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE COURSES</title>
   
</head>
<body>
    <header>
        <center>
        <h1>DELETE COURSES</h1>
        <nav>
            <a href="profile_teacher.php"> Profile</a>
            <a href="courses.php">Courses</a>
            <a href="View_student.php">Student</a>
            <a href="Notice.php">Notice</a> 
            <a href="login.php">Logout</a>

          
        </nav></center><br>
    </header>
    <center>
    <form action="../Controller/process_delete_courses.php" method="post">
      <fieldset>
        <legend style="text-align: center">
            <h3> DELETE COURSES</h3>
        </legend><br>
        <h3>Course ID:</h3><br><br>
        <input type="text" id="course_id" name="courseid" required><br><br>
        <button type="submit">Delete Course</button><br><br>
        
     </fieldset>
    </center>
   </form>
    
</body>
</html>
