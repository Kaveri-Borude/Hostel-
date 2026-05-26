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
    <title>showStudentOutings.php</title>
     <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="../Storage/js/formSub.js" ></script>
   <script>
         $(document).ready(function(){
              $("#myInput").on("keyup", function(){
                  var value = $(this).val().toLowerCase();
                  $("#myTable tr").filter(function(){
                     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                  });
              });
         });

         $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
   </script>
</head>


     <?php     
      if(isset($_POST['showAllComplaints'])){
         $sId = $_POST['showAllComplaints'];
        //  $_SESSION["sId"] = $sId;
      } else{
         echo "Not Set";
         exit;
      }
         
               $con = connect();

     ?>

     <div class="container col-10 offset-1 mt-5 "><br>
        
            <!-- To Find Student Name -->

            <?php
                $query = "Select * from student_data Where sId = '$sId'";
                $result = $con->query($query);
                if($result->num_rows > 0){
                    $res = $result->fetch_assoc();
                     $sName = $res['sName'];
                }
 
            ?>
            

                <div class="search"> <h4 style="margin-top:8px; text-align: center">   <?php echo "Complaint Record : $sName"?> </h4> </div>       
                <div class="search w-100">         
                    <input id="myInput" type="text" placeholder=" Search..." class="form-control border-dark">
               </div><br>

            <!-- retrieve Info. From DB -->
                <?php

                $query2 = "Select * from complaint_data where sId = $sId order by cId desc";
                $result2 = $con->query($query2);
               

                   if($result2->num_rows > 0){
                    echo " <table class='table table-hover table-bordered text-center '>
                            <tr>
                                <th> Sr. No.</th> 
                                <th> Student Id </th> 
                                <th> Student Name </th> 
                                <th> Student Course </th> 
                                <th> Student Year </th> 
                                <th> Date </th>
                                <th> Time </th>
                            </tr>";  
                    echo '<tbody id="myTable">';      
                            while( $res2 =  $result2->fetch_assoc()){

                                 $sid = $res2['sId'];

                                 $query1 = "Select * from student_data where sId = ".$sid;
                                 $result1 = $con->query($query1);

                                 $res = $result1->fetch_assoc();

                                    echo "<tr><td>", $res2['cId'],"</td>";
                                    echo "<td>", $res['sId'],"</td>";
                                    echo "<td>", $res['sName'],"</td>";
                                    echo "<td>", $res['sCourse'],"</td>";
                                    echo "<td>", $res['sCYear'],"</td>";                       
                                    echo "<td>",$res2['cDate'],"</td>";
                                    echo "<td>",$res2['cTime'],"</td>";
                                
                                    echo "<td> <form action='../HomePage/viewComplaint.php' method='post'> 
                                                <button name='viewC' value=",$res2['cId'],">view Complaint</button>
                                            </form> 
                                        </td>";
                            }

                    } else{
                         echo'<br><div> <h4 style="margin-top:8px; text-align: center">  No Complaint Record Found   </h4><hr> <br>';
                    }
                   
    ?>



         </div>
      </div>
</html>

<?php
    include("../Storage/Footer/Footer1.html");
    ?>