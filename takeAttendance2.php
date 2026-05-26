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
    <title>addFeesData1.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Storage/js/formSub.js" ></script>
</head>
<div class="col-10 offset-1 mt-5 ">

     <?php      
          $con = connect();

    if(isset($_POST['takeAttendance'])){
          $date = $_POST['date'];
          if($date == null){
                echo " <script>
                          alert('Please Enter a Date');
                       </script> ";
          }
        

          $q1 = "select sId,sName from student_data";
          $res1 = $con->query($q1);
          if($res1){
                //  while($row = $res1->fetch_assoc()){
                      
        foreach($_POST as $sId => $status){
             if($sId == "date" || $sId == "takeAttendance") continue;

            
              $q2 = "insert into attendance (sId,date, status) values ('$sId', '$date', '$status') ";
              $res2 = $con->query($q2);
                if(!$res2){
                     echo "Error : ".$con->error;
                }
        }
        if($res2){
              
               
                echo "<script>
                         
                         window.location.href = '../HomePage/Home.php';
                         alert('Attendance saved successfully!');
                         
                    </script>";
               exit;  
        }else{
               echo "<script>alert('Error While Recoding Attendance : ".$con->error."');</script>";   
        }
        
              
          }else{
             echo $con->error;
          }

        

    }else{
         echo "Not Set";
    }
?>