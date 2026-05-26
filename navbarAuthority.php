<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home.html</title>
     <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
       


     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

     <style>
            body{
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
           
            
           .navbar { 
               top: 1;
               height: 5rem;
                background-color: #008080; 
               font-size: 2rem;
               position: fixed;
               display: flex;                
               align-items: center; /* vertical alignment */ 
           }
           .navIcon{
             color: Red !important;
             font-size: 2rem !important;
           }

          
           .nItm{
              color: #000000;
           }
      


            .profile {
               display: flex;
               font-size: 1rem;
               align-items: center;   /* vertical alignment */
               gap: 10px;            /* space between text and icon */
           }
           .profile i{
              color: #000000;
              font-size: 1.5rem;
           }

           .navbttn: hover{
                border:2px solid black;
           }


           


           .profile p {
               margin: 0;            /* remove default paragraph margin*/
           }
           

     </style> 
</head>
<body>

   <nav class="navbar border-bottom container-fluid sticky-top ">
        <div class="container-fluid navHr justify-content-start">

        <a class="navbar-brand navIcon" href="/"><i class="fa-regular fa-compass"></i></a>

            <a class="btn nItm navbttn me-2" id="gotoMain">Main Page</a>
            
            <a class="btn navbttn nItm" href="/KDAJ-PHP/Hostel_Management/MainAuthority/AuthorityHome.php">Home Page</a>


            <?php
            if(isset($_SESSION['AName'] )){
                     echo'<form action ="/KDAJ-PHP/Hostel_Management/HomePage/showAllStudents.php" method="post" class="btn nItm">
                         <li class="nav-item d-flex align-items-center">
                        <button type="submit" name="show" class="btn nItm ">Show All Students</button>     
                     </li>                  
                     </form>';

                     echo'<form action ="/KDAJ-PHP/Hostel_Management/HomePage/showAttendance1.php" method="post" class="btn nItm">
                        <li class="nav-item d-flex align-items-center">
                            <button type="submit" name="showAttendance" class="btn nItm ">Show Attendance</button>     
                        </li>                     
                     </form>';
                }
                if(isset($_SESSION['sId'] )){
                    $sId = $_SESSION['sId'];
                     echo'<form action ="/KDAJ-PHP/Hostel_Management/ViewPage/viewStudent.php" method="get" class="btn nItm">
                         <li class="nav-item d-flex align-items-center">
                        <button type="submit" name="view" value="'.$sId.'" class="btn nItm ">View This Student</button>     
                     </li>                  
                     </form>';
                }
                
                 if(isset($_SESSION['AName'])){
                        echo "<div class='profile me-1 ms-auto'> 
                                     <p> Welcome ".$_SESSION['AName'] ."</p> 
                                     <i class='fa-solid fa-user fa-2x me-2'></i>
                                    
                                     <a href='../HomePage/logout.php'><i class='fa-solid fa-right-from-bracket'></i></a> 
                        </div>";
                 }else{
                    header("Location: ../MainAuthority/ALogin1.php");
                    exit();
                }
                  
            ?>
            
             

            

        </div>
    </nav>
    <br>

     <script>
        var logout = document.getElementById("gotoMain");
        logout.addEventListener("click", ()=>{
             if(confirm("Are you sure you want to logut?")){
                 window.location.href = "/KDAJ-PHP/Hostel_Management/";
             }
                
        } );
    </script>