    <?php
 session_start();
         include("../Storage/Middlewares/Middleware.php");
    // echo "Hello";
        if(isset($_POST['cComment'])){
                  
                $con = connect();
                $sId = $_SESSION['sId'];
                $cComment = $_POST['cComment'];

                
                    date_default_timezone_set("Asia/Kolkata");
                    $cDate = date("d-m-Y");
                    $cTime = date("h-i A");

                    // echo "Comment : ".$cComment."\nSid : ".$sId."\n Time = ".$cTime."\n Date = ".$cDate;

                        $query2 = "insert into complaint_data (sId,cDate,cTime,cQuery)
                                   values('$sId','$cDate','$cTime','$cComment')";
                        $res = $con->query($query2);  
                        if($res){
                            echo "Query Added Successfully!";                          
                        }else{
                            echo "Could Not Add Query!!!".$con->error; 
                        }                             
            
        }else{
             echo "Form is not Submitted!!";
        }


    ?>
