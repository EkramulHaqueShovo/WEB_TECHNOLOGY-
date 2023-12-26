
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE STUDENTS</title>
    <link rel="stylesheet" href="../Css/style.css">
   
</head>
<body>
    <header>
       
        <h1>DELETE STUDENTS</h1>
        <nav>
           
            <a href="courses.php">Courses</a>
            <a href="Student.php">Student</a>
            <a href="Notice.php">Notice</a> 
            <a href="login.php">Logout</a>

          
        </nav><br>
    </header>
  
    <form action="../Controller/process_delete_student.php" method="post">
      <fieldset>
        <legend style="text-align: center">
            <h3> DELETE STUDENTS</h3>
        </legend><br>
        <h3>Student ID:</h3><br><br>
        <input type="text" id="student_id" name="student_id"required><br><br>
        <button type="submit">Delete Student</button><br><br>
     </fieldset>
 
   </form>
    
</body>
</html>
