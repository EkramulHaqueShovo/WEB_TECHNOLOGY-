<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   

    $Notice = array(
        'notice' => $_POST['notice'],
        'T_user' =>$_POST['T_user']
    );
    $notices = json_decode(file_get_contents("../Data/notices.json"), true);

    $notices[] = $Notice;

    if (file_put_contents("../Data/notices.json", json_encode($notices, JSON_PRETTY_PRINT))) {
        header("Location: ../Main/Notice.php");
        exit;
    } else {
        echo "Error!";
    }
}
?>
