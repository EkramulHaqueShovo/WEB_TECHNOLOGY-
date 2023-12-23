<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['teacherId'])) {
        $errors[] = 'Teacher ID is required.';
    }

    if (empty($_POST['password'])) {
        $errors[] = 'Password is required.';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../Main/login.php");
        exit();
    }

    function validateLogin($teacherId, $password) {
        $con = new mysqli('localhost', 'root', '', 'teacher_database');
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $stmt = $con->prepare("SELECT * FROM information WHERE `Teacher ID` = ? AND Password = ?");
        $stmt->bind_param("ss", $teacherId, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $stmt->close();
            $con->close();
            return true;
        } else {
            $stmt->close();
            $con->close();
            return false;
        }
    }

    $teacherId = $_POST['teacherId'];
    $password = $_POST['password'];

    if (validateLogin($teacherId, $password)) {
        header('Location: ../Main/Home_page.php');
        exit;
    } else {
        $error = "Teacher ID or Password wrong...";
        $_SESSION['errors'] = [$error];
        header("Location: ../Main/login.php");
        exit;
    }
}
?>
