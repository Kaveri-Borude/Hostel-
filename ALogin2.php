
     <?php
         include("../Storage/Middlewares/Middleware.php");
     

          if(isset($_POST['Ausr'])){
               //  Get Form Data
               $username = $_POST['Ausr'];
               $psw = $_POST['Apsw'];
               $AToken = $_POST['AToken'];

               $con = connect();
             
                        //  create a prepared statement
                           $stmt = $con->prepare("SELECT * FROM authority where AUserName = ? AND AToken = ? ");
                        // give Parameters to Prepared Statement
                           $stmt->bind_param("ss",$username,$AToken);
                        // execute the prepared statement
                           $stmt->execute();

                        // get the result 
                           $result = $stmt->get_result(); 

                        // fetch the result into $res
               if($row = $result->fetch_assoc()){

                      // get the result into variables
                       $name = $row['Aname'];
                       $storedHash = $row['APsw'];
                            
                      if (password_verify($psw, $storedHash)) {
                           $_SESSION["AName"] = $name;                  
                           echo "Authority Login Successful!!";  
                      }else{
                            $_SESSION["error"] = "Invalid Username or Password" ;
                               echo"Invalid Username or Password";
                      }  
               }else{
                      echo " User not Found";
               }                             
                       
            }else{
                die("Connection failed:" );
            }  
?>
