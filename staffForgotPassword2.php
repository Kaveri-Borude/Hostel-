<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff forgot password .php</title>
</head>
<body>
    <?php
     include "../Error_Success_Boilerplate.html";
  
    if(isset($_POST['submit'])){
          $mono = $_POST['mono'];
          $mqual = $_POST['mqual'];
          $fqual = $_POST['fqual'];
          $FMName = $_POST['FMName'];
          $FavFood = $_POST['FavFood'];

          $con = new mysqli("localhost","root","","hostel",3308);
          if($con){
               $query = " select * from staff_registration where ContactNo ='$mono' AND MQual='$mqual' AND FQual = '$fqual' AND fatherMiddleName = '$FMName' AND FavFood = '$FavFood' ";

               $result = $con->query($query);

               if($result && $result->num_rows > 0){   
                        echo "<div id='dialogBoxSuccess'> You can Reset Your Password!!</div>";                        
                         include "staffResetPassword.html";
               }else{
                    echo "<div id='dialogBoxErr'>You Cannot Reset Your Password</div>";                        
                         include "staffForgotPassword.html";
               }
          }
    }

?>
</body>
</html>
