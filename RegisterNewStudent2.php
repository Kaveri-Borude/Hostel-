   
   <?php
 
  include("../Storage/Middlewares/Middleware.php");

        function addStudent($con){
            $sname = $_POST['sname'];
            $sphoto = file_get_contents($_FILES['sphoto']['tmp_name']);
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
            $sPSw = $_POST['sPsw'];

            $hPsw = hashedPassword($sPSw);

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

            $query = "Select * from student_data";
            $res = $con->query($query);
           
                try{                     
                    $q2 = $con->prepare("insert into student_data (sName,sPhoto,sCourse,sCYear,sContactNo,sEmail ,sDOB,sAddress,sFatherName,sMotherName,sFatherContact,sMotherContact,sFatherOccupation,sMotherOccupation,sPsw) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

                    $q2->bind_param("sbsssssssssssss",$sname,$sphoto,$scourse,$scyear,$scontactno,$semail,$sdob,$saddress,$sfname,$smname,$sfcontact,$smcontact,$sfoccupation,$smoccupation,$hPsw);

                    $q2->send_long_data(1,$sphoto);
                    $result=$q2->execute();

                    if($result){
                        echo "<h3>RegisterNewStudent Successfully!</h3> \n keep Your Username and Password Rememberd which will be required for login everytime!!";
                    }else{
                        throw new Exception($con->error);
                    }
                }catch(Exception $e){                                        
                     $Field = substr(strrchr($e->getMessage(),'.'),1);                                      
                     echo "This '$Field already Exists !!";                   
                }

        }


        
        if(isset($_POST['sname'])){
            $con = connect();
            addStudent($con);                         
            
        }else{
            echo "Form is not submitted!!";
        }
    ?>