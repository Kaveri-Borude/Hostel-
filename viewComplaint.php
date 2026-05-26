  <?php
     include("../Storage/Middlewares/Middleware.php");
            if(isset($_SESSION['AName'])){
                include("../Storage/Navbars/navbarAuthority.php");
            }
            elseif(isset($_SESSION['staffName'])){
                include("../Storage/Navbars/navbarHome.php");
            }
  ?>
<head>
   <title>showAllVisitors.php</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <style>
     .viewComplaint {
    min-height: 80vh;
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border: 1px solid #ced4da;
}

#comment {
    
    background-color:#f1f8f6;
    border: 1px solid #ced4da;
    border-radius: 6px;
    padding: 15px;
    margin-top: 30px;
    min-height: 250px;
    width: 100%; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transform:translateY(-8px);
}  
#comment:hover{
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    transform:translateY(-8px);
}
h2, h5 {
    color: #343a40; 
    margin-bottom: 10px;
}

   </style>
</head>


  <div class="container col-10 offset-1 mt-5 viewComplaint" >
        <div class="search"> <h4 style="margin-top:5px; text-align: center" class="takeAttendence"> Student Complaint </h4><hr>

    <?php

        $con = connect();
        if(isset($_POST['viewC'])){
             $cId = $_POST['viewC'];
     
               $query1 = "SELECT * FROM complaint_data where cId = ".$cId;
               $result1 = $con->query($query1);
               $row = $result1->fetch_assoc();

               $sId = $row['sId'];

               $query2 = "SELECT sName, sCourse, sCYear,sContactNo from student_data where sId = ".$sId;
               $result2 = $con->query($query2);
               $res = $result2->fetch_assoc();

               echo "<br> <h4><strong>Student Name : </strong>".$res['sName']." </h4>";
               echo "<br> <h5><strong>Student Id : </strong>".$row['sId']." </h5>";

               echo " <h5> <strong>Course : </strong>".$res['sCYear'].$res['sCourse']." </h5>  ";
               echo "<br> <h5><strong>Student Contact Number : </strong>".$res['sContactNo']." </h5>";
               echo " <h5><strong> Date :</strong> ".$row['cDate']." <br><strong> Time : </strong> ".$row['cTime']." </h5>  ";
                echo '<hr><div class="search"> <h4 style="margin-top:5px; text-align: Left" class="takeAttendence"> Complaint </h4>';

               echo "<div id='comment' >  <h5> ".$row['cQuery']." </h5> </div>";

        }       

    ?>
    </div>
</div>





<?php
    include("../Storage/Footer/Footer1.html");
    ?>






