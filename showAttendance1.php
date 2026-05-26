  <?php
     include("../Storage/Middlewares/Middleware.php");
            if(isset($_SESSION['AName'])){
                include("../Storage/Navbars/navbarAuthority.php");
            }
            elseif(isset($_SESSION['staffName'])){
                include("../Storage/Navbars/navbarHome.php");
            }
            if( isset($_SESSION['sId']) ){
            unset($_SESSION['sId']);
          }
  ?>
<head>
    <title>showAttendance1.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Storage/js/formSub.js" ></script>

    <style>
        .show_Attendence{
            text-align: center;
         
         font-size: 40px;
         font-weight: bold;
         color: #123673;
         margin-top:8px;
          text-align: center;
        }
        .show_Attendence_form{
            display:flex;
            justify-content:center;
            
        }

    </style>
</head>


     
    <div class="col-10 offset-1 mt-5 ">
    <div class="search">  
        <div class="show_Attendence">
            <h4> Monthly Attendance</h4>  
            
        </div>
<hr> 
<div class="show_Attendence_form mt-5">


             <form action="showAttendance2.php" method="post">
                   <label for="monthYear"><strong class="fs-5">Select Month and Year :</strong> </label>
                   <input type="month" name="month" required><br><br>


                   <button type="submit" name="showAttendance" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-4">submit</button>
    
                </form>
</div>
</div>
</div>            


<?php
    include("../Storage/Footer/Footer1.html");
    ?>
