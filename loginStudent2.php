
     <?php
      include("../Storage/Middlewares/Middleware.php");
   

          if(isset($_POST['sEmail'])){
               //  Get Form Data
               $email = $_POST['sEmail'];
               $psw = $_POST['sPsw'];

               
             
   
               $con = connect();
             
                        //  create a prepared statement 
                           $stmt = $con->prepare("SELECT sId,sName,sPsw FROM student_data where sEmail = ?");
                        // give Parameters to Prepared Statement
                           $stmt->bind_param("s",$email);
                        // execute the prepared statement
                           $stmt->execute();

                        // get the result 
                           $result = $stmt->get_result(); 

                        // fetch the result into $res
                           if($row = $result->fetch_assoc()){

                               // get the result into variables
                                $sId = $row['sId'];
                                $name = $row['sName'];
                                $storedHash = $row['sPsw'];

                              if (password_verify($psw, $storedHash)) {
                                    $_SESSION["sName"] = $name;
                                    $_SESSION['sId'] = $sId;              
                                    echo "StudentLoginSuccess Login Successful!!";  
                              }else{
                                    $_SESSION["error"] = "Invalid Username or Password" ;
                                    echo"Thrown Invalid Username or Password";
                              }  
                           }else{
                               echo " User not Found";
                           }                             
                       
               }else{
                      die("Connection failed: " . $con->connect_error);
               }                   
         
?>
