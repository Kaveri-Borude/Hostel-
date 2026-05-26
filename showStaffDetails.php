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
    
    <title>showAllStaff.php</title>
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


    <div class="external col-10 offset-1 mt-5">

        <div class="search"> <h4 style="margin-top:8px; text-align: center">   Search the Staff   </h4>         
            <input id="myInput" type="text" placeholder=" Search..." style=" width: 80rem; margin-top:8px; height:39px; border-radius:9px;" >
            <br><br>
        </div>

        <?php
        if(isset($_POST['showStaff'])){
            
            $con = connect();
                $query = "Select * from staff_registration";
                $result = $con->query($query);
 
                if($result->num_rows > 0){
                echo " <table class='table table-hover table-bordered text-center '>
                            <tr>
                                <th> Staff Id </th> 
                                <th> Staff Name </th> 
                                <th> Staff Email </th> 
                                <th> Staff Contact </th> 
                                <th> Gender </th>
                                <th> Action </th>
                            </tr>";  
                    echo '<tbody id="myTable">';      
                            while( $res =  $result->fetch_assoc()){

                                    echo "<tr><td>", $res['staff_id'],"</td>";
                                    echo "<td>", $res['Name'],"</td>";
                                    echo "<td>", $res['Email'],"</td>";
                                    echo "<td>", $res['ContactNo'],"</td>";                       
                                    echo "<td>",$res['staffGender'],"</td>";
                                    echo "<td> <form  action='deleteStaff.php' method='post'> 
                                                <button name='deleteStaff' value='".$res['staff_id']."' >Delete Staff</button>
                                            </form> 
                                        </td>";
                            } 
                    echo '</tbody>';  
                echo" </table>"; 

                }           
        
        }else{
            echo "Error";
        }
    

    ?>
   </div> 
<!--    
   
<script>
        var deleteStaff = document.getElementById("deleteStaff");
        deleteStaff.addEventListener("click", ()=>{
             if(confirm("Are you sure you want to Delete this staff")){
                 window.location.href = "/KDAJ-PHP/Hostel_Management/MainAuthority/deleteStaff.php";
             }
                
        } );
    </script> -->
</html>



<?php
    include("../Storage/Footer/Footer1.html");
    ?>