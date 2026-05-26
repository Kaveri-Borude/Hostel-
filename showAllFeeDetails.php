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

     <style>
          .container{
               margin-top:30px;
          }
          .Fdetails_h2{
               color : #00008B;
               /* justify-content:center; */
               text-align: center;
               margin-top:50px;
          }
     </style>
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


  
     <div class="Fdetails_h2">
          <h2>  Fees Details </h2>
     </div>
     <div class="container col-10 offset-1  ">
         <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4  ">
            <!-- Search Bar -->
                <div class="search w-100">         
                    <input id="myInput" type="text" placeholder=" Search..." class="form-control border-dark">
               </div>
            <!-- retrieve Info. From DB -->
                <?php
                         
                         $con = connect();
                              $query1 = "Select * from fees_data  order by tId desc";
                              $result1 = $con->query($query1);
               
                              if($result1->num_rows > 0){
                              echo " <table class='table table-hover table-bordered text-center '>
                                        <tr>
                                             <th> Sr. No. </th> 
                                             <th> Student id </th> 
                                             <th> Student Name </th> 
                                             <th> Fee Type </th>                                              
                                             <th> Payer Name </th>
                                             <th> Payer Contact No. </th>
                                             <th> Payment Date </th>
                                             <th> UTR No. </th>
                                             <th> Amount </th>
                                             
                                        </tr>";  

                                   echo '<tbody id="myTable">';      
                                        while( $res =  $result1->fetch_assoc()){

                                            $query2 = "select sName from student_data where sId = ".$res['sId'];
                                            $result2 = $con->query($query2);
                                            $row = $result2->fetch_assoc();

                                                echo "<tr><td>", $res['tId'],"</td>";
                                                echo "<td>", $res['sId'],"</td>";
                                                echo "<td>", $row['sName'],"</td>";
                                                echo "<td>", $res['feeType'],"</td>";
                                                echo "<td>", $res['TName'],"</td>"; 
                                                echo "<td>", $res['TContact'],"</td>"; 
                                                echo "<td>", $res['feeDate'],"</td>"; 
                                                echo "<td>",$res['UTRNO'] ,"</td>";                       
                                                echo "<td>",$res['feeAmount'] ,"</td></tr>";
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
