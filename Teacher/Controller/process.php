<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
   
    $formdata = array(
        'T_first_name' => $_POST['T_first_name'],
        'T_last_name' => $_POST['T_last_name'],
        'T_email' => $_POST['T_email'],
        'T_dob' => $_POST['T_dob'],
        'introduce' => $_POST['introduce'],
        'qualification' => $_POST['qualification'],
        'institution' => $_POST['institution'],
        'year' => $_POST['year'],
        'skills' => $_POST['skills'],
        'T_Room' => $_POST['T_Room'],
        'T_phone' => $_POST['T_phone'],
        'T_gender' => $_POST['T_gender'],
        'T_terms' => isset($_POST['T_terms']) ? "Accepted" : "Not Accepted",
    );

    $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

    if (file_put_contents("../Data/data.json", $jsondata)) {
        header("Location: ../Main/profile_edit.php");
        exit();
    } else {
        echo 'No data saved';
    }
}
?>
