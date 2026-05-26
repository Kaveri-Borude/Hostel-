<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
 
  <?php
     if(isset($_SESSION['staffName'])){
        include("../Storage/Navbars/navbarHome.php");
     }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Hostel Management Portal</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
   <style>
 

      .homeh1{
         text-align: center;
         margin-top: 30px;
         font-size: 35px;
         font-weight: bold;
         color: #123673;
      }


      .card-body {
         background-color: #f1f8f6;
         border-radius: 12px;
         border: 2px solid #008080;
         padding: 12px;
         text-align: center;
         height:20vh;
      }

      .card-body h4 {
         font-size: 18px;
         margin-bottom: 8px;
      }

      .card-body button {
         padding: 6px 12px;
         font-size: 14px;
      }

   .card{
       border-radius: 12px !important;

   }
.card:hover {
  
   box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); 
   transition: all 0.3s ease;     
   border-color: #005f5f;  
     border-radius:12px;       
   
}

.card-body button:hover {
   background-color: #008080;     
   color: #fff;                   
   transition: all 0.3s ease;
}

.c_w_summary{
   margin-left:5%;
}
   </style>
</head>
 
 
<body>
<div class="container-fluid mt-4  Home_con">
      <h1 class="page-title homeh1">Attendance </h1>

   
           <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

                         <!--Take Attendance-->
                     <div class="col-md-4 w-50" >
                           <div lass="card shadow-lg">
                                
                                <div class="card-body">
                                          <form action="takeAttendance1.php" method="post" >
                                              <label > <h4>Take Attendance</h4></label> <br>
                                              <button name="takeAttendance" class="btn btn-outline-primary mt-4">AtakeAttendance</button>
                                         </form>
                                </div>
                           </div>
                     </div>
                  



                 <!--Show Attendance-->
                 <div class="col-md-4 w-50">
                     <div lass="card shadow-lg">
                           <div class="card-body">
                                   <form action="showAttendance1.php" method="post" >
                                       <label > <h4>Show Attendance</h4></label> <br>
                                       <button name="showAttendance" class="btn btn-outline-primary mt-4">showAttendance</button>
                                  </form>
                          </div>
                     </div>
                 </div>
                
            </div><hr>
         </div>
      </div>
</div>
   <div class="container-fluid mt-5 ">
      <h1 class="page-title homeh1">Short Summary</h1>

   
           <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

          
        <!-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4  "> -->
                <!--  FYBCA Students  -->
               <div class="col-md-4">
                  <div class="card shadow-lg">
                        <div class="card-body">
                          <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                              <label ><b> <h4>Show FY BCA Students</h4></b></label> <br>
                              <button name="show" value="FY-BCA" class="btn btn-outline-primary mt-4">FYBCA</button>
                         </form>
                       </div>
                  </div>
               </div>   
             
               <!--  SYBCA Students  -->
                 <div class="col-md-4">
                  <div class="card shadow-lg">
                        <div class="card-body">
                          <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                              <label > <b><h4>Show SY BCA Students</h4></b></label> <br>
                              <button name="show" value="SY-BCA" class="btn btn-outline-primary mt-4">SYBCA</button>
                         </form>
                       </div>
                  </div>
                 </div>
                
                <!--  TYBCA Students  -->
                  <div class="col-md-4">
                     <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                                  <label > <h4>Show TY BCA Students</h4></label> <br>
                                  <button name="show" value="TY-BCA" class="btn btn-outline-primary mt-4">TYBCA</button>
                             </form>
                            </div>
                     </div>
                  </div>
                
             

                 <!--  FYBSC Students  -->
                   <div class="col-md-4">
                     <div class="card shadow-lg">
                           <div class="card-body">
                               <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                                   <label > <h4>Show FY BSC Students</h4></label> <br>
                                   <button name="show" value="FY-BSC" class="btn btn-outline-primary mt-4">FYBSC</button>
                                </form>
                        </div>
                     </div>
                   </div>
                
                  <!--  SYBSC Students  -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                              <div class="card-body">
                                   <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                                       <label > <h4>Show SY BSC Students</h4></label> <br>
                                       <button name="show" value="SY-BSC" class="btn btn-outline-primary mt-4">SYBCA</button>
                                  </form>
                               </div>
                        </div>
                    </div>
                
                  <!--  TYBSC Students  -->
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                  <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                                      <label > <h4>Show TY BSC Students</h4></label> <br>
                                      <button name="show" value="TY-BSC" class="btn btn-outline-primary mt-4">TYBCA</button>
                                 </form>
                              </div>
                        </div>
                    </div>
              
        </div>





        
