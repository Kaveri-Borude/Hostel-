

<head>
    <title>addVisitor1.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="../Storage/js/formSub.js" ></script>

    <style>
          .sadd_visitor_con{
               display:flex;
               justify-content:center;

          }

          .sadd_visitor_form{
               background :#f4f8fc;
           max-width: 600px;   
           width: 100%; 
           padding-left:15px;
           background-color:#f1f8f6;
          border-radius: 12px;
           border: 1px solid #008080;
           box-shadow: 0 0 10px rgba(0,0,0,0.2);

          }
          .sadd_visitor_h2{
               background: #74cfcfc5;
               color:  #00008B;
               padding: 5px;
               border-radius: 6px 6px 0 0;
               max-width: 600px;   
               width: 100%;
               text-align: center; 
               margin: 0 auto;     
               font-weight: 900;   
               letter-spacing: 1px; 
          }
          .sadd_visitor_label{
               font-weight:bold;
               margin-bottom:8px;
          }
          /* .sadd_visitor_input{
               width:57%;
          } */
          #vRel{
               width:65%;
          }
          #vAddress{
               width:65%;
          }
          #vContact{
             width:54%;  
          }
          #vName{
               width:67%;
          }

          #sName{
               width:60%;
          }

          #sid{
               width:69%;
          }

          .sadd_visitor_input:hover{
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
          }
          .sadd_visitor_form:hover{
                box-shadow: 0 0 15px rgba(0,0,0,0.3);
          }
    </style>

      <?php      
         include("../Storage/Navbars/navbarStudentHome.php");
     ?>
</head>

    <div class="text-center mt-5 sadd_visitor_h2">
           <h2>Add Visitors Information</h2>
    </div>
    <div class="col-10 offset-1 mt-3 sadd_visitor_con mb-5">
          
           <form id="addVisitor" class="needs-validation sadd_visitor_form">
               
                <div class="d-flex align-items-center mb-3"> 
                     <label for="sid" class=" me-3 col-form-label  sadd_visitor_label mt-4">Enter Student Id : </label>
                     <input type="text" name="sId" id="sid" class=" form-control sadd_visitor_input   mt-4" required >
                </div> <br>

                <div class="d-flex align-items-center mb-3">
                     <label for="sName"class=" me-3 col-form-label sadd_visitor_label">Enter Student Full Name : </label>
                     <input type="text" name="sName" id="sName" class="form-control sadd_visitor_input" required >
                </div><br>

                <div class="d-flex align-items-center mb-3">
                     <label for="vName"class=" me-3 col-form-label  sadd_visitor_label">Enter Visitor Name : </label>
                     <input type="text" name="vName" id="vName" class="form-control sadd_visitor_input" required >
                </div><br>

                <div class="d-flex align-items-center mb-3">
                     <label for="vContact"class=" me-3 col-form-label  sadd_visitor_label">Enter Visitor Contact Number : </label>
                     <input type="text" name="vContact" id="vContact" class=" form-control sadd_visitor_input" required >
                </div><br>

                <div class="d-flex align-items-center mb-3">
                     <label for="vAddress"class=" me-3 col-form-label  sadd_visitor_label">Enter Visitor Address : </label>
                     <input type="text" name="vAddress" id="vAddress" class="form-control sadd_visitor_input" required >
                </div><br>

                <div class="d-flex align-items-center mb-3">
                     <label for="vRel"class=" me-3 col-form-label  sadd_visitor_label">Enter Visitor Relation : </label>
                     <input type="text" name="vRel" id="vRel" class="form-control sadd_visitor_input" required >
                </div><br>
                 <div class="text-center mb-5">
                     <button type="submit" name="sub"  class="btn btn-primary d-grid gap-2 col-6 mx-auto ">Submit</button>
                 </div>
           </form>
    </div>

  <?php
    include("../Storage/Footer/Footer1.html");
    ?>

