<?php
$json = file_get_contents('../Data/data.json');
$profile = json_decode($json, true);

?>

<html>
<html lang="en">
<head>
    <title>Teacher Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <form action ="profile_edit.php"  method="POST">
   
</head>
<body>

<header>
    <center>
    <h1>Teacher Profile</h1>
    <nav>
        <a href="Home_page.php">Home</a>
        <a href="profile_edit.php">Edit Profile</a> 
        <a href="courses.php">Courses</a>
        <a href="View_student.php">Student</a>
        <a href="Notice.php">Notice</a>
        <a href="login.php">Logout</a>

       
    </nav></center><br>
</header>


    
  
    <center>
        
    <fieldset>
        <legend style="text-align: center">
            <h3>PROFILE</h3>
        </legend>
        
        <img src="../Image/Teacher.png" alt="Teacher Image" width="300" height="200">
                
        <h1>Personal Details</h1>
        <h4>Name:</h4>
            <p><?php echo $profile['T_first_name'] . ' ' . $profile['T_last_name']; ?></p>
        <h4>Email:</h4>
             <p><?php echo $profile["T_email"]?></p>  
        <h4>Date Of Birth:</h4> 
              <p><?php echo $profile["T_dob"] ?></p> 
          <h4>Gender: </h4>    
               <p><?php echo $profile["T_gender"] ?></p>

        
        <h1>Introduce Yourself</h1>
        <p><?php echo $profile["introduce"]?></p>
        <h1>Accademic Qualification</h1>
        <p><?php echo "QUALIFICATION :" .$profile['qualification']; ?></p> 
        <p><?php echo "INSTITTION :".$profile['institution']; ?></p>
        <p><?php echo "YEAR :" .$profile['year']; ?></p>
        
        <h1>professional Skills</h1>
        <p><?php echo $profile['skills']; ?></p>
        <h1>Contact Information</h1>
        <p>Office Room Number: <?php echo $profile['T_Room']; ?></p>
        <p>Phone Number:  <?php echo $profile['T_phone']; ?></p>
                
        
     </fieldset>



    </center>


</body>
</html>
