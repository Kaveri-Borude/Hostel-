  <?php
     include("../Storage/Middlewares/Middleware.php");
            if(isset($_SESSION['AName'])){
                include("../Storage/Navbars/navbarAuthority.php");
            }
            elseif(isset($_SESSION['staffName'])){
                include("../Storage/Navbars/navbarHome.php");
            }
           if( isset($_SESSION['sId']) ){
               unset($_SESSION['sId']);
            }
  ?>
<head>
   <title>Authority Home.php</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>
</head>


<style>
      .homeh1{
         text-align: center;
         /* margin-top: 10px; */
         font-size: 35px;
         font-weight: bold;
         color: #123673;
      }


      .card-body {
         
         background-color: #f1f3f2;
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

   
.card:hover {
  
   box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); 
   /* transition: all 0.3s ease;      */
   border-color: #005f5f;         
   
}

.card-body button:hover {
   background-color: #008080;     
   color: #fff;                   
   transition: all 0.3s ease;
}

.c_w_summary{
   margin-left:5%;
}


            .card-header {
              /* background-color: #e0e0e0;  */
              /* color: #333;              */
              font-weight: 600;
               color: #123673 !important;
            }


            .h4{
               font-weight:bold;
            }

            .card {
                   transition: transform 0.3s ease, box-shadow 0.3s ease;
                   box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                   border-radius: 12px;
            }
   </style>
</head>
 
<body>

<h1 class="homeh1 mt-5">Short Summary</h1>
      <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

                      <!--  FYBCA Students  -->
                      <div class="col-md-4">
                           <div class="card shadow-lg">
                                 <div class="card-body">
                                      <form action="../HomePage/showBatchwiseStudents.php" method="post" >
                                          <label > <h4 class="card-header mt-2 h4">Show FY BCA Students</h4></label> <br>
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
                                           <label > <h4 class="card-header mt-2 h4">Show SY BCA Students</h4></label> <br>
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
                                          <label > <h4 class="card-header mt-2 h4">Show TY BCA Students</h4></label> <br>
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
                                                 <label > <h4 class="card-header mt-2 h4">Show FY BSC Students</h4></label> <br>
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
                                          <label > <h4 class="card-header mt-2 h4">Show SY BSC Students</h4></label> <br>
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
                                        <label > <h4 class="card-header mt-2 h4">Show TY BSC Students</h4></label> <br>
                                        <button name="show" value="TY-BSC" class="btn btn-outline-primary mt-4">TYBCA</button>
                                   </form>
                               </div>
                           </div>
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
                                 <label > <h4 class=" mt-2 h4">Show BCA Students</h4></label> <br>
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
                                 <label > <h4 class=" mt-2 h4">Show BSC Students</h4></label> <br>
                                 <button name="show" value="BSC" class="btn btn-outline-primary mt-4">BSC Home Science</button>
                            </form>
                       </div>
                     </div>
                 </div>
                </div>     

             </div>
      </div>
   </div>
