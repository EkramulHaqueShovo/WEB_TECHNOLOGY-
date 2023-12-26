<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Courses</title>
    <link rel="stylesheet" href="../Css/style.css">
 
</head>
<body>
    <header>
        
        <h1>ADD COURSES</h1>
        <nav>
             <a href="Home_page.php">Home</a>
            
            <a href="courses.php">Courses</a>
            <a href="Student.php">Student</a>
            <a href="Notice.php">Notice</a>
            <a href="login.php">Logout</a>

          
        </nav><br>
    </header>
  

    <form action="../Controller/process_courses.php" method="post">
  
    <fieldset>
        <legend style="text-align: center">
            <h3> ADD COURSES</h3>
        </legend><br>
          
        <br><h3>Course Title:</h3><br>
        <input type="text" id="courseTitle" name="courseTitle" required><br><br>

        <h3>Course ID:</h3><br>
        <input type="text" id="courseid" name="courseid" required><br><br>

        <h3>Course Price:</h3><br>
        <input type="text" id="courseprice" name="courseprice" required><br><br>
 

        <h3>Course Duration:</h3><br>
        <input type="text" id="courseSchedule" name="courseSchedule" required><br><br>

        <h3>Course Description:<h3><br>
        <textarea id="courseDescription" name="courseDescription" rows="2" required></textarea><br><br>

        <button type="submit" value="Add Courses">Add Course</button><br><br>
        
        
     </fieldset>
  
   
   </form>
    
</body>
</html>