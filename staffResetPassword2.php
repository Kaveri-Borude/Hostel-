<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staffResetPassword.php</title>
</head>
<body>
  <?php
   include "../Error_Success_Boilerplate.html";
    
   if(isset($_POST['submit'])){
          $username = $_POST['username'];
          $npsw = $_POST['npsw'];

           $con = new mysqli("localhost","root","","hostel",3308);
          if($con){
               $query = "update staff_registration set password = '$npsw' where username = '$username'";
               $result = $con->query($query);

               if($result){
                    if($con->affected_rows > 0){
                        echo "<div id='dialogBoxSuccess'> Password Changed Successfully !! </div>";                        
                         include "loginStaff.html";
                    }elseif($con->affected_rows == 0){
                         echo "<div id='dialogBoxErr'> Invalid Username </div>";                        
                         include "staffResetPassword.html";
                    }                   
               }
          }else{
              echo "<div id='dialogBoxErr'>Not connected !!!</div>";         
          }
    }
          

?>
    
</body>
</html>
