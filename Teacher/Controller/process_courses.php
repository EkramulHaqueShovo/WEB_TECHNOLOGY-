<?php
include "../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection
    $con = new mysqli('localhost', 'root', '', 'course_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare data
    $courseTitle = $_POST['courseTitle'];
    $courseid = $_POST['courseid'];
    $courseprice = $_POST['courseprice'];
    $courseDescription = $_POST['courseDescription'];
    $courseSchedule = $_POST['courseSchedule'];

    // Insert data into the database using prepared statements
    $stmt = $con->prepare(getInsertCourseQuery());

    if ($stmt) {
        $stmt->bind_param("ssdss", $courseTitle, $courseid, $courseprice, $courseDescription, $courseSchedule);

        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: ../Main/courses.php");
            exit();
        } else {
            echo "Error executing the query: " . $stmt->error;
        }
    } else {
        echo "Error preparing the statement: " . $con->error;
    }
}
?>
