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
     <title>Change College Token</title>
     <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="../Storage/js/formSub.js" ></script>

     <style>

      .change_clg_tcon{
               
                width: 600px;
                padding: 32px 28px 40px;
                border: 1px solid #008080;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                background-color: #f1f8f6;
                margin: 0 auto;   
                height: 55%;    
      }

      .change_clg_th2{
                margin-top: 10vh;
                margin-left: 85vh;
                color : #00008B;
      }

      .change_clg_tbtn{
             margin-left: 22vh;
             margin-bottom: 0;
      }

      .change_clg_tcon:hover{
             box-shadow: 0 18px 45px rgba(0, 0, 0, 0.25);

      }
      .change_clg_tlabel{
                font-weight:bold;
                margin-bottom: 8px; 
      }
      .change_clg_tinput{
         border: 1px solid #008080 !important;
      }

      .change_clg_tinput:hover{
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
      }


      </style>
</head>

  <div class="change_clg_th2">
    
      <h3>Change College Token</h3>

  </div>
   <div class="container col-10 offset-1 ">
         <hr>
    </div>
     <div class="change_clg_tcon mt-4 ">
     
        <form id="changeCollegeToken">
            
            <label for="tokenNo" class="change_clg_tlabel">Enter Previous College Token Number : </label>
            <input type="password" name="prevTok" id="tokenNo" class="form-control change_clg_tinput" required>
            <br>
            <label for="tokenNo" class="change_clg_tlabel">Enter New College Token Number : </label>
            <input type="password" name="newTok1" id="tokenNo" class="form-control change_clg_tinput" required>
            <br>
            <label for="tokenNo" class="change_clg_tlabel">Retype New College Token Number : </label>
            <input type="password" name="newTok2" id="tokenNo" class="form-control change_clg_tinput" required>
            <br>
            <button type="submit" class="change_clg_tbtn btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button>
        </form>
</div>
        
<?php
    include("../Storage/Footer/Footer1.html");
    ?>