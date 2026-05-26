<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


    // connection
    function connect(){
        $con = new mysqli("localhost","root","","hostel",3308);
            if(!$con->connect_error){
                return $con;
            }else{
                die("Error : ".$con->error);
                return;
            }
    }

    // validateContact
        function validateContact($contact){
             if(preg_match("/^[6-9][0-9]{9}$/",$contact)){
                 return true;
             }else{
                 return false;
             }
        }
        
    // ValidateEmail
        function validateEmail($email){
             if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                  return true;   //email is invalid
             }else{
                  return false;    //email is valid
             }                
        }

    // validateString
        function validateString($str){
            if (preg_match("/^[a-zA-Z ]*$/",$str)){ 
                return true;
            }else{
                return false;
            }
        }

    // hashedPassword
        function hashedPassword($psw){
             $hashedPassword = password_hash($psw,PASSWORD_DEFAULT);
             return $hashedPassword;
        }
    
    // verifyPassword
        function verifyPassword($psw,$hPsw){
            if (password_verify($psw, $hPsw)){ 
                return true;
            }else{
                 return false;
            }
        }


    // verifyString
        function verifyString($entered,$stored){
            //   convert both strings into array
            $enteredArray = explode(" ",strtolower(trim($entered)));
            $storedArray = explode(" ",strtolower(trim($stored)));
            //  sort the arrays
            sort($enteredArray);
            sort($storedArray);

            if($enteredArray == $storedArray){
                 return true;
            }else{
                 return false;
            }

        }

    // validate Number
        function validateNumber($num){
             if(filter_var($num, FILTER_VALIDATE_INT)){
                 return true;
             }else{
                 return true;
             }
             
        }

        function takeAttendance(){
              $q1 = "select sId,sName from student_data";
          $res1 = $con->query($q1);
          if($res1->num_rows > 0){
               while($row = $res1->fetch_assoc()){
                       echo "<br> id = ".$row['sId']."    name = ".$row['sName'];  
                       $q2 = " insert into takeattendance (sId) values(".$row['sId'].")";
                       $res2 = $con->query($q2);
                       if($res2){
                         echo "done";
                       }else{
                         echo $con->error;
                       }
               }
          }
        }
   

?>