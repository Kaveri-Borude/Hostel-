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
   <title>viewStudent.php</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>

   <style>
    

    
.bm_info {
    display: flex;                  
    justify-content: space-between; 
    gap: 25px;                      
    margin: 30px auto;
    max-width: 1200px;              
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #333;
    justify-content:space-between;
}

.bm_info_heading {
    font-size: 20px;
    font-weight: bold;
    color: #1a73e8;
    margin-bottom: 12px;
    border-bottom: 2px solid #1a73e8; 
    padding-bottom: 6px;
   
    letter-spacing: 0.5px;
}
.bm_info_heading_1{
    font-size: 20px;
    font-weight: bold;
    color: #1a73e8;
    margin-bottom: 12px;
    border-bottom: 2px solid #1a73e8; 
    width:20%;
    padding-bottom: 6px;
    margin-left:5%;
    letter-spacing: 0.5px;

}

   .basic_info {
   
    width: 400px;              
    /* margin: 20px auto;          */
    padding: 15px;
    border: 1px solid #ccc;   
    border-radius: 12px;        
    box-shadow: 0 6px 12px rgba(0,0,0,0.12); 
    font-family: 'Segoe UI', Arial, sans-serif;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    justify-content:space-evenly;
}

.basic_info:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.18);
}

.basic_info img {
    margin-right:20% !important;
    margin-top:10px;
    border-radius: 8px;       
    margin-bottom: 12px;
     width: 370px;
   
}

/* Student info rows */
.info {
    margin: 8px 0;             
    font-size: 15px;
    color: #2c3e50;             
    text-align: left;      
    padding: 6px 10px;
    background: #fff;          
    border-radius: 6px;
    border: 1px solid #e0e0e0; 
    
}

.info:hover {
    background: #f0f8ff; 
}

.main_info{
    margin-right:10%;
    /* width:400px; */
    border-left: 1px solid  #008080;
    padding-left:10%;
    
}
.smi{
    /* margin-top:10%; */
}


.pother_info{
     display: flex;                  
    justify-content: space-between; 
    gap: 25px;                      
    margin: 30px auto;
    max-width: 1200px;              
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #333;
    justify-content:space-between;
}

.po_info_heading{
     font-size: 20px;
    font-weight: bold;
    color: #1a73e8;
    margin-bottom: 12px;
    
    padding-bottom: 6px;
   
    letter-spacing: 0.5px;
}
.po_info{
      margin-right:20% !important;
      margin-right:12%;
    /* width:400px; */
    border-left: 1px solid  #008080; ;
    padding-left:10%;
}
.txt{
    font-weight:bold;
    
}

