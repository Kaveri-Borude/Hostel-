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

   <style>

        .S_H_summary_h3{
               color : #00008B;
               text-align: center;
               margin-top:50px;
               font-weight:bold;
               margin-bottom:5px;
        }

        .show_students{
            background-color:#f1f8f6;
            border: 1px solid #ced4da;
        }

       .S_H_summary_col {
    background-color: #f1f8f6;   
    border: 2px solid #008080;   
    border-radius: 8px;          
       padding: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
    text-align: center;          
    transition: transform 0.2s ease-in-out;
}

.S_H_summary_col:hover {
    transform: scale(1.05);      
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}
.S_H_summary_h4{
              color : #00008B;
               text-align: center;
               font-weight:bold;

}



   </style>
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

            
             
            
   ?>
    <div class="S_H_summary_h3">
         <h3>Hostel Summary</h3>
    </div>
   
    <hr>
    <div class="container col-10 offset-1 ">
        
 <br>
        <div class="S_H_summary_h4 ">
            <h4>Total Students</h4>
        </div>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5 mt-2 justify-content-center ">
   
            <div class="col p-1 me-5 ms-5 S_H_summary_col">
                 <?php
                    echo "<h5> <strong>Total Number of Students </strong> <hr> ".$Total['Total']."</h5> ";
                ?>             
            </div>
</div>

<hr>
        <div class="S_H_summary_h4">
            <h4>Total Students Year Wise</h4>
        </div>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-1 mb-5">  

             <div class="col  p-2  me-5 ms-5 S_H_summary_col">
                 <?php
                    echo "<h5> <strong>Total Number of First Year Students </strong><hr>".$FY['Total']."</h5>";
                ?>             
            </div>
            <div class="col  p-2  me-5 ms-5 S_H_summary_col">
                 <?php
                     echo "<h5> <strong> Total Number of Second Year Students </strong> <hr> ".$SY['Total']."</h5>";

                ?>             
            </div>
            <div class="col  p-2 me-5 ms-5 S_H_summary_col">
                 <?php
                    echo "<h5> <strong> Total Number of Third Year Students</strong>  <hr> ".$TY['Total']."</h5>";
                ?>             
            </div>

</div>

<hr>
<div class="S_H_summary_h4">
            <h4>Total Students of BCA and Hme Science</h4>
        </div>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-1 mb-4 justify-content-center">           
            <div class="col  p-2  me-5 ms-5 S_H_summary_col">
                 <?php
                    echo "<h5><strong> Total Number of BCA Students </strong> <hr> ".$BCA['Total']."</h5><br>";
                ?>             
            </div>
             <div class="col  p-2  me-5 ms-5 S_H_summary_col">
                 <?php
                   echo "<h5> <strong>Total Number of BSC Students </strong> <hr> ".$BSC['Total']."</h5>";
                ?>             
            </div>

            
    </div>
    <hr>
</div><br>



<?php
    include("../Storage/Footer/Footer1.html");
    ?>







            

        