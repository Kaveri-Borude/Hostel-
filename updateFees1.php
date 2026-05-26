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
     <title>UpdateFees1.php</title>
     <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="../Storage/js/formSub.js" ></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">


     <style>
      .update_h3{
          background: #62bdbd;
               /* color: white; */
                color:  #00008B;
               padding: 5px;
               border-radius: 6px 6px 0 0;
               max-width: 450px;   
               width: 100%;
               text-align: center; 
               margin: 0 auto;     
               font-weight: 900;   
               letter-spacing: 1px;
      }

      .update_con{
          display:flex;
          justify-content:center;
      }

      .update_form{
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
      .update_input{
          border: 1px solid #008080 !important;
      }

      .update_label{
         font-weight:bold;
      }

      .update_form:hover{
               box-shadow: 0 0 15px rgba(0,0,0,0.4);
      }




     </style>
</head>

   
     <div>
         <h3 class="update_h3 mt-5">Update Hostel/Mess Fees</h3>
     </div>
       
        <div class="col-10 offset-1 mt-2 mb-5 mt-4 update_con">
             <form id="updateFees" class="update_form"> 

                  <label for="tokenNo" class=" form-label update_label">Enter College Token Number : </label>
                  <input type="password" name="Tok"  class="form-control update_input me-4" required>
                  <br>

                   <label for="feeType" class=" form-label update_label">Select Fee Type : </label>
                        <select name="feeType" id="feeType" class="form-select update_input ">
                           <option value="hostel">Hostel</option>
                           <option value="mess">Mess</option>
                        </select>            
                  <br>
                  <label for="tokenNo"  class=" form-label update_label">Set Fees : </label>
                  <input type="number" name="newFee" class=" form-control update_input" required>
                  <br>
                  <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mb-4 mt-4">Submit</button>
             </form>
        </div>
       

         <?php
          include("../Storage/Footer/Footer1.html");
    ?>