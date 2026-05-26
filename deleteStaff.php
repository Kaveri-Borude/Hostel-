<?php
include("../Storage/Middlewares/Middleware.php");
    if(isset($_POST['deleteStaff'])){
     
         $staff_id = $_POST['deleteStaff'];
         echo  "Deleting".$staff_id;

         $con  = connect();
         $query = " Delete From staff_registration where staff_id =$staff_id";
         $res = $con->query($query);
         if($res){
              header("Location: showStaffDetails.php");
         }else{
             echo "Staff Deleted Successfully";
         }

    }else{
         echo "Not Set";
    }
?>