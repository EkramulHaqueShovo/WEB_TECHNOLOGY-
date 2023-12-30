<?php
include "../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = new mysqli('localhost', 'root', '', 'course_database');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $courseTitle = $_POST['courseTitle'];
    $courseid = $_POST['courseid'];
    $courseprice = $_POST['courseprice'];
    $courseDescription = $_POST['courseDescription'];
    $courseSchedule = $_POST['courseSchedule'];

    $stmt = $con->prepare("UPDATE courses SET Course_Title = ?, Course_Price = ?, Course_Description = ?, Course_Schedule = ? WHERE Course_ID = ?");

    if ($stmt) {
        $stmt->bind_param("sdsis", $courseTitle, $courseprice, $courseDescription, $courseSchedule, $courseid);

        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: ../Main/courses.php");
            exit();
        } else {
            echo "Error executing the update query: " . $stmt->error;
            exit();
        }
    } else {
        echo "Error preparing the update statement: " . $con->error;
        exit();
    }
}
?>
