<?php
    include("../Storage/Middlewares/Middleware.php");

    if(isset($_POST['Token'])){
         $Token = $_POST['Token'];
         $newPassord1 = $_POST['newPassord1'];
         $newPassord2 = $_POST['newPassord2'];
         $username = $_POST['username'];


        if($newPassord1 === $newPassord2){  

                 $con = connect();
                    $query = "select * from authority where AUserName = '$username'";
                    $res = $con->query($query);

                    if($res->num_rows > 0){
                        $result = $res->fetch_assoc();
                        $savedToken = $result['AToken'];
                        $Ano = $result['Ano'];

                        if($savedToken === $Token){
                            $hashedNewPassword = hashedPassword($newPassord1);

                            $query2 = "update authority 
                                        SET APsw ='$hashedNewPassword'";
                            $res2 = $con->query($query2);
                            if($res2){
                                echo "Password For Authority is Updated Successfully";
                                //  header("Location: AuthorityHome.php");
                                //  exit;
                            }else{
                                echo "Error While Resetting the Password : ".$con->error;
                            }
                                        
                        }else{
                            echo "College Token is invalid";
                        }
                    }else{
                        echo "User Does Not Exist";
                    }
            }           
              
        }else{
             echo "New Token are not Same";
        }

                
        
  
?>