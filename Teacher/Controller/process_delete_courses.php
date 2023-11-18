<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $courseId = isset($_POST["courseid"]) ? $_POST["courseid"] : null;

    if ($courseId !== null) {
        $String = file_get_contents('../data/courses.json');
        $courses = json_decode($String, true);

        foreach ($courses as $key => $course) {
            if ($course['courseid'] == $courseId) {
                unset($courses[$key]);
                break;
            }
        }

        file_put_contents('../data/courses.json', json_encode(array_values($courses), JSON_PRETTY_PRINT));
        header("Location: ../Main/courses.php");
        exit();
    } else {
        header("Location: ../Main/Delete_course.php");
        exit();
    }
} 
?>