</div>
      


      
<b><h1><hr class="mt-5"></h1></b>


   <div class="container-fluid mt-5 ">
      <h1 class="page-title homeh1">View Summary</h1>

   
           <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

         

                <!-- Staff Details -->
                     
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <div class="card-body">
                          <form action="showStaffDetails.php" method="post" >
                              <label > <h4 class=" mt-2 h4">Show All Staff Details</h4></label> <br>
                              <button name="showStaff" class="btn btn-outline-primary mt-4">Show Details of Staff</button>
                         </form>
                    </div>
                </div>
            </div>
                

                     <!-- Student Details -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllStudents.php" method="post">
                     <h4 class=" mt-2 h4">Show All Students</h4>
                     <button name="show" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Leave History -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllLeaves.php" method="post">
                     <h4 class=" mt-2 h4">Show Leave History</h4>
                     <button name="showL" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Outing History -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllOutings.php" method="post">
                     <h4 class=" mt-2 h4">Show Outing History</h4>
                     <button name="showO" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Visitors -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllVisitors.php" method="post">
                     <h4 class=" mt-2 h4">Show All Visitors</h4>
                     <button name="showV" class="btn btn-outline-primary btn-sm mt-4">Show Details</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Complaints -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllComplaints.php" method="post">
                     <h4 class=" mt-2 h4">Show Complaints</h4>
                     <button name="showC" class="btn btn-outline-primary btn-sm mt-4">Show Complaints</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Fees -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAllFeeDetails.php" method="post">
                     <h4 class=" mt-2 h4">Show Fees History</h4>
                     <button name="showF" class="btn btn-outline-primary btn-sm mt-4">Show Fees Data</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Delete Batch -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/showAttendance1.php" method="post">
                     <h4 class=" mt-2 h4">Show Attendance</h4>
                     <button name="showAttendance" class="btn btn-outline-primary btn-sm mt-4">showAttendance</button>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <hr class="my-5">

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
                     <h4 class=" mt-2 h4">Fill Visitor Info</h4>
                     <button name="fillVisitor" class="btn btn-outline-primary btn-sm mt-4">Fill Visitor</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Outing/Leave -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/outing1.php" method="post">
                     <h4 class=" mt-2 h4">Outing/Leave Entry</h4>
                     <button name="outing" class="btn btn-outline-primary btn-sm mt-4">Apply Leave</button>
                  </form>
               </div>
            </div>
         </div>

         <!-- Fee Details -->
         <div class="col-md-3">
            <div class="card shadow-lg">
               <div class="card-body">
                  <form action="../HomePage/addFeesData1.php" method="post">
                     <h4 class=" mt-2 h4">Add Fee Details</h4>
                     <button name="addFee" class="btn btn-outline-primary btn-sm mt-4">Add Fee</button>
                  </form>
               </div>
            </div>
         </div>
         
      </div>
   </div>   


    <hr class="my-5">
   
         <h1 class="homeh1 mb-5">Authority Actions</h1>

   
           <div class="row g-4 mt-4 mb-5">
              <div class="col-md-10 offset-md-1">
                   <div class="row g-4">
       

                      <!-- Change College Token-->
                       <div  class="col-md-3">
                          <div class="card shadow-lg">
                               <div class="card-body">
                               <form action="../MainAuthority/changeCollegeToken1.php" method="post" >
                                    <label > <h4 class=" mt-2 h4">Change College Token </h4></label> <br>
                                    <button name="outing" class="btn btn-outline-primary mt-4">Change College Token</button>
                               </form>
                              </div>
                          </div>
                       </div>

                        <!-- Update Fees-->
                         <div class="col-md-3">
                              <div class="card shadow-lg">
                                    <div class="card-body">
                                        <form action="../MainAuthority/updateFees1.php" method="post" >
                                             <label > <h4 class=" mt-2 h4">Update Fees</h4></label> <br>
                                             <button name="feetype" class="btn btn-outline-primary mt-4">Update Hostel Fees</button>
                                        </form>
                                     </div>
                              </div>
                         </div>

                      <!-- updatePassword -->
                           <div class="col-md-3">
                                 <div class="card shadow-lg">
                                        <div class="card-body">
                                              <form action="../MainAuthority/updatePassword1.php" method="post" >
                                                   <label > <h4 class=" mt-2 h4">Update Authority Password  </h4></label> <br>
                                                   <button name="updatePassword" value="mess" class="btn btn-outline-primary mt-4">Update Password </button>
                                              </form>
                                        </div>
                                 </div>
                           </div>


                      <!-- Show Hostel Summary -->
                        <div class="col-md-3">
                              <div class="card shadow-lg">
                                     <div class="card-body">
                                           <form action="../MainAuthority/ShowHostelSummary.php" method="post" >
                                                <label > <h4 class=" mt-2 h4">Hostel Summary </h4></label> <br>
                                                <button name="ShowHostelSummary" value="mess" class="btn btn-outline-primary mt-4">ShowHostelSummary</button>
                                           </form>
                                   </div>
                              </div>
                        </div>
               
               
             </div>
      </div>   
</div>

</body>


 <?php
          include("../Storage/Footer/Footer1.html");
    ?>