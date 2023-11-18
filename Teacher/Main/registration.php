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
</head>
<body>
   
    <center>
    <fieldset>
        <legend style="text-align: center">
            <h3>Registration Panel</h3>
        </legend>
        <form action="../Controller/process_registration.php" method="post">

        <label for="T_first_name">First Name:</label><br>
        <input type="text" name="T_first_name" ><br><br>

        <label for="T_last_name">Last Name:</label><br>
        <input type="text" name="T_last_name" ><br><br>

        <label for="T_email">Email:</label><br>
        <input type="email" name="T_email" ><br><br>

        <label for="T_dob">Date of Birth:</label><br>
        <input type="date" name="T_dob" ><br><br>

        <label for="T_phone">Phone:</label><br>
        <input type="tel" name="T_phone"><br><br>

        <label for="T_gender">Gender:</label>
        <select name="T_gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        <label for="T_id">Teacher ID::</label><br>
        <input type="text" name="T_id" ><br><br> 

        <label for ="T_password">Password:</label><br>
        <input type="password" name="T_password"><br><br>

        <input type="submit" value="Register">
        <button><a href="login.php">Login</a></button>
    </form>  
   </fieldset>
   </center>
    
</body>
</html>

        
      
     