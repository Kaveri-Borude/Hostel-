    <?php
         include("../Storage/Middlewares/Middleware.php");
    
        if(isset($_POST['sId'])){
                
                $con = connect();

                $sId = $_POST['sId'];
                $sName = $_POST['sName'];
                $vName = $_POST['vName'];
                $vContact = $_POST['vContact'];
                $vAddress = $_POST['vAddress'];
                $vRel = $_POST['vRel'];

                if(!validateContact($vContact)){
                     echo "Contact Number is invalid!";
                     return;
                }
                if(!validateString($sName)){
                     echo "Student Name is invalid!";
                     return;
                } 
                if(!validateString($vName)){
                     echo "Visitor Name is invalid!";
                     return;
                } 
                if(!validateString($vRel)){
                     echo "Visitor Relation is invalid!";
                     return;
                } 

                    date_default_timezone_set("Asia/Kolkata");
                    $vDate = date("d-m-Y");
                    $vInTime = date("h-i A");

                     $query1 = "select sId,sName from student_data where sId='$sId'";
                     $res = $con->query($query1); 

                     if($res->num_rows == 1){
                         $row=$res->fetch_assoc();

                         if(verifyString($sName,$row['sName'])){

                                $query2 = "insert into visitor_data (sId,sName,vName,vContactNo,vAddress,vRelation,vDate,vInTime)
                                      values('$sId','$sName', '$vName','$vContact', '$vAddress','$vRel','$vDate', '$vInTime')";
                                $res = $con->query($query2);  

                                if($res){
                                    echo "Visitor information is Filled...!";                          
                                }else{
                                    echo "Visitor information is not Filled!"; 
                                } 
                         }else{
                             echo "Error : 'Student ID and Name are not Matched!!'";
                         }
                                                   
                     }else{
                          echo "Error : Student Id Does Not Exist!";   
                     }

                     
                            
            
        }


    ?>
