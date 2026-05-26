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


    

     <div class="container col-10 offset-1 mt-5 ">
         <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4  ">
            <!-- Search Bar -->
                <div class="search w-100">         
                    <h4 style="margin-top:2px; text-align: center"> All Outing History </h4>
                    <input id="myInput" type="text" placeholder=" Search..." class="form-control border-dark">
               </div>
            <!-- retrieve Info. From DB -->
                <?php


               $con = connect();    
                    $query1 = "Select * from leave_data where reason = 'outing' order by leaveNo desc";
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
                                             <th> Time Time </th>
                                             <th> Status </th>
                                             
                                        </tr>";  

                                   echo '<tbody id="myTable">';      
                                        while( $res =  $result1->fetch_assoc()){

                                            $query2 = "select sName from student_data where sId =".$res['sId'];
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
                                                 echo "<form action='closeOutingEntry.php' method='post' > 
                                                             <button name='closeO' value=".$res['leaveNo'].">Close Entry</button>
                                                       </form>  ";   
                                               }else{
                                                   echo "Closed";
                                               }
                                               

                                               
                                               echo"</form> 
                                               </td>";

                                        } 
                                   echo '</tbody>';  
                                   echo" </table>";  
                                   
                                   
                                   
                    }
                                  
    ?>



         </div>
      </div>
</html>


<?php
    include("../Storage/Footer/Footer1.html");
    ?>
