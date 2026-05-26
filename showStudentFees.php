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
     
     $con = connect();

     if(isset($_POST['showStudentFees'])){
           $sId = $_POST['showStudentFees'];
          //  echo "$sId";
     }
?>

<head>
    
    <title>showAllStaff.php</title>
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>  
</head>
    <div class="container col-10 offset-1 mt-2">

        <!-- <div class="search"> <h4 style="margin-top:8px; text-align: center">  Fees Information   </h4>         <hr> -->
            <!-- <input id="myInput" type="text" placeholder=" Search..." style=" width: 80rem; margin-top:8px; height:39px; border-radius:9px;" > -->
            <br><br>
        </div>

        <?php
       
     
            
            $con = connect();

          // Hostel Paid Fees
                $query2 = "Select SUM(feeAmount) As TotalSum from fees_data where sId = '$sId' and feeType = 'hostel'";
                $result2 = $con->query($query2);
                $res2 = $result2->fetch_assoc();
                if($res2 && $res2['TotalSum'] != NULL){
                     $hostelTotal = $res2['TotalSum'];
                }else{
                     $hostelTotal = 0;
                }
          // Mess Paid Fees
                $query2 = "Select SUM(feeAmount) As TotalSum from fees_data where sId = '$sId' and feeType = 'mess'";
                $result2 = $con->query($query2);
                $res2 = $result2->fetch_assoc();
                if($res2 && $res2['TotalSum'] != NULL){
                     $messTotal = $res2['TotalSum'];
                }else{
                     $messTotal = 0;
                }

          // Hostel Peding Fees
                $query3 = "Select * from authority";
                $result3 = $con->query($query3);
                if($result3->num_rows > 0){
                     $res3 = $result3->fetch_assoc();
                     $hostelPending = $res3['hostelFees'] - $hostelTotal;
                }
          // Mess Peding Fees
                $query3 = "Select * from authority";
                $result3 = $con->query($query3);
                if($result3->num_rows > 0){
                     $res3 = $result3->fetch_assoc();
                     $messPending = $res3['messFees'] - $messTotal;
                }
                

          echo '<div class="container col-10 offset-1 mt-2">';
$q2="select sName from student_data where sId= '$sId'";
                $res2 = $con->query($q2);
                $row = $res2->fetch_assoc();



          //  hostel Fees
                $query = "Select * from fees_data where sId = '$sId' and feeType = 'hostel'";
                $result = $con->query($query);
 
               if($result->num_rows > 0){
                echo ' <div class="search"> <h4 style="margin-top:8px; text-align: center">   Hostel Fees   </h4>';
                echo " <table class='table table-hover table-bordered text-center '>
                            <tr>
                                <th> Transaction No. </th> 
                                <th> Student ID </th> 
                                <th> Student Name </th> 
                                <th> Sender Name </th> 
                                <th> Sender Contact </th> 
                                <th> Payment Date </th>
                                <th> UTR NO. </th>
                                <th> Amount </th>
                            </tr>";  
                    echo '<tbody id="myTable">';      
                            while( $res =  $result->fetch_assoc()){

                                    echo "<tr><td>", $res['tId'],"</td>";
                                    echo "<td>", $res['sId'],"</td>";
                                    echo "<td>", $row['sName'],"</td>";
                                    echo "<td>", $res['TName'],"</td>";
                                    echo "<td>", $res['TContact'],"</td>";                       
                                    echo "<td>",$res['feeDate'],"</td>";
                                    echo "<td>",$res['UTRNO'],"</td>";
                                    echo "<td>",$res['feeAmount'],"</td>";
                                    
                            } 
                    echo '</tbody>';  
                echo" </table><br> <div me-5>Total Paid Hostel Fees : $hostelTotal</div> 
                                   <div>Pending Hostel Fees : $hostelPending</div> <hr><br>"; 

               }else{
                      echo'<div class="search"> <h4 style="margin-top:8px; text-align: center">No Hostel Fees Record Found</h4><hr><br>';
                      echo" <br> <div me-5>Total Paid Hostel Fees : $hostelTotal</div> 
                                 <div>Pending Hostel Fees : $hostelPending</div> <hr><br>"; 
               }
              
          //  Mess Fees
               $query = "Select * from fees_data where sId = '$sId' and feeType = 'mess'";
                $result = $con->query($query);
 
                

               if($result->num_rows > 0){
                echo ' <div class="search"> <h4 style="margin-top:8px; text-align: center">   Mess Fees   </h4>';
                echo " <table class='table table-hover table-bordered text-center '>
                            <tr>
                                <th> Transaction No. </th> 
                                <th> Student ID </th> 
                                <th> Student Name </th> 
                                <th> Sender Name </th> 
                                <th> Sender Contact </th> 
                                <th> Payment Date </th>
                                <th> UTR NO. </th>
                                <th> Amount </th>
                            </tr>";  
                    echo '<tbody id="myTable">';      
                            while( $res =  $result->fetch_assoc()){

                                    echo "<tr><td>", $res['tId'],"</td>";
                                    echo "<td>", $res['sId'],"</td>";
                                    echo "<td>", $row['sName'],"</td>";
                                    echo "<td>", $res['TName'],"</td>";
                                    echo "<td>", $res['TContact'],"</td>";                       
                                    echo "<td>",$res['feeDate'],"</td>";
                                    echo "<td>",$res['UTRNO'],"</td>";
                                    echo "<td>",$res['feeAmount'],"</td>";
                                    
                            } 
                    echo '</tbody>';  
                echo" </table><br> <div me-5>Total Paid Mess Fees : $messTotal</div> 
                                   <div>Pending Mess Fees : $messPending</div> <hr><br>"; 
               }else{
                      echo'<div class="search"> <h4 style="margin-top:8px; text-align: center">  No Mess Fees Record Found   </h4><hr> <br>';
                       echo" <div me-5>Total Paid Mess Fees : $messTotal</div> 
                                   <div>Pending Mess Fees : $messPending</div> <hr><br>"; 
                       
               }   
        
      
    

    ?>
   </div> </div>
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