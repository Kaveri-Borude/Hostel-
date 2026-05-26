<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>registerNewStaff1.php</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>

   <style>
      /* .NS_Redistr_body{
           background-color: #dcefef;
                       
        background-repeat: no-repeat;
        margin-bottom:2%;
      } */
      .NS_Redistr_h2 {
         text-align: center;
         font-weight: 600;
         color: #1154ba;
         font-size:36px;
         font-weight:bold;
         margin-top:1%;
         margin-bottom:2%;
      }
      .NS_Registr_form {
         background-color:#f1f8f6;
         border-radius: 12px;
         border: 2px solid #008080;
         padding: 30px;
         border-radius: 8px;
         margin: 0 auto; 
         width:600px !important;
      }
      .NS_Registr_label{
        font-size:2.5vh;
        font-weight:bold;
      }

      .NS_Registr_h4{

        color:#000080;
      }

    .NS_Registr_form:hover{
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);

    } 
 
 
   </style>
</head>
   
    <?php      
         include("../Storage/Navbars/navbarMain.php");
     ?>

   <body class="NS_Redistr_body" >
   <div class="Rstaff_container mt-5 mb-5">

      <h2 class=" NS_Redistr_h2">Staff Registration Form</h2>

      <div class="col-lg-8 NS_Registr_form">
         <form id="registerNewStaff" method="post" >
            <div class="mb-3">
               <label for="uName" class="form-label NS_Registr_label">Enter Your Name :</label>
               <input type="text" class="form-control" name="uName" id="uName" placeholder="Firstname Middlename Lastname" required>
            </div>

            <div class="mb-3">
               <label class="form-label NS_Registr_label">Select Your Gender :</label><br>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gen" value="Male" id="male" required>
                  <label class="form-check-label" for="male">Male</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gen" value="Female" id="female">
                  <label class="form-check-label" for="female">Female</label>
               </div>
            </div>

            <div class="mb-3">
               <label for="uEmail" class="form-label NS_Registr_label">Enter Email :</label>
               <input type="email" class="form-control" name="uEmail" id="uEmail" required>
            </div>

            <div class="mb-3">
               <label for="uMoNo" class="form-label NS_Registr_label">Enter Mobile Number :</label>
               <input type="number" class="form-control" name="uMoNo" id="uMoNo" required>
            </div>

            <div class="mb-3">
               <label for="tokenNo" class="form-label NS_Registr_label">Enter the College Token Number :</label>
               <input type="password" class="form-control" name="tokenNo" id="tokenNo" required>
            </div>

            <h4 class="mt-4 mb-4 NS_Registr_h4">Answer the Following Questions</h4>

            <div class="mb-3">
               <label for="mq" class="form-label NS_Registr_label">What is Your Mother's Qualification ? :</label>
               <input type="text" class="form-control" name="mq" id="mq" required>
            </div>

            <div class="mb-3">
               <label for="fq" class="form-label NS_Registr_label">What is Your Father's Qualification ? :</label>
               <input type="text" class="form-control" name="fq" id="fq" required>
            </div>

            <div class="mb-3">
               <label for="fmn" class="form-label NS_Registr_label">What is your father's middle name? :</label>
               <input type="text" class="form-control" name="fmn" id="fmn" required>
            </div>

            <div class="mb-3">
               <label for="ff" class="form-label NS_Registr_label">What is Your Favourite Food :</label>
               <input type="text" class="form-control" name="ff" id="ff" required>
            </div>

            <h4 class="mt-4 mb-4 NS_Registr_h4">Create a Username & Password</h4>

            <div class="mb-3">
               <label for="staffUserName" class="form-label NS_Registr_label">Create a Username</label>
               <input type="text" class="form-control" name="staffUserName" id="staffUserName" required>
            </div>

            <div class="mb-3">
               <label for="staffPsw" class="form-label NS_Registr_label">Create a Password</label>
               <input type="password" class="form-control" name="staffPsw" id="staffPsw" required>
            </div>

            <div class="text-center">
               <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
         </form>
      </div>
   </div>

   </body>

   </html>



 <?php
        include("../Storage/Footer/Footer1.html");
    ?>