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
            
                <div class="search w-100">  
                    <h4 style="margin-top:8px; text-align: center"> All Visitors History </h4>       
                    <input id="myInput" type="text" placeholder=" Search..." class="form-control border-dark">
                    
               </div>


                <?php                         
                         $con = connect();
                              $query = "Select * from visitor_data  order by vNo desc";
                              $result = $con->query($query);
               
                              if($result->num_rows > 0){
                              echo " <table class='table table-hover table-bordered text-center '>
                                        <tr>
                                             <th> Student Id </th> 
                                             <th> Student Name </th> 
                                             <th> Visitor Name </th> 
                                             <th> Visitor Contact No. </th> 
                                             <th> Visitor Address </th>
                                             <th> Visit Date </th>
                                             <th> In Time </th>
                                             <th> Out Time </th>
                                             <th> Visitor's Relation With Student</th>
                                              <th> Status </th>
                                        </tr>";  

                                   echo '<tbody id="myTable">';      
                                        while( $res =  $result->fetch_assoc()){

                                                  echo "<tr><td>", $res['sId'],"</td>";
                                                  echo "<td>", $res['sName'],"</td>";
                                                  echo "<td>", $res['vName'],"</td>";
                                                  echo "<td>", $res['vContactNo'],"</td>"; 
                                                  echo "<td>", $res['vAddress'],"</td>"; 
                                                  echo "<td>", $res['vDate'],"</td>"; 
                                                  echo "<td>", $res['vInTime'],"</td>";                       
                                                  echo "<td>",$res['vOutTime'] == null?" - " : $res['vOutTime'],"</td>";
                                                  echo "<td>", $res['vRelation'],"</td>";                                             
                                         echo "<td> ";                                            
                                               if($res['vOutTime'] == null){
                                                 echo "<form action='closeVisitorEntry.php' method='post' > 
                                                             <button name='closeV' value=".$res['vNo'].">Close Entry</button>
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
