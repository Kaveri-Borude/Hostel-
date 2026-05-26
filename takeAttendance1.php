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

    <style>
       .takeAttendence{
        text-align: center;
         
         font-size: 35px;
         font-weight: bold;
         color: #123673;
       }
        .takeAtten_con{
            display:flex;
          justify-content:center;
        }
        .takeAtten{
              
           max-width: 800px;   
           width: 100%; 
           padding-left:15px;
           /* background-color:#f1f8f6; */
          border-radius: 12px;
           /* border: 1px solid #008080; */
           box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .Attendancedate{
            margin-left:30%;
        }
        
    </style>
</head>

<div class="col-10 offset-1 mt-5 ">

    <div class="search"> <h4 style="margin-top:5px; text-align: center" class="takeAttendence"> Take Attendance </h4><hr>

    <?php
          $con = connect();

          $q1 = "select sId,sName from student_data";
          $res1 = $con->query($q1);
          if($res1->num_rows > 0){
                echo"<div class='takeAtten_con' >";
                echo '<form action="takeattendance2.php" method ="post" class="needs-validation takeAtten" >
                    
                    <div class="Attendancedate d-flex align-items-center mb-5 mt-4">
                          <label for="dateInput" class="form-label"><strong class="fs-5">Enter the Date:</strong></label>
                          <input type="date" class="form-control me-5 w-50" id="dateInput" name="date" required>
                     </div>';


                   echo '   <table class="table table-bordered ">
                            <thead >
                                <tr>
                                    <th>Student Name</th>
                                    <th>Absent (A)</th>
                                    <th>Present (P)</th>
                                </tr>
                            </thead>
                            <tbody>';
    
                     while($row = $res1->fetch_assoc()){
                         echo '
                             <tr>
                                 <td class="fw-bold">'.$row['sName'].'</td>
                                 <td>
                                     <input type="radio" name="'.$row['sId'].'" value="Absent" id="'.$row['sId'].'A">
                                 </td>
                                 <td>
                                     <input type="radio" name="'.$row['sId'].'" value="Present" id="'.$row['sId'].'P" checked>
                                 </td>
                             </tr>';
                     }

                       echo ' </tbody>
                         </table> ';




               echo '<button type="submit" name = "takeAttendance" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-4 mb-3">Submit</button>
               </form>';
               echo "</div>";
          }
   ?>
    
           
     
    </div>

    
<?php
    include("../Storage/Footer/Footer1.html");
    ?>
