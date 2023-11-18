<?php session_start();
 include "../Controller/process.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notice</title>
</head>

    <body>
    <header>
        <center>
        <h1>CONTENT UPLOAD</h1>
        <nav>
             <a href="Home_page.php">Home</a>
            <a href="profile_teacher.php">Profile</a>
            <a href="courses.php">Courses</a>
            <a href="View_student.php">Student</a>
            <a href="login.php">Logout</a>
          
        </nav>
        </center><br>
    </header>
    <center>
        <fieldset>
          <legend>Notice</legend>
        <form action="../Controller/process_notice.php" method="post">
        
      <td>Select User:</td>
      <select id="T_user" name="T_user">
            <option value="Admin">Admin</option>
            <option value="Teacher">Teacher</option>
            <option value="Manager">Manager</option>
        </select><br>
        <textarea name="notice" id="notice" rows="4" cols="30" required></textarea><br>
        <button type="submit">Submit</button>
    
    </form>
        </fieldset>

        <fieldset>
            <legend>Previous Notice:</legend>
            <?php
$notices = json_decode(file_get_contents("../Data/notices.json"), true);

if (!empty($notices)) {
    foreach ($notices as $notice) {
        echo "<p><li>User:</h3> {$notice['T_user']}</p>";
         echo "<p>Notice: {$notice['notice']}</p>";
        
    }
} else {
    echo "No notices available.";
}
?>

          



        </fieldset>
    </center>
         
    </body>
</html>
