<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

  <title>Staff Forgot Password</title>
  <style>
    #sForgot_pass_body {
      margin: 0;
      padding: 0;
      height: 100vh;               
      display: flex;               
      justify-content: center;      
      align-items: center;        
      background-color: #f9f9f9;  
      font-family: 'Segoe UI', sans-serif;
       background-color: transparent;
    }

    .sForgot_pass_con {
      background-color: #f4f8fc;   
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
      padding: 30px;
      margin-left:35rem;
    }

    .sForgot_pass_con h2{
       text-align: center;
         font-weight: 600;
         color: #1154ba;
         margin-bottom:20px;
    }

     .sForgot_pass_label{
        display:block;
        font-weight:bold;
        margin-bottom:8px;

     }
.btn-container {
  text-align: center;   
  margin-top: 20px;    
}




  </style>
</head>

   <?php      
        include("../Storage/Navbars/navbarMain.php");
     ?>
<body id="sForgot_pass_body">

  <div class="sForgot_pass_con mt-5 mb-5">
    <h2>Staff Password Forgot</h2>
    <form action="staffForgotPassword.php" method="post">
      <label for="mono"  class="form-label sForgot_pass_label">Enter Your Mobile Number :</label>
      <input type="text" name="mono" id="mono" class="form-control">

      <label for="mqual" class="form-label sForgot_pass_label">Enter Your Mother's Qualification :</label>
      <input type="text" name="mqual" id="mqual" class="form-control">

      <label for="fqual" class="form-label sForgot_pass_label">Enter Your Father's Qualification :</label>
      <input type="text" name="fqual" id="fqual" class="form-control">

      <label for="FMName" class="form-label sForgot_pass_label">Enter Your Father's Middle Name :</label>
      <input type="text" name="FMName" id="FMName" class="form-control">

      <label for="FavFood" class="form-label sForgot_pass_label">Enter Your Favourite Food :</label>
      <input type="text" name="FavFood" id="FavFood"class="form-control">

<div class="btn-container">
  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
</div>
    </form>
  </div>

</body>
</html>

<?php
    include("../Storage/Footer/Footer1.html");
    ?>
