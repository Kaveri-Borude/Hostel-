<?php
include("../Storage/Middlewares/Middleware.php"); 

    if(isset($_POST['sname'])){
         $sId = $_POST['sId'];
            $sname = $_POST['sname'];          
            $scourse = $_POST['scourse'];
            $scyear = $_POST['scyear'];
            $scontactno = $_POST['scontactno'];
            $semail = $_POST['semail'];
            $saddress = $_POST['saddress'];
            $sdob = $_POST['sdob'];
            $sfname = $_POST['sfname'];
            $smname = $_POST['smname'];
            $sfcontact = $_POST['sfcontact'];
            $smcontact = $_POST['smcontact'];
            $sfoccupation = $_POST['sfoccupation'];
            $smoccupation = $_POST['smoccupation'];
            // $sPSw = $_POST['sPsw'];

            $sRNo = $_POST['sRNo'];
            $sAdm = $_POST['sAdm'];


            // Validate Contacts
            if(!validateContact($scontactno)){
                echo "Student Contact Number is not Valid!!";
                  return;
            }
            if(!validateContact($sfcontact)){
                echo "Student Father Contact Number is not Valid!!";
                  return;
            }
            if(!validateContact($smcontact)){
                echo "Student Mother Contact Number is not Valid!!";
                  return;
            }
          // Validate Emails
            if(!validateEmail($semail)){
                echo "Student Email is not Valid!!";
                  return;
            }
          // Validate Names
            if(!validateString($sname)){
                echo "Student Name is not Valid!!";
                  return;
            }
            if(!validateString($smname)){
                echo "Student Mother Name is not Valid!!";
                  return;
            }
            if(!validateString($sfname)){
                echo "Student Father Name is not Valid!!";
                  return;
            }
            // Validate Occupation
            if(!validateString($sfoccupation)){
                echo "Student Father Occupation is not Valid!!";
                  return;
            }
             if(!validateString($smoccupation)){
                echo "Student Father Occupation is not Valid!!";
                  return;
            }

           

             $con = connect();
            $query = " UPDATE student_data 
                        SET sName = '$sname' ,
                            sCourse = '$scourse' ,
                            sCYear = '$scyear' ,
                            sContactNo = '$scontactno' ,
                            sEmail = '$semail' ,
                            sDOB = '$sdob' ,
                            sAddress = '$saddress' ,
                            sFatherName = '$sfname' ,
                            sMotherName =' $smname' ,
                            sFatherContact = '$sfcontact' ,
                            sMotherContact = '$smcontact' ,
                            sFatherOccupation = '$sfoccupation' ,
                            sMotherOccupation = '$smoccupation' ,
                            sAdmissionDate = '$sAdm' ,
                            sRoomNumber = '$sRNo' 

                            Where sId = '$sId'                       
                         ";

         
           
          if($_FILES['sphoto']['tmp_name'] != null){
             $sphoto = file_get_contents($_FILES['sphoto']['tmp_name']);
                    $Query2 = $con->prepare("UPDATE student_data
                        SET sPhoto = ?
                        where sId = $sId ");
            $Query2->bind_param("b",$null);
            $Query2->send_long_data(0,$sphoto);
            $result2=$Query2->execute();
          }
            




          //  
            $result = $con->query($query);

            if($result ){
                 echo "Student Updated Successfully";
            }
            else{
                 echo "Could Not Update Student Information !!".$con->error;
            }
   
    }
?>

