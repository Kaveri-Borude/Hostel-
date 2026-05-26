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
    <title>addFeesData.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="../Storage/js/formSub.js" ></script>
    <style>
     .sadd_fee_con{
          display:flex;
          justify-content:center;
     }
     .sadd_fee_form{
          
           max-width: 600px;   
           width: 100%; 
           padding-left:15px;
           background-color:#f1f8f6;
            border-radius: 12px;
            border: 1px solid #008080;
           box-shadow: 0 0 10px rgba(0,0,0,0.2);
     }
     .sadd_fee_h2{
               /* display: bloc; */
               /* background: #7da0c4; */
                background: #74cfcfc5;
              
               padding: 5px;
               border-radius: 6px 6px 0 0;
               max-width: 600px;   
               width: 100%;
               text-align: center; 
               margin: 0 auto;     
               font-weight: 900;   
               letter-spacing: 1px; 
                color:  #00008B;
     }
     .sadd_fee_label{
        font-weight:bold;
        margin-bottom:8px;
     }
     .sadd_fee_input {
        width: 95%;   
     }
     .sadd_fee_form:hover{
           box-shadow: 0 0 15px rgba(0,0,0,0.3);
     }
     .sadd_fee_input:hover{
           box-shadow: 0 0 10px rgba(0,0,0,0.3);
     }

    </style>
</head>

    
   

       
        <div class="search"> <h4 style="margin-top:5px; text-align: center" class="takeAttendence"> Add Student Fees </h4><hr>
       <hr>
    <div class="sadd_fee_con mb-5">

           <form id="addFeesData" class="needs-validation sadd_fee_form">

               <div class="d-flex align-items-center mb-3">
                     <label for="sId" class="me-3 col-form-label sadd_fee_label mt-4">Enter Student Id :</label>
                    <input type="text" name="sId" id="sId" class="form-control w-50 mt-4" required>
               </div>

                <div class="col">
                     <label for="sName" class="col-form-label  sadd_fee_label">Enter Student Name : </label>
                     <input type="text" name="sName" id="sName" class="form-control sadd_fee_input" required >
                </div> <br>

                <div class="col">
                     <label for="feeType"class="form-labe  sadd_fee_label">Select Fee Type :  </label>
                     <select name="feeType" id="feeType">
                          <option value="hostel">Hostel</option>
                          <option value="mess">Mess</option>
                     </select>
                </div><br>

                <div class="col">
                     <label for="tName"class="form-label  sadd_fee_label">Enter The Name of Sender : </label>
                     <input type="text" name="tName" id="tName" class="form-control sadd_fee_input" required >
                </div><br>

                <div class="col">
                     <label for="tContact" class="form-label sadd_fee_label ">Enter Contact Number of Sender : </label>
                     <input type="text" name="tContact" id="tContact" class="form-control sadd_fee_input" required >
                </div><br>

                <div class="col">
                     <label for="tDate"class="form-label  sadd_fee_label">Enter Payment Date : </label>
                     <input type="date" name="tDate" id="tDate" class="form-control sadd_fee_input" required >
                </div><br>

                <div class="col">
                     <label for="tUTRNO"class="form-label  sadd_fee_label">Enter The UTR Number : </label>
                     <input type="text" name="tUTRNO" id="tUTRNO" class="form-control sadd_fee_input" required >
                </div><br>
                <div class="col">
                     <label for="tAmount"class="form-label  sadd_fee_label">Enter The Amount : </label>
                     <input type="number" name="tAmount" id="tAmount" class="form-control sadd_fee_input" required >
                </div><br>
                 <div class="text-center mb-5">
                       <button type="submit" name="sub" class="btn btn-outline-primary d-grid gap-2 col-6 mx-auto">Submit</button>

                 </div>
           </form>
    </div>

        </div>
<?php
    include("../Storage/Footer/Footer1.html");
    ?>



