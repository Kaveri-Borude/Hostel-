  <?php
     include("../Storage/Middlewares/Middleware.php");
            if(isset($_SESSION['AName'])){
                include("../Storage/Navbars/navbarAuthority.php");
            }
            elseif(isset($_SESSION['staffName'])){
                include("../Storage/Navbars/navbarHome.php");
            }
  ?>
<?php

    if(isset($_POST['show'])){
          $course = $_POST['show'];
          
          $showString = "$course Students";


    }else{
         echo "Not Set Show BatchwiseStudents";
    }

?>

<head>
    
    <title>showAllStudents.php</title>
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


        <div class="search"> <h3 style="margin-top:8px; text-align: center">   <?php echo $showString ?>   </h3>         
            <input id="myInput" type="text" placeholder=" Search..." style=" width: 80rem; margin-top:8px; height:39px; border-radius:9px;" >
            <br><br>
        </div>

        <?php
        if(isset($_POST['show'])){
            $NoofStd = 0;
            
            
            $con = connect();

             $que = "Select count(*) As Total 
                    from student_data 
                    Where SCourse ='$course'";
             $res = $con->query($que);
             $NoofStd = $res->fetch_assoc();
             echo "<h5 class='text-end me-5'>Number of Students = ".$NoofStd['Total']."</h5><br>";




                $query = "Select * 
                         from student_data 
                         Where SCourse ='$course'";
                $result = $con->query($query);
 
                if($result->num_rows > 0){
                echo " <table class='table table-hover table-bordered text-center '>
                            <tr>
                                <th> Student Id </th> 
                                <th> Student Name </th> 
                                <th> Student Course </th> 
                                <th> Student Year </th> 
                                <th>Student Room Number </th>
                                <th> Action </th>
                            </tr>";  
                    echo '<tbody id="myTable">';      
                            while( $res =  $result->fetch_assoc()){
                               

                                    echo "<tr><td>", $res['sId'],"</td>";
                                    echo "<td>", $res['sName'],"</td>";
                                    echo "<td>", $res['sCourse'],"</td>";
                                    echo "<td>", $res['sCYear'],"</td>";                       
                                    echo "<td>",$res['sRoomNumber'] == null?" - " : $res['sRoomNumber'],"</td>";
                                
                                    echo "<td> <form action='../ViewPage/viewStudent.php' method='get'> 
                                                <button name='view' value=",$res['sId'],">View</button>
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
   
   

</html>


<?php
    include("../Storage/Footer/Footer1.html");
    ?>
