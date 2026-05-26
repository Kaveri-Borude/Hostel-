
        <?php
                include("../Storage/Middlewares/Middleware.php");
function validate($tokenNo,$name,$email,$moNo, $mQual,$fQual,$FavFood,$fMiddleName,$username,$hashedPsw,$gen){

                    $con = connect();
                    $query = "select * from authority";
                    $res = $con->query($query);
                    if($res->num_rows > 0){
                          $row = $res->fetch_assoc();
                          $Token = $row['AToken'];
                    
                          if($tokenNo == $Token){
                             
                                        try{  
                                          //  Create a Prepared Statement
                                                $stmt = $con->prepare("Insert into staff_registration (Name,Email,ContactNo,MQual,FQual,fatherMiddleName,FavFood,username, password,staffGender) values( ?,?,?,?,?,?,?,?,?,?) ");

                                          // Give parameters to stmt
                                                $stmt->bind_param("ssssssssss",$name,$email,$moNo,$mQual,$fQual,$fMiddleName,$FavFood,$username,$hashedPsw,$gen); 
                                                        
                                            // execute the Prepared Statement
                                                if($stmt->execute()){
                                                        echo "Staff Registered Successfully!!";
                                                }else{
                                                       throw new Exception($con->error);
                                                }
                                        }catch(Exception $e){                                        
                                                $Field = substr(strrchr($e->getMessage(),'.'),1);                                      
                                                echo "This '$Field already Exists !!";
                                        }   
                                
                        }else{
                                echo "Invalid Token!!";                                
                        }
                    }
                }

                if(isset($_POST['uName'])){
                        // Get Form Data
                         $uName = trim($_POST['uName']);                         

                        $email = trim($_POST['uEmail']);
                        $moNo = trim($_POST['uMoNo']);
                        $tokenNo = trim($_POST['tokenNo']);

                        $mQual = trim($_POST['mq']);
                        $fQual = trim($_POST['fq']);
                        $fMiddleName = trim($_POST['fmn']);
                        $FavFood = trim($_POST['ff']);

                        $username = trim($_POST['staffUserName']);
                        $psw = trim($_POST['staffPsw']);
                        $gen = trim($_POST['Gen']);


                        // validateInputs
                       
                               if(!validateContact($moNo)){
                                  echo "Contact Number is invalid!";
                                  return;
                               } 
                               if(!validateEmail($email)){
                                  echo "Email is invalid!";
                                  return;
                               } 
                               if(!validateString($fMiddleName)){
                                 echo "Father's Middlename is invalid!";
                                 return;
                               }
                               if(!validateString($uName)){
                                 echo "Your Name is invalid!";
                                 return;
                               }
                               if(!validateString($FavFood)){
                                 echo "Favourite Food is invalid!";
                                 return;
                               }    
                               $hashedPsw = hashedPassword($psw);   
                        //        echo $hashedPsw;
                                                    
                        validate($tokenNo,$uName,$email,$moNo, $mQual,$fQual,$FavFood,$fMiddleName, $username,$hashedPsw,$gen);

                }else{
                          echo "Error";
                }

?>