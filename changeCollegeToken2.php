<?php
    include("../Storage/Middlewares/Middleware.php");

    if(isset($_POST['prevTok'])){
         $prevTok = $_POST['prevTok'];
         $newTok1 = $_POST['newTok1'];
         $newTok2 = $_POST['newTok2'];



        if($newTok1 === $newTok2){  
            if($prevTok === $newTok1){
                 echo "New and Old Tokens Should not be the same";
            }else{
                 $con = connect();
                    $query = "select * from authority";
                    $res = $con->query($query);

                    if($res->num_rows > 0){
                        $result = $res->fetch_assoc();
                        $savedPsw = $result['AToken'];
                        $Ano = $result['Ano'];

                        if($savedPsw === $prevTok){
                            $query2 = "update authority 
                                        SET AToken =$newTok1";
                            $res2 = $con->query($query2);
                            if($res2){
                                echo "New Token Set Successfully";
                                //  header("Location: AuthorityHome.php");
                                //  exit;
                            }else{
                                echo "Error While Resetting the Token : ".$con->error;
                            }
                                        
                        }else{
                            echo "Previous Token is invalid";
                        }
                    }else{
                        echo $con->error;
                    }
            }           
              
        }else{
             echo "New Token are not Same";
        }

                
        
    }else{
         echo "Not Set";
    }
?>