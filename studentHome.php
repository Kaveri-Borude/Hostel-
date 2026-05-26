<head>
    <title>studentHome.html</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<style>
     .card-body {
         background-color: #f1f8f6;
         border-radius: 12px;
         border: 2px solid #008080;
         padding: 12px;
         text-align: center;
         height:20vh;
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

.container-fluid{
    margin-bottom:60px;
}
.justify{
    text-align:center;
}

                /* ===== Hostel Rules Section ===== */
          .rules-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 25px;
            background-color: #f9f9f9;
            border: 2px solid #008080;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
          }

          .rules-container h1 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #123673;
            margin-bottom: 20px;
          }

          .rules-container ol {
            padding-left: 20px;
          }

          .rules-container li {
            margin-bottom: 20px;
          }

          .rules-container strong {
            color: #008080;
            font-size: 18px;
          }

          .rules-container p {
            margin: 5px 0;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
          }



           /* ===== FAQ Section ===== */
          .faq-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 25px;
            background-color: #f1f8f6;
            border: 2px solid #456882;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
          }

          .faq-container h1 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #123673;
            margin-bottom: 25px;
          }

          .faq-item {
            margin-bottom: 20px;
            padding: 15px;
            border-left: 4px solid #008080;
            background-color: #fff;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
          }

          .faq-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
          }

          .faq-item h2 {
            font-size: 18px;
            font-weight: 600;
            color: #456882;
            margin-bottom: 8px;
          }

          .faq-item p {
            font-size: 15px;
            line-height: 1.6;
            color: #333;
          }
          
          .Student_h1{
             text-align: center; 
             color:  #00008B;     
             font-weight: 900;   
             letter-spacing: 1px; 
             font-weight:bold;
            
          }
</style>
<body>
      <?php    
          include("../Storage/Navbars/navbarStudentHome.php");
      ?>

     <div class="Student_h1 mt-5 ">
        <h1>
            Student Actions
        </h1>
     </div>
     <div class="container-fluid mt-4 ">
      <!-- <h1 class="page-title homeh1">Attendance </h1> -->

   
           <div class="row g-4 mt-4">
            <div class="col-md-10 offset-md-1">
                <div class="row g-4">

            <!-- Add Visitor Details -->
                <div class="col-md-4 w-50" >
                        <div class="card shadow-lg">
                                <div class="card-body">
                                     <form action="../StudentHome/addVisitor1.php" method="post" >
                                           <label > <h4>Fill Visitor Information</h4></label> <br>
                                           <button name="show" class="btn btn-outline-primary mt-4">Show Details of Students</button>
                                     </form>
                                 </div>
                        </div>
                </div>
                
            
            <!-- Add Visitor Details -->
             <div class="col-md-4 w-50" >
                    <div  class="card shadow-lg">
                            <div class="card-body">
                                  <form action="../StudentHome/addComplaint1.php" method="post" >
                                        <label > <h4> Add Complaints</h4></label> <br>
                                        <button name="show" class="btn btn-outline-primary mt-4"> Add Complaint</button>
                                  </form>
                             </div>
                    </div>
             </div>
                

         </div>
      </div>
    </div>
 </div>

 <div class="col-md-10 offset-md-1">
 <hr>
</div>


       <div>
          <div class="rules-container">
              <h1>Hostel Rules</h1>
              <ol>
                <li>
                  <strong>General Conduct</strong>
                  <p>Residents must maintain discipline and respect toward staff and fellow students.</p>
                  <p>Loud music, parties, and disruptive behavior are strictly prohibited.</p>
                </li>

                <li>
                  <strong>Timings</strong>
                  <p>Entry and exit are allowed only between <em>6:00 AM to 6:00 PM</em>.</p>
                  <p>Late entries require prior written permission from the warden.</p>
                </li>

                <li>
                  <strong>Cleanliness</strong>
                  <p>Rooms and common areas must be kept clean and tidy.</p>
                  <p>Littering in corridors, bathrooms, or outdoor spaces is not allowed.</p>
                </li>

                <li>
                  <strong>Visitors</strong>
                  <p>Visitors are allowed only during designated hours and must register at the front desk.</p>
                  <p>Overnight stays by guests are not permitted.</p>
                </li>

                <li>
                  <strong>Safety & Security</strong>
                  <p>Residents must carry their hostel ID at all times.</p>
                  <p>Tampering with fire safety equipment or security systems is a serious offense.</p>
                </li>

                <li>
                  <strong>Food & Cooking</strong>
                  <p>Cooking inside rooms is strictly prohibited.</p>
                </li>

                <li>
                  <strong>Prohibited Items</strong>
                  <p>Electrical appliances like heaters or induction cooktops are not allowed in rooms.</p>
                </li>

                <li>
                  <strong>Damages</strong>
                  <p>Any damage to hostel property must be reported and compensated by the resident.</p>
                </li>

                <li>
                  <strong>Attendance</strong>
                  <p>Daily attendance may be taken for safety and accountability.</p>
                </li>

                <li>
                  <strong>Disciplinary Action</strong>
                  <p>Violation of rules may lead to warnings, fines, or cancellation of hostel accommodation.</p>
                </li>
                <li>
                   <strong>Ragging</strong>
                  <p>Ragging in any Form is strictly Prohibited.</p>
                </li>
              </ol>
            </div>


            <div class="faq-container">
              <h1>Frequently Asked Questions</h1>
              <div class="faq-item">
                <h2>1. What are the hostel timings?</h2>
                <p>Entry and exit are allowed only between <em>6:00 AM to 6:00 PM</em>. Late entries require prior permission from the warden.</p>
              </div>

              <div class="faq-item">
                <h2>2. Can visitors stay overnight?</h2>
                <p>No, overnight stays by guests are not permitted. Visitors are allowed only during designated hours and must register at the front desk.</p>
              </div>

              <div class="faq-item">
                <h2>3. Is Wi-Fi available in the hostel?</h2>
                <p>Yes, high-speed Wi-Fi connectivity is available throughout the hostel premises.</p>
              </div>

              <div class="faq-item">
                <h2>4. What facilities are provided in the rooms?</h2>
                <p>Rooms are equipped with beds, study tables, chairs, and storage facilities. Each room is well-ventilated and maintained regularly.</p>
              </div>

              <div class="faq-item">
                <h2>5. How do I report maintenance issues?</h2>
                <p>Residents can report issues directly to the hostel office or through the online student portal. Maintenance staff will address them promptly.</p>
              </div>
            </div>
          </div>



   </body>
</html>
 <?php
        include("../Storage/Footer/Footer1.html");
?>