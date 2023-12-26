
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../Model/mydb.php";


$con = new mysqli('localhost', 'root', '', 'teacher_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['T_first_name'])) {
        $errors[] = 'First Name is required.';
    }

    if (empty($_POST['T_last_name'])) {
        $errors[] = 'Last Name is required.';
    }

    if (empty($_POST['T_email'])) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($_POST['T_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    if (empty($_POST['T_dob'])) {
        $errors[] = 'Date of Birth is required.';
    }

    if (empty($_POST['T_phone'])) {
        $errors[] = 'Phone is required.';
    } elseif (!preg_match('/^\d{11}$/', $_POST['T_phone'])) {
        $errors[] = 'Invalid phone number format.';
    }

    if (empty($_POST['T_gender'])) {
        $errors[] = 'Gender is required.';
    }

    if (empty($_POST['T_id'])) {
        $errors[] = 'ID is required.';
    }

    if (empty($_POST['T_password'])) {
        $errors[] = 'Password is required.';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../Main/registration.php");
        exit();
    }
   

    
    $stmt = $con->prepare(getTeacherInformation());

    if ($stmt) {
        $stmt->bind_param("ssssssss", $_POST['T_first_name'], $_POST['T_last_name'], $_POST['T_email'], $_POST['T_dob'], $_POST['T_phone'], $_POST['T_gender'], $_POST['T_id'], $_POST['T_password']);

        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: ../Main/login.php");
            exit();
        } else {
            $errors[] = "Error executing the query: " . $stmt->error;
        }
    } else {
        $errors[] = "Error preparing the statement: " . $con->error;
    }

    $_SESSION['errors'] = $errors;
    header("Location: ../Main/registration.php");
    exit();
}
?>