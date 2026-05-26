<?php
    include("../Storage/Middlewares/Middleware.php");

    if(isset($_POST['Tok'])){
         $Tok = $_POST['Tok'];
         $feeType = $_POST['feeType'];
         $newFee = $_POST['newFee'];

                 $con = connect();
                 $query = "select * from authority";
                 $res = $con->query($query);

                    if($res->num_rows > 0){
                        $result = $res->fetch_assoc();
                        $savedTok = $result['AToken'];
                        $Ano = $result['Ano'];

                        if($savedTok === $Tok){
                            if($feeType === "hostel"){
                                $query2 = "update authority 
                                        SET hostelFees =$newFee";
                            }elseif($feeType === "mess"){
                                 $query2 = "update authority 
                                        SET messFees =$newFee";
                            }
                            
                            $res2 = $con->query($query2);
                            if($res2){
                                echo "Fees Updated Successfully";
                            }else{
                                echo "Error While Resetting the Password : ".$con->error;
                            }
                                        
                        }else{
                            echo "College Token is invalid";
                        }
                    }else{
                        echo $con->error;
                    }            
        
    }else{
         echo "Not Set";
    }
?>