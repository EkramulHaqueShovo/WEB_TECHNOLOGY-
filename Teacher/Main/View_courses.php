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
            </nav>
        </center><br>
    </header>
    <center>
        <form action="../Controller/process_courses.php" method="post">
            <fieldset>
                <legend style="text-align: center">
                    <h3>View Courses</h3>
                </legend><br>

                <?php
                // Database connection
                $con = new mysqli('localhost', 'root', '', 'course_database');
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Fetch courses from the database
                $result = $con->query("SELECT * FROM courses");

                if ($result->num_rows > 0) {
                    echo '<ul>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<br><h2><li>', "Course Title: " . $row['course_Title'] . '</li></h2>';
                        echo "Course ID: " . $row['course_id'] . '</li><br>';
                        echo "Course Price: " . $row['course_price'] . '</li><br>';
                        echo "Course Schedule: " . $row['course_Schedule'] . '</li><br>';
                        echo "Course Description: " . $row['course_Description'] . '</li><br>';
                    }
                    echo '</ul><br>';
                } else {
                    echo '<p>No courses available.</p>';
                }

                $con->close();
                ?>
            </fieldset>
        </form>
    </center>
</body>
</html>
