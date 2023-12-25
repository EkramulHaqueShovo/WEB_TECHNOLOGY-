
<?php
include "../Model/mydb.php";
$teacherId = $_SESSION['teacherId'];
$con = new mysqli('localhost', 'root', '', 'teacher_database');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$stmt = $con->prepare(getTeacherprofile());
$stmt->bind_param("s", $teacherId);
$stmt->execute();
$result = $stmt->get_result();
$teacherData = $result->fetch_assoc();
$stmt->close();
$con->close();
?>
