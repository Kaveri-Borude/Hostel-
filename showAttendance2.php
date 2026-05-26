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
    
    
   

     <?php           
     
            $con = connect();
  
    if(isset($_POST['showAttendance'])){
          $selectedMonthYear = $_POST['month'];
      
          $monthYear = explode("-",$selectedMonthYear);
       

          $year = $monthYear[0];
          $month = $monthYear[1];
      
         
            $selectedMonthYear = date("F-Y", strtotime($selectedMonthYear));

          echo '<div class="col-10 offset-1 mt-3 ">
         <div class="search"> <h4 style=" text-align: center"> Attendance for month : '.$selectedMonthYear.'</h4><hr>';
         echo '<br><form action="showAttendance1.php" method="post" class="mb-4">
                    <button type="submit" name="showAttendance">Show Another Month</button>
                </form>';
           

          $q1 = "select sId,sName from student_data";
          $res1 = $con->query($q1);

          $lastDay = date("Y-m-t", strtotime("$year-$month-01"));

            //   $q2 = "select * from attendance where date>= '$year-$month-01' and date<= '$year-$month-31' ";
              $q2 = "SELECT sId,status,DATE_FORMAT(date, '%d-%b-%Y') AS date
                    FROM attendance
                    where date >= '$year-$month-01' and date <= '$lastDay' ";
              $res2 = $con->query($q2);
              
                // Collect attendance data
                $attendance = [];
                $dates = [];
                while($row = $res2->fetch_assoc()){
                    $attendance[$row['sId']][$row['date']] = $row['status'];
                    $dates[$row['date']] = true;
                }

                    // Sort dates
                    $dates = array_keys($dates);
                    sort($dates);

                // Build table
                echo "<table class='table table-bordered'>";
                echo "<tr><th>sId</th><th>sName</th>";
                foreach($dates as $d){
                    echo "<th>$d</th>";
                }
                echo "</tr>";

                while($student = $res1->fetch_assoc()){
                    echo "<tr >";
                    echo "<td>".$student['sId']."</td>";
                    echo "<td>".$student['sName']."</td>";
                    foreach($dates as $d){
                        $status = $attendance[$student['sId']][$d] ?? "-";
                        echo "<td>$status</td>";
   
                    }
            
                    echo "</tr>";
                   
                }  
                 
                   
                echo "</table>"; 

   }else{
         echo "Not Set";
    }
?>