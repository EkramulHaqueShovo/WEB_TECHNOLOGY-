<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
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
    } 

    if (empty($_POST['T_dob'])) {
        $errors[] = 'Date of Birth is required.';
    }

    if (empty($_POST['T_phone'])) {
        $errors[] = 'Phone is required.';
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
        header("Location:../Main/registration.php");
        exit();
    }

    
    $userdata = array(
        'T_first_name' => $_POST['T_first_name'],
        'T_last_name' => $_POST['T_last_name'],
        'T_email' => $_POST['T_email'],
        'T_dob' => $_POST['T_dob'],
        'T_phone' => $_POST['T_phone'],
        'T_gender' => $_POST['T_gender'],
        'T_id' => $_POST['T_id'],
        'T_password' => $_POST['T_password'] 
        
);

$oldData = json_decode(file_get_contents("../Data/userdata.json"), true);
$oldData[] = $userdata;
if (file_put_contents("../Data/userdata.json", json_encode($oldData, JSON_PRETTY_PRINT))) {
    header("Location: ../Main/login.php");
    exit;
} else {
    echo "Error!";
}
   
    
}
?>
