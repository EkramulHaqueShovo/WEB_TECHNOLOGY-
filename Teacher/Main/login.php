<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PANEL</title>
    <link rel="stylesheet" href="../Css/style.css">
  
    <script src="../js/reg.js"></script>
</head>
<script>

</script>
<body>


<fieldset>
    <legend style="text-align: center">
        <h3>LOGIN PANEL</h3>
    </legend>
    <form name="loginForm" action="../Controller/process_login.php" method="post" onsubmit="return loginFormvalid()">
        <label for="teacherId">Username:</label><br><br>
        <input type="text" id="teacherId" name="teacherId">
        <div id="T_idError1" class="error"></div><br><br>

        <label for="password">Password:</label><br><br>
        <input type="password" id="password" name="password">
        <div id="T_passError1" class="error"></div><br><br>

        <button type="submit">Login</button>
        <button><a href="registration.php">Registration</a></button>
    </form>
</fieldset>

</body>
</html>
