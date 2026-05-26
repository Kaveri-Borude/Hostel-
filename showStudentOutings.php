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
      if(isset($_POST['showStudentOutings'])){
         $sId = $_POST['showStudentOutings'];
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
            

                <div class="search"> <h4 style="margin-top:8px; text-align: center">   <?php echo "Outing Record : $sName"?> </h4>        
                <div class="search w-100">         
                    <input id="myInput" type="text" placeholder=" Search..." class="form-control border-dark">
               </div><br>

            <!-- retrieve Info. From DB -->
                <?php

                $query1 = "Select * from leave_data where sId = $sId AND reason = 'outing' order by leaveNo desc";
                $result1 = $con->query($query1);
               

                    if($result1->num_rows > 0){
                              echo " <table class='table table-hover table-bordered text-center '>
                                        <tr>
                                             <th> Sr. No. </th> 
                                             <th> Student id </th> 
                                             <th> Student Name </th> 
                                             <th> Reason </th>                                              
                                             <th> Outing Date </th>
                                             <th> Outing Time </th>
                                             <th> Place </th>
                                             <th> In Date </th>
                                             <th> Entery Status </th>
                                             
                                             
                                        </tr>";  

                                   echo '<tbody id="myTable">';      
                                        while( $res =  $result1->fetch_assoc()){

                                        // $date = $res['outDate'];
                                        // $dateArr = explode("-", $date);
                                        // echo $dateArr[1];
                                        // $currMon = $dateArr[1];

                                        // if($dateArr[1] == 2){
                                        //      echo "February";
                                        // }

                                        // while($currMon == $dateArr[1]){
                                            
                                        // }

                                         $query2 = "select sName from student_data where sId = ".$res['sId'];
                                            $result2 = $con->query($query2);
                                            $row = $result2->fetch_assoc();

                                                echo "<tr><td>", $res['leaveNo'],"</td>";
                                                echo "<td>", $res['sId'],"</td>";
                                                echo "<td>", $row['sName'],"</td>";
                                                echo "<td>", $res['reason'],"</td>";
                                                echo "<td>", $res['outDate'],"</td>"; 
                                                echo "<td>", $res['outTime'],"</td>"; 
                                                echo "<td>", $res['place'],"</td>"; 
                                                echo "<td>",$res['inDate'] == null?" - " : $res['inDate'],"</td>";                       
                                                echo "<td>",$res['inTime'] == null?" - " : $res['inTime'],"</td>";
                                             
                                         echo "<td> ";
                                            
                                               if($res['inDate'] == null){
                                                 echo "<form action='../HomePage/closeLeaveEntry.php' method='post' > 
                                                             <button name='closeL' value=".$res['leaveNo'].">Close Entry</button>
                                                       </form>  ";   
                                               }else{
                                                   echo "Closed";
                                               }

                                            
                                               

                                               
                                               echo"</form> 
                                               </td>";

                                        } 
                                   echo '</tbody>';  
                                   echo" </table> </div> </div><br>";                              
                                   
                    }else{
                         echo'<br><div> <h4 style="margin-top:8px; text-align: center">  No Outing Record Found   </h4><hr> <br>';
                    }
                   
    ?>



         </div>
      </div>
</html>

<?php
    include("../Storage/Footer/Footer1.html");
    ?>