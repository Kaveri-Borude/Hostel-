            <?php
            include("../Storage/Middlewares/Middleware.php");
            
                if(isset($_POST["closeV"])){
                    $vNo = $_POST['closeV'];

                       date_default_timezone_set("Asia/Kolkata");
                       $outTime = date("h-i A");

                       $con = connect();
                            
                            $query = " update visitor_data 
                                        SET  vOutTime = '$outTime'
                                        where vNo = '$vNo' ";
                        
                            $res = $con->query($query);
                            if($res){
                                  echo "visitor Entry Closed!";
                                  header("Location: showAllVisitors.php");
                                  exit;
                            }else{
                                 echo "Visitor entry is not closed!";
                            } 

                    }                      

                




            ?>


