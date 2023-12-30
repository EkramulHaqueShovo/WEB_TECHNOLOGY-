<?php
include "../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli('localhost', 'root', '', 'course_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $courseId = isset($_POST["course_id"]) ? $_POST["course_id"] : null;

    if ($courseId !== null) {
        $stmt = $con->prepare(getCourseById());

        if ($stmt) {
            $stmt->bind_param("s", $courseId);

            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $courseData = $result->fetch_assoc();
                    $stmt->close();
                } else {
                    echo "No results found for Course ID: $courseId";
                    exit();
                }
            } else {
                echo "Error executing the query: " . $stmt->error;
                exit();
            }
        } else {
            echo "Error preparing the statement: " . $con->error;
            exit();
        }
    } else {
        echo "Invalid Course ID";
        exit();
    }

    $con->close(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Information</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        <h1>COURSE INFORMATION</h1>
        <nav>
            <a href="courses.php">Courses</a>
        </nav><br>
    </header>

    <form action="../Controller/process_update_courses.php" method="post">
        <fieldset>
            <legend style="text-align: center">
                <h3>COURSE INFORMATION</h3>
            </legend><br>
            <label for="courseTitle">Course Title:</label><br>
            <input type="text" id="courseTitle" name="courseTitle" value="<?= isset($courseData['course_Title']) ? htmlspecialchars($courseData['course_Title']) : '' ?>" required><br><br>

            <label for="courseid">Course ID:</label><br>
            <input type="text" id="courseid" name="courseid" value="<?= isset($courseData['course_id']) ? htmlspecialchars($courseData['course_id']) : '' ?>" required><br><br>

            <label for="courseprice">Course Price:</label><br>
            <input type="text" id="courseprice" name="courseprice" value="<?= isset($courseData['course_price']) ? htmlspecialchars($courseData['course_price']) : '' ?>" required><br><br>

            <label for="courseSchedule">Course Duration:</label><br>
            <input type="text" id="courseSchedule" name="courseSchedule" value="<?= isset($courseData['course_Schedule']) ? htmlspecialchars($courseData['course_Schedule']) : '' ?>" required><br><br>

            <label for="courseDescription">Course Description:</label><br>
            <textarea id="courseDescription" name="courseDescription" rows="2" required><?= isset($courseData['course_Description']) ? htmlspecialchars($courseData['course_Description']) : '' ?></textarea><br><br>

            <button type="submit">Update Course</button><br><br>
        </fieldset>
    </form>
</body>
</html>
