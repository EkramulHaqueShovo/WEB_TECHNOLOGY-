<?php include "../Controller/process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Teacher Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
</head>
<body>
    <header>
        <center>
        <h1>Teacher Profile</h1>
        <nav>
           <a href="Home_page.php">Home</a>
            <a href="profile_teacher.php">Back to Profile</a>
            <a href="courses.php">Courses</a>
            <a href="View_student.php">Student</a>
            <a href="Notice.php">Notice</a>
            <a href="login.php">Logout</a>
          
        </nav></center><br>
    </header>
    <center>
    <form action=" ../Controller/process.php" method="post">
    <fieldset>
        <legend style="text-align: center">
            <h3>EDIT PROFILE</h3>
        </legend><br>
        
           
          
            
            <h1>Personal Details</h1><br>
              <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="T_first_name" </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="T_last_name" required</td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" name="T_email" required></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="T_dob" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><select id="T_gender" name="T_gender">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                     <option value="other">Other</option>
                </select></tr>
                
              </table>
              
             <h1>Introduce Yourself</h1><br>
             <textarea name=" introduce" rows="4" cols="50" required></textarea><br><br>
             
             <h1>Accademic Qualification</h1><br>
             
             <table>
                  <tr>
                     <td><label for="qualification">Qualification:</label></td>
                     <td><input type="text" name="qualification" required></td>
                  </tr>
                  <tr>
                     <td><label for="institution">Institution:</label></td>
                     <td><input type="text" name="institution" required></td>
                 </tr>
                <tr>
                      <td><label for="year">Year of Graduation:</label></td>
                      <td><input type="text" name="year" required></td>
                </tr>
          
           </table>



             <h1>professional Skills</h1><br>
             <textarea name="skills" rows="4" cols="50" required></textarea><br><br>
        
             <h1>Contact Information</h1><br>
             <table>
                <tr>
                    <td>Office Room Number:</td>
                    <td><input type="text" name="T_Room" required></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="T_phone"></td>
                </tr>
                <tr>
                    <td>Terms and Conditions:</td>
                    <td><input type="checkbox" name="T_terms" required> I agree to the terms and conditions</td>
                </tr>
                <tr>
                     <td colspan="2"><br><input type="submit" value="Update Information"> <input type="reset" value="Reset"></td>
                </tr>

             </table>
       
        
     </fieldset>
       
        </form>
    
    </center>
    
    
</body>
</html>
