
     <?php
      include("../Storage/Middlewares/Middleware.php");
      
     

          if(isset($_POST['usr'])){
               //  Get Form Data
               $username = $_POST['usr'];
               $psw = $_POST['psw'];

             
   
               $con = connect();
             
                        //  create a prepared statement 
                           $stmt = $con->prepare("SELECT name,password FROM staff_registration where username = ?");
                        // give Parameters to Prepared Statement
                           $stmt->bind_param("s",$username);
                        // execute the prepared statement
                           $stmt->execute();

                        // get the result 
                           $result = $stmt->get_result(); 

                        // fetch the result into $res
                           if($row = $result->fetch_assoc()){

                               // get the result into variables
                                $name = $row['name'];
                                $storedHash = $row['password'];

                              if (password_verify($psw, $storedHash)) {
                                    $_SESSION["staffName"] = $name;                  
                                    echo "Login Successful!!";  
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
