<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $oldCourses = json_decode(file_get_contents("../Data/Courses.json"), true);

    $newCourse = array(
        'courseTitle' => $_POST['courseTitle'],
        'courseid' => $_POST['courseid'],
        'courseprice'=>$_POST['courseprice'],
        'courseDescription' => $_POST['courseDescription'],
        'courseSchedule' => $_POST['courseSchedule']
    );

    $oldCourses[] = $newCourse;

    $data = json_encode($oldCourses, JSON_PRETTY_PRINT);

    if (file_put_contents("../Data/Courses.json", $data)) {
        header("Location: ../Main/courses.php");
        exit();
    } else {
        echo 'No data saved';
        header("Location: ../Main/course_creation.php");
        exit();
    }
}
?>
