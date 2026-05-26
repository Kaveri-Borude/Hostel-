    <?php
         include("../Storage/Middlewares/Middleware.php");
    
        if(isset($_POST['tDate'])){
                
                $con = connect();

                $sId = $_POST['sId'];
                $sName = $_POST['sName'];
                $tName = $_POST['tName'];
                $tContact = $_POST['tContact'];
                $feeType = $_POST['feeType'];
                $feeDate = $_POST['tDate'];
                $tUTRNO = $_POST['tUTRNO'];
                $tAmount = $_POST['tAmount'];


                if(!validateContact($tContact)){
                     echo "Contact Number is invalid!";
                     return;
                }

                if(!validateString($sName)){
                     echo "Student Name is invalid!";
                     return;
                } 
                if(!validateString($tName)){
                     echo "Sender Name is invalid!";
                     return;
                } 
                
                if(!validateNumber($tAmount)){
                     echo "Visitor Relation is invalid!";
                     return;
                }
                if(!(strlen($tUTRNO) == 22 || (strlen($tUTRNO) >=12 and strlen($tUTRNO) <=16 ))){
                          echo " UTR Number Length is not Valid ";
               }
                

                    

                     $query1 = "select sId,sName from student_data where sId='$sId'";
                     $res = $con->query($query1); 

                     if($res->num_rows == 1){
                         $row=$res->fetch_assoc();


                         if(verifyString($sName,$row['sName'])){

                            try{
                                $query2 = "insert into fees_data (sId,feeType,feeDate,tContact,TName,UTRNO,feeAmount)
                                      values('$sId','$feeType', '$feeDate','$tContact', '$tName','$tUTRNO','$tAmount')";
                                $res = $con->query($query2);  

                                 if($res){
                                     echo "Fee Details Filled Successfully!!";   
                                 }else{
                                     throw new Exception($con->error);
                                 }                      
                            }catch(Exception $e){
                                $Field = substr(strrchr($e->getMessage(),'.'),1);                                      
                                echo "This '$Field already Exists !!";
                            } 

                         }else{
                             echo "Error : 'Student ID and Name are not Matched!!'";
                         }
                                                   
                     }else{
                          echo "Error : Student Id Does Not Exist!";   
                     }

                     
                            
            
        }


    ?>
