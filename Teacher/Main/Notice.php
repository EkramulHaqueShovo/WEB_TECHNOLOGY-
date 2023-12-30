<?php
include "../Model/mydb.php";
$con = new mysqli('localhost', 'root', '', 'notification');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql =  getshownotice();

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notice</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>

<body>
    <header>
       
            <h1>Notices</h1>
            <nav>
                <a href="Home_page.php">Home</a>
                <a href="courses.php">Courses</a>
               
                <a href="Student.php">Student</a>
                <a href="login.php">Logout</a>
            </nav>
        <br>
    </header>

        <fieldset>
            <legend>Notice</legend>
            <form action="../Controller/process_notice.php" method="post">
                <?php
                if (isset($_SESSION["success_message"])) {
                    echo "<p class='success-message'>{$_SESSION["success_message"]}</p>";
                    unset($_SESSION["success_message"]);
                }
                ?>

                <label for="T_user">Select User:</label>
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
            <legend>Previous Notices:</legend>
            <?php
             if ($result->num_rows > 0) {
               $notices = $result->fetch_all(MYSQLI_ASSOC);
               $lastFourNotices = array_slice($notices, -5); 

    
              $lastFourNotices = array_reverse($lastFourNotices);

            foreach ($lastFourNotices as $row) {
              echo "<p>User: " . $row["T_user"] . " - Notice: " . $row["notice"] . "</p>"; }
            }
             else {
                   echo "<p>No previous notices available.</p>";
             }
            ?>


        </fieldset>
   
</body>
</html>