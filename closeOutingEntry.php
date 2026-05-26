            <?php
                include("../Storage/Middlewares/Middleware.php");

                if(isset($_POST["closeO"])){

                    try{
                         $leaveNo = $_POST['closeO'];

                        date_default_timezone_set("Asia/Kolkata");
                        $inDate = date("d-m-Y");
                        $inTime = date("h-i A");

                        $con = connect();
                            
                            $query = " update leave_data 
                                        SET  inDate = '$inDate',
                                             inTime = '$inTime'
                                        where leaveNo = '$leaveNo' ";
                        
                            $res = $con->query($query);
                            if($res){
                                  echo "Outing Entry Closed!";
                                  header("Location: showAllOutings.php");
                                  exit;
                            }else{
                                 echo "Outing entry is not closed!".$con->error;
                            } 

                    }catch(Exception $err){
                         echo "Error : ".$err->getMessage();
                    }

                      
                }
            ?>


