
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        <h1>View Courses</h1>
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
            <h3>View Courses</h3>
        </legend><br>

        <?php
        include "../Model/mydb.php";
        
        $con = new mysqli('localhost', 'root', '', 'course_database');

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $result = $con->query( getviewcourses());

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Course Title</th><th>Course ID</th><th>Course Price</th><th>Course Description</th><th>Course Duration</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Course_Title'] . "</td>";
                echo "<td>" . $row['Course_ID'] . "</td>";
                echo "<td>" . $row['Course_Price'] . "</td>";
                echo "<td>" . $row['Course_Description'] . "</td>";
                echo "<td>" . $row['Course_Schedule'] . "</td>";
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
