<?php

function getInsertCourseQuery(){
    return "INSERT INTO courses (course_Title, course_id, course_price, course_Description, course_Schedule) VALUES (?, ?, ?, ?, ?)";
}
function getDeleteCourseQuery(){
    return "DELETE FROM courses WHERE course_id = ?";
}

function getTeacherInformation(){
    return "INSERT INTO information (`First Name`, `Last Name`, Email, `Date of Birth`, Phone, Gender, `Teacher ID`, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
}

?>
