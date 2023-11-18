<?php
    session_start();
    include '../Controller/process_login.php';
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
    <title>LOGIN PANEL</title>
</head>
<body>

<center>
    <form action="../Controller/process_login.php" method="post">
    <fieldset>
        <legend style="text-align: center">
            <h3>LOGIN PANEL</h3>
        </legend>
  


    
        <label for="teacherId">Username:</label><br><br>
        <input type="text" id="teacherId" name="teacherId"><br><br>

        <label for="password">Password:</label><br><br>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Login</button>
        <button><a href="registration.php">Registration</a></button>
        
      
    </fieldset>
       
    </form>
    
</center>   
</body>
</html>



