<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        <h1>STUDENTS</h1>
        <nav>
            <a href="Home_page.php">Home</a>
            <a href="Student.php">Student</a>
            <a href="courses.php">Courses</a>
            <a href="Notice.php">Notice</a> 
            <a href="login.php">Logout</a>
        </nav>
    </header>

    <form action="../Controller/process_addstudent.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>STUDENTS</legend>

            <h3>NAME:</h3>
            <input type="text" id="student_name" name="student_name" required>

            <h3>ID:</h3>
            <input type="text" id="student_id" name="student_id" required>


            <h3>INSTITUTION:</h3>
            <input type="text" id="student_institution" name="student_institution" required>

            <h3>EMAIL:</h3>
            <input type="text" id="student_email" name="student_email" required>
            <h3>Gender:</h3>
            <select name="Student_gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <h3>PASSWORD:</h3>
            <input type="text" id="student_password" name="student_password" required><br><br>

            <button type="submit" value="Add Student">Add Student</button>
        </fieldset>
    </form>
</body>
</html>
