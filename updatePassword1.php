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
     <title>Update Password</title>
     <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="../Storage/js/formSub.js" ></script>
     <style>
         .updatepass{
            color:  #00008B;
            text-align: center; 
            font-weight: 900;   
            letter-spacing: 1px;
         }

         .updatepass_con{
               display:flex;
              justify-content:center; 
         }

         .updatepass_form{
               background :#f4f8fc;
                max-width: 450px;   
                width: 100%; 
                padding-left:15px;
                background-color:#f1f8f6;
                border-radius: 12px;
                border: 1px solid #008080;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                  padding: 20px; 
                  padding-right: 25px;  
         }
         .updatepass_input{
            border: 1px solid #008080 !important;
         }

         .updatepass_label{
            font-weight:bold;
         }

         .updatepass_form:hover{
             box-shadow: 0 0 15px rgba(0,0,0,0.4);
         }

     </style>
</head>
  <?php      
     include("../Storage/Navbars/navbarAuthority.php");          
  ?>

   

   <h3 class="updatepass mt-5">Update Password</h3>
     <div class="col-10 offset-1 mt-2 mb-5 mt-4 updatepass_con ">
        
        <form id="updatePassword" class="updatepass_form">            
            <label for="tokenNo" class=" form-label updatepass_label " >Enter College Token Number : </label>
            <input type="password" name="Token" class="form-control updatepass_input" required>
            <br>
            <label for="tokenNo"  class=" form-label updatepass_label">Enter Username : </label>
            <input type="password" name="username" class="form-control updatepass_input" required>
            <br>
            <label for="tokenNo"  class=" form-label updatepass_label">Enter New Password : </label>
            <input type="password" name="newPassord1" class="form-control updatepass_input" required>
            <br>
             <label for="tokenNo"  class=" form-label updatepass_label">Confirm New Password : </label>
            <input type="password" name="newPassord2" class="form-control updatepass_input"  required>
            
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mb-4 mt-4">Submit</button>
        </form>
</div>

               <?php
          include("../Storage/Footer/Footer1.html");
    ?>