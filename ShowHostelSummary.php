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
   <title>Authority Home.php</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>
</head>
  
     <?php      
    
     
      $con = connect();

             $que1 = "Select count(*) As Total from student_data";
             $res1 = $con->query($que1);
             $Total = $res1->fetch_assoc();

             $que1 = "Select count(*) As Total from student_data  Where SCourse ='BCA'";
             $res1 = $con->query($que1);
             $BCA = $res1->fetch_assoc();

             $que1 = "Select count(*) As Total from student_data  Where SCourse ='BSC'";
             $res1 = $con->query($que1);
             $BSC = $res1->fetch_assoc();
             
             $que1 = "Select count(*) As Total from student_data  Where SCYear ='FY'";
             $res1 = $con->query($que1);
             $FY = $res1->fetch_assoc();

             $que1 = "Select count(*) As Total from student_data  Where SCYear ='SY'";
             $res1 = $con->query($que1);
             $SY = $res1->fetch_assoc();

             $que1 = "Select count(*) As Total from student_data  Where SCYear ='TY'";
             $res1 = $con->query($que1);
             $TY = $res1->fetch_assoc();

             $que1 = "Select count(*) As Total from staff_registration";
             $res1 = $con->query($que1);
             $staff = $res1->fetch_assoc();

             $que1 = "Select * from authority";
             $res1 = $con->query($que1);
             $authority = $res1->fetch_assoc();
             
            
   ?>
    <div class="container col-10 offset-1 mt-5 ">
         <center><h3>Hostel Summary</h3></center><hr>
 <br>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4  ">
   
            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>Total Number of Students <hr> ".$Total['Total']."</h5>";
                ?>             
            </div>
             <div class="col border p-2  me-5 ms-5">
                 <?php
                    echo "<h5>Total Number of First Year Students  <hr>".$FY['Total']."</h5>";
                ?>             
            </div>
            <div class="col border p-2  me-5 ms-5">
                 <?php
                     echo "<h5>Total Number of Second Year Students  <hr> ".$SY['Total']."</h5>";

                ?>             
            </div>
            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>Total Number of Third Year Students  <hr> ".$TY['Total']."</h5>";
                ?>             
            </div>
            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5> Total Number of BCA Students  <hr> ".$BCA['Total']."</h5><br>";
                ?>             
            </div>
             <div class="col border p-2 me-5 ms-5">
                 <?php
                   echo "<h5>Total Number of BSC Students  <hr> ".$BSC['Total']."</h5>";
                ?>             
            </div>
            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>Total Number of Working Staff  <hr> ".$staff['Total']."</h5>";
                ?>             
            </div>
            
    </div>
</div><br>
<hr> 

   
     <div class="container col-10 offset-1 mt-2 ">
        <center><h3>Other Information</h3></center><hr>
 
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4  ">
   
<?php
    if(isset($_POST['ShowHostelSummary'])){
       
         $query = " Select * from authority";
         $res = $con->query($query);
         if($res->num_rows > 0){
             $result = $res->fetch_assoc();
             $hostelFee = $result['hostelFees'];
             $messFees = $result['messFees'];
             $Token = $result['AToken'];
         }
    }else{
         echo "Not Set Other info Fees : ShowHostelSummary";
    }
?>
            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>Hostel Fees <hr> ".$hostelFee."</h5>";
                 ?>             
            </div>

            <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>Mess Fees <hr> ".$messFees."</h5>";
                 ?>             
            </div>

             <div class="col border p-2 me-5 ms-5">
                 <?php
                    echo "<h5>College Token <hr> ".$Token."</h5>";
                 ?>             
            </div>

</div>
</div>

            <br><br>
            
<?php
    include("../Storage/Footer/Footer1.html");
    ?>








            

        