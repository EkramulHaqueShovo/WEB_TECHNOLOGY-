<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View student</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        
            <h1>View Student</h1>
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
            <legend style="text-align: center">
                <h3>View Student</h3>
            </legend><br>

            <?php
            include "../Model/mydb.php";
            
            $con = new mysqli('localhost', 'root', '', 'student_database');

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $result = $con->query("SELECT * FROM `student`");

            if ($result->num_rows > 0) {
                
                echo "<table border='1'>";
                echo "<tr><th>Student Name</th><th>Student Id</th><th>Student Institution</th><th>Email</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['studentname'] . "</td>";
                    echo "<td>" . $row['studentid'] . "</td>";
                    echo "<td>" . $row['studentinstitution'] . "</td>";
                    echo "<td>" . $row['studentemail'] . "</td>";
                     echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No courses found.";
            }

            $con->close();
            ?>

        </fieldset>

    
</body>
</html>
