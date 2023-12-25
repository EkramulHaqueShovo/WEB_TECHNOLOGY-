<?php
session_start();

if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
    echo '<div style="color: red;">';
    foreach ($_SESSION['errors'] as $error) {
        echo $error . '<br>';
    }
    echo '</div>';
    unset($_SESSION['errors']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../Css/style.css">

   
</head>

<body>
    
        <fieldset>
            <script src="../js/reg.js"></script>
            <legend style="text-align: center">
                <h3>Registration Panel</h3>
            </legend>
            <form name="registrationForm" action="../Controller/process_registration.php" method="post"
                onsubmit="return RegisrationvalidateForm()">
                
                <label for="T_first_name">First Name:</label><br>
                <input type="text" name="T_first_name">
                <div id="T_first_nameError" class="error"></div><br>

                <label for="T_last_name">Last Name:</label><br>
                <input type="text" name="T_last_name">
                <div id="T_last_nameError" class="error"></div><br>

                <label for="T_email">Email:</label><br>
                <input type="email" name="T_email">
                <div id="T_emailError" class="error"></div><br>

                <label for="T_dob">Date of Birth:</label><br>
                <input type="date" name="T_dob">
                <div id="T_dobError" class="error"></div><br>

                <label for="T_phone">Phone:</label><br>
                <input type="tel" name="T_phone">
                <div id="T_phoneError" class="error"></div><br>

                <label for="T_gender">Gender:</label>
                  <select name="T_gender">
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="other">Other</option>
                 </select>
                <div id="T_genderError" class="error"></div><br>

                <label for="T_id">Teacher ID:</label><br>
                <input type="text" name="T_id">
                <div id="T_idError" class="error"></div><br>

                <label for="T_password">Password:</label><br>
                <input type="password" name="T_password">
                <div id="T_passwordError" class="error"></div><br>

                <button type="submit" value="Register">Registration</button>
                <button><a href="login.php">Login</a></button>
            </form>
        </fieldset>
    
</body>
</html>
