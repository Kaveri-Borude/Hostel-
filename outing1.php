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
    <title>outing1.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="../Storage/js/formSub.js" ></script>

    <style>


.outing_com {
  position: relative;   
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 90%;
  width: 100% !important;
  margin-bottom: 1%;
  overflow: hidden;
}

.outing_com::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("g-outing.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  filter: blur(6px);   
  z-index: 0;          
}

.outing_inner {
  position: relative;
  z-index: 1;           
  width: 450px;         
  background: rgba(0,0,0,0.4); 
  padding: 20px;
  border-radius: 8px;
}

.outing_form{
 color:white;
 font-weight:bold;
 /* margin-top:1%;  */
 width:400px;
}


#outing_h2{
     
       background: #64a2e0;
               color: white;
               padding: 5px;
               border-radius: 6px 6px 0 0;
               max-width: 600px;   
               width: 100%;
               text-align: center; 
               margin: 0 auto;     
               font-weight: 900;   
               letter-spacing: 1px; 
}
.outing_label{
     font-size:25px;
}
.outing_input{
      box-shadow: 0 0 10px rgba(0,0,0);
}

    </style>
</head>

    

  
<h2  class="text-center">Fill Outing Information</h2><hr>
<div class="outing_com  d-flex justify-content-center ">


    <div class=" outing_inner ">
                     

           <form id="OutingForm" class="needs-validation outing_form">
                <div class="col">
                     <label for="sId" class="form-label outing_label">Enter Student Id : </label>
                     <input type="text" name="sId" id="sId"  class="form-control outing_input" required >
                </div> <br>

                 <label for="oReason" class="outing_label" >Select Reason : </label>
                  <select name="oReason"  class="form-select outing_input" id="oReason">
                     <option value="outing">Outing</option>
                     <option value="leave">Leave</option>
                  </select>            
                <br>

                <div class="col">
                     <label for="oPlace"class="form-label outing_label">Enter Outing Place : </label>
                     <input type="text" name="oPlace" id="oPlace" class="form-control outing_input" required >
                </div><br><br>
                
                  <button type="submit" name="sub" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button>
           </form>
    </div>



</div> 
          
    <?php
          include("../Storage/Footer/Footer1.html");
    ?>