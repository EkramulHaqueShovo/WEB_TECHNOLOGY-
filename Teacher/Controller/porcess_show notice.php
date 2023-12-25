<?php
session_start();
include "../Model/mydb.php";

// Establish a database connection
$con = new mysqli('localhost', 'root', '', 'notification');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM notice";
$result = $con->query($sql);

// Check if there are any notices
if ($result->num_rows > 0) {
    // Display notices
    while ($row = $result->fetch_assoc()) {
        echo "User Type: " . $row["T_user"] . "<br>";
        echo "Notice: " . $row["notice"] . "<br><br>";
    }
} else {
    echo "No notices available.";
}

// Close the database connection
$con->close();
?>
