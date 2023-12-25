<?php
session_start();
include "../Model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["T_user"];
    $noticeText = $_POST["notice"];

    $con = new mysqli('localhost', 'root', '', 'notification');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare(getnotice());

    if ($stmt) {
        $stmt->bind_param("ss", $userType, $noticeText);

        if ($stmt->execute()) {
            $_SESSION["success_message"] = "Notice submitted successfully.";
        } else {
            $_SESSION["error_message"] = "Error executing the query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION["error_message"] = "Error preparing the statement: " . $con->error;
    }

    $con->close();

    header("Location: ../Main/Notice.php");
    exit();
}
?>
