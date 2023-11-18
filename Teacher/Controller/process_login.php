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
        $errors[] = 'password is required.';
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location:../Main/login.php");
        exit();
    }

  

function validateLogin($teacherId, $password) {
    $userData = json_decode(file_get_contents('../Data/userdata.json'), true);

    foreach ($userData as $user) {
        if ($user['T_id'] == $teacherId && $user['T_password'] == $password) {
           
            return true;
        }
    }
    return false;
}


    $teacherId = $_POST['teacherId'];
    $password = $_POST['password'];

    if (validateLogin($teacherId, $password)) {
        header('Location: ../Main/Home_page.php');
        exit;
    } else {
        
        $error = "Teacher ID or Password wrong...";
        header("Location:../Main/login.php");
        exit;
    }
}
?>
