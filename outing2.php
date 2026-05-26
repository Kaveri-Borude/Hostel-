    <?php

    include("../Storage/Middlewares/Middleware.php");
         
        if(isset($_POST['sId'])){
                
                $con = connect();
                $sId = $_POST['sId'];
                $oReason = $_POST['oReason'];
                $oPlace = $_POST['oPlace'];           

                 date_default_timezone_set("Asia/Kolkata");
                    $oDate = date("d-m-Y");
                    $oTime = date("h-i A");

                
                    $query2 = "insert into leave_data (sId,outDate,outTime,place,reason)
                                values('$sId','$oDate','$oTime', '$oPlace','$oReason')";                                
                    $res = $con->query($query2);  

                    if($res){
                            echo "OutingForm success : Outing Form Filled Successfully!!";                          
                    }else{
                            echo "OutingForm Error : Could Not Fill The Outing Form!!"; 
                    }                        
                                                   
                    
        }else{
             echo "Error : Form is Not Submitted!";   
        } 

    ?>
