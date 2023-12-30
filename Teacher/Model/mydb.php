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
function getTeacherprofile(){
    return "SELECT * FROM information WHERE `Teacher ID` = ?";
}
function getnotice(){
 return " INSERT INTO notice (T_user, notice) VALUES (?, ?)";
}
function getshownotice(){
    return "SELECT * FROM notice";
}
function getaddstudent(){
    return "INSERT INTO `student`(studentname, studentid, studentinstitution, studentemail, studentgender, studentpassword) VALUES (?, ?, ?, ?, ?, ?)";

}
function getDeletestudentQuery(){
    return "DELETE FROM `student` WHERE studentid = ?";
}
function getlogin(){
    return"SELECT * FROM information WHERE `Teacher ID` = ? AND Password = ?";
}
function getviewcourses(){
    return "SELECT * FROM courses";
}
function getCourseById(){
    return "SELECT * FROM courses WHERE course_id = ?";
}



?>