<b><h1><hr class="mt-5"></h1></b>

   <h3 class="homeh1">Course Wise Summary</h3>
   <div class="justify-content-center c_w_summary">
      <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

                     <!--  BCA Students  -->
                  <div class="col-md-4 w-50">
                     <div class="card shadow-lg">
                         <div  class="card-body ">
                             <form action="../HomePage/showCoursewiseStudents.php" method="post" >
                                 <label > <h4>Show BCA Students</h4></label> <br>
                                 <button name="show" value="BCA" class="btn btn-outline-primary mt-4">BCA</button>
                             </form>
                         </div>
                     </div>
                  </div>
                 
                
                 <!--  BSC Students  -->

                 <div class="col-md-4 w-50">
                     <div class="card shadow-lg">
                        <div  class="card-body">
                             <form action="../HomePage/showCoursewiseStudents.php" method="post" >
                                 <label > <h4>Show BSC Students</h4></label> <br>
                                 <button name="show" value="BSC" class="btn btn-outline-primary mt-4">BSC Home Science</button>
                            </form>
                       </div>
                     </div>
                 </div>

                </div>     

             </div><hr class="mt-3"> 
      </div>
   </div>
</div>
      
        
    


                                          
                                            <h3 class="homeh1">Full Summary</h3>

<div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
               <div class="row g-4">

                                 <!-- Student Details -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllStudents.php" method="post">
                                 <h4>Show All Students</h4>
                                 <button name="show" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     <!-- Leave History -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllLeaves.php" method="post">
                                 <h4>Show Leave History</h4>
                                 <button name="showL" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     <!-- Outing History -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllOutings.php" method="post">
                                 <h4>Show Outing History</h4>
                                 <button name="showO" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     <!-- Visitors -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllVisitors.php" method="post">
                                 <h4>Show All Visitors</h4>
                                 <button name="showV" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     <!-- Complaints -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllComplaints.php" method="post">
                                 <h4>Show Complaints</h4>
                                 <button name="showC" class="btn btn-outline-primary btn-sm mt-4">Show Complaints</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     <!-- Fees -->
                     <div class="col-md-3">
                        <div class="card shadow-lg">
                           <div class="card-body">
                              <form action="showAllFeeDetails.php" method="post">
                                 <h4>Show Fees History</h4>
                                 <button name="showF" class="btn btn-outline-primary btn-sm mt-4">Show Fees Data</button>
                              </form>
                           </div>
                        </div>
                     </div>

                     

                     <div class="col-md-3">
                        <div class="card shadow-lg">
                               <div  class="card-body">
                                     <form action="../HomePage/showHostelSummary.php" method="post" >
                                          <label > <h4>Show Hostel Summary  </h4></label> <br>
                                          <button name="showFeesInfo" value="mess" class="btn btn-outline-primary mt-4">Show Hostel Summary </button>
                                     </form>
                              </div>
                        </div>
                     </div>
                      <hr class="mt-3">  
                </div>   
            </div>
      </div>          


     

</div>
 </div>
 <div class="col-md-1"></div>
</div>

  <!-- Fill Information Section -->
<div class="mb-5">
<h1 class="page-title homeh1 mb-5">Fill Information</h1>
      <div class="row justify-content-center g-4 ">

         <!-- Visitor Info -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/addVisitor1.php" method="post">
                     <h4>Fill Visitor Info</h4>
                     <button name="fillVisitor" class="btn btn-outline-primary btn-sm mt-4">Fill Visitor</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Outing/Leave -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="outing1.php" method="post">
                     <h4>Outing/Leave Entry</h4>
                     <button name="outing" class="btn btn-outline-primary btn-sm mt-4">Apply Leave</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Fee Details -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="addFeesData1.php" method="post">
                     <h4>Add Fee Details</h4>
                     <button name="addFee" class="btn btn-outline-primary btn-sm mt-4">Add Fee</button>
                  </form>
               </div>
            </div>
         </div>

         

      </div>
   </div>   
</body>
</html>

 <?php
          include("../Storage/Footer/Footer1.html");
    ?>