
<head>
    <title>addComplaint.php</title>   
    <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <script src="../Storage/js/formSub.js" ></script>
    <style>
          
          .stud_ctxt{
               background-color: #f4f8fc;
          }
          .stud_clabel {
               display: block;
               background: #7da0c4;
               color: white;
               padding: 5px;
               border-radius: 6px 6px 0 0; 
               }

    </style>
</head>

     <?php      
          include("../Storage/Navbars/navbarStudentHome.php");
     ?>
    <div class="d-flex justify-content-center mt-5 stud_cform ">
           <form id="addComplaint">
               
                <div class="col  text-center">
                     <label for="cComment" class="form-label stud_clabel"><h2>Add Your Comment </h2></label>
                     <textarea name="cComment" id="cComment"  rows="14" cols="60" class="stud_ctxt"></textarea>
                </div><br>
                <div class="d-flex justify-content-center">
                         <button type="Submit" name="sub" class="btn btn-primary btn-lg">Submit</button>
                 </div>
           </form>
    </div>
<?php
    include("../Storage/Footer/Footer1.html");
    ?>