.update_h3{
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

.card{
    border-radius: 12px !important;
}

.viewsize{
    font-size:20px;
}
.View_h1{
    letter-spacing: 1px; 
    color:  #00008B;
    text-align: center; 
    margin: 0 auto; 
    font-weight:bold;
    
}


   </style>
</head>

    <div class="container col-10 offset-1 mt-2">

    <?php


            function viewStudent($con,$sid){
                $query = "Select * from student_data Where sId=$sid";
                $result = $con->query($query);

                if($result != null){
                    // echo "<div class='bm_info_heading_1'>
                    //             //    Student Basic Details <br>
                    //                </div>";

                 echo " <h1 class='View_h1 mb-5'> Student Profile </h1>";
                 echo"<hr>" ;
                   

                 echo"<div class='bm_info'>";

                           
                           echo "<div class='basic_info'>";                                    
                               foreach( $result as $res){
                                   echo "<img src='data:image/jpeg;base64,".base64_encode($res['sPhoto'])."' width='280px' height='290px'/><br>";
                                   echo "<div class='info viewsize'> <strong >Student Id :  </strong>", $res['sId'],"</div>";
                                   echo "<div class='info viewsize'> <strong >Student Name :  </strong>", $res['sName'],"</div>";                            
                               } 
                           echo" </div> ";

                        //   echo" <vr>";

                           echo "<div class='main_info'>";   
                           echo "<div  class='bm_info_heading smi '>Student Main Information</div><br> ";                   
                               foreach( $result as $res){
                                   echo "<div class='viewsize'><td> <strong >Student Course :  </strong>", $res['sCourse'],"</td></div>";    echo"<br>";  
                                   echo "<div class='viewsize'><td> <strong> Course Year :  </strong>", $res['sCYear'],"</td></div>";        echo"<br>";  
                                   echo "<div class='viewsize'><td> <strong> Contact Number : </strong> ", $res['sContactNo'],"</td></div>"; echo"<br>";  
                                   echo "<div class='viewsize'><td> <strong> Student Email : </strong>", $res['sEmail'],"</td></div>";       echo"<br>";  
                                   echo "<div class='viewsize'><td> <strong> Student Birth Date : </strong> ", $res['sDOB'],"</td></div>";  echo"<br>";  
                                   echo "<div class='viewsize'><td> <strong> Student Address :  </strong>", $res['sAddress'],"</td></div>";echo"<br>";                                                   
                               } 
                           echo" </div>";
                echo" </div>";

                        echo" <hr>";

                    echo"<div class='pother_info'>";

                              echo "<div class='personal_info'>";  
                               echo "<div  class='po_info_heading'>Student Peronal Information</div> <br>";                                  
                                  foreach( $result as $res){
                                      echo "<div class='viewsize'><td><strong > Father Name :</strong> ", $res['sFatherName'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong > Mother Name : </strong>", $res['sMotherName'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong >Father Contact Number :</strong>", $res['sFatherContact'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong > Mother Contact Number : </strong>", $res['sMotherContact'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong >Father Occupation :</strong> ", $res['sFatherOccupation'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong > Mother Occupation :</strong>", $res['sMotherOccupation'],"</td></div><br>";                    
                                  }
                              echo" </div>";


                               echo " <div class='po_info'>";   
                              echo "<div class='po_info_heading'> Other Details</b> </div> ";
                                  foreach( $result as $res){
                                       echo "<div class='viewsize'><td><strong>Admission Date :</strong>", $res['sAdmissionDate']==null?" -- ":$res['sAdmissionDate'],"</td></div><br>";
                                      echo "<div class='viewsize'><td><strong>Room Number  :</strong> ", $res['sRoomNumber']==null?" -- ":$res['sRoomNumber'],"</td></div><br>";                     
                                  } 
                                  echo" </div>";

                    echo" </div>";
                         }
                      }
            
            if(isset($_GET['view'])){           
                $con = connect();
                $sid = $_GET['view'];
                $_SESSION["sId"] = $sid;
                viewStudent($con,$sid);           
            }
            else{
                echo " No View";
            }
  
            $sid=$_SESSION["sId"];
    
   echo "<br><hr>
     <h3 class='update_h3'>Update Student Information</h3>
         <div class='row g-4 mt-4'>
            <div class='col-md-10 offset-md-1'>
                <div class='row g-4'>

        
     
          
               <!-- Student Details -->
                 <div class='col-md-4'>
                           <div class='card shadow-lg'>
                                 <div class='card-body'>
                                    
                                                <form action='updateStudent1.php' method='post' >
                                                    <label> <h4 class='mt-2'>Update Student's Information</h4></label> <br>
                                                    <button name='updateStudent' value=$sid class='btn btn-outline-primary mt-4'>updateStudent </button>
                                                </form>
                                 </div>
                            </div>
                  </div>                 

                <!-- Fees Details -->

                 <div class='col-md-4'>
                           <div class='card shadow-lg'>
                                 <div class='card-body'>      
                                      <form action='showStudentFees.php' method='post' >
                                          <label> <h4 class='mt-2'>Show Student Fees Information</h4></label> <br>
                                          <button name='showStudentFees' value=$sid class='btn btn-outline-primary mt-4'>showStudentFees</button>
                                     </form>
                         
                                 </div>
                            </div>
                  </div>            
                
                

                <!-- showStudentLeaves -->
                     <div class='col-md-4'>
                           <div class='card shadow-lg'>
                                 <div class='card-body'>      
                                        <form action='showStudentLeaves.php' method='post' >
                                             <label> <h4 class='mt-2'>Show Student Leaves</h4></label> <br>
                                             <button name='showStudentLeaves' value=$sid class='btn btn-outline-primary mt-4'>showStudentLeaves</button>
                                        </form>
                         
                                 </div>
                            </div>
                  </div>            

                
                       
            

                 <!-- showStudentOutings -->
                    <div class='col-md-4'>
                           <div class='card shadow-lg'>
                                 <div class='card-body'>      
                                          <form action='showStudentOutings.php' method='post' >
                                               <label> <h4 class='mt-2'>Show Student Outings</h4></label> <br>
                                               <button name='showStudentOutings' value=$sid class='btn btn-outline-primary mt-4'>showStudentOutings</button>
                                          </form>
              
                                 </div>
                            </div>
                  </div>            


                
                        

                 <!-- showAllComplaints -->
                
                 <div class='col-md-4'>
                           <div class='card shadow-lg'>
                                 <div class='card-body'>      
                                         <form action='showAllComplaints.php' method='post' >
                                              <label > <h4 class='mt-2'>Show Student Complaints</h4></label> <br>
                                              <button name='showAllComplaints' value=$sid class='btn btn-outline-primary mt-4'>showAllComplaints</button>
                                         </form>
              
                                 </div>
                            </div>
                  </div>            
               
       </div>
    </div>
</div> "  ;    

?>

<?php
    include("../Storage/Footer/Footer1.html");
    ?>