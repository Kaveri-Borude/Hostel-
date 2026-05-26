
<head>
   <title>LoginStudent1.php</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
   <script src="../Storage/js/formSub.js"></script>

   <style>
      .stud_login_coninner {
          width: 100%;
          max-width: 500px;
          /* background: linear-gradient(135deg, #f2f4f8, #e9ecf1); */
          padding: 32px 28px 40px;
          border-radius: 14px;
          border: 1px solid rgba(0, 0, 0, 0.4);
          margin-top: 5vh;
          margin-left: 70vh;

      }
      .stud_login_con{
         /* background-image: url("../../Apply CSS/main/bg.png"); */
          background-color: #dcefef;
          background-repeat: no-repeat;
        background-size: cover;
        /* margin-bottom:5%; */
        flex: 0 0px;                  
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 90%;
        width:100% !important
      }

      .stud_login_bttn {
          margin-left: 22vh;
          margin-bottom: 0;
      }

      .stud_login_con:hover {
          box-shadow: 0 18px 45px rgba(0, 0, 0, 0.25);
      }

      #stud_login_heading {
          margin-top: 10vh;
          margin-left: 90vh;
          color : #00008B;
      }

      #sEmail, #sPsw {
          margin-top: 3vh;
          border: 1px solid skyblue;
      }

      .stud_login_luser {
          font-size: 3vh;
      }
      .stud_login_input{
        color: #00008B;
      }

      .stud_login_input{
             background-color: rgba(255, 255, 255, 0.2); 
      }
    .stud_login_coninner:hover{
          box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
     

       .stud_login_input:hover{
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
      }

   </style>
</head>

<?php      
          include("../Storage/Navbars/navbarMain.php");
      

     ?>        
<div class="stud_login_con">

<h1 id="stud_login_heading"> Login Here </h1>
<div class="stud_login_coninner  mb-5 ">
    <form id="loginStudent">
        <label for="sEmail" class="stud_login_luser"><b>Enter Email :</b></label>
        <input type="email" name="sEmail" id="sEmail" class="form-control stud_login_input " required>
        <br><br>
        <label for="sPsw" class="stud_login_luser"><b>Enter Password :</b></label>
        <input type="password" name="sPsw" id="sPsw" class="form-control  stud_login_input" required>
        <br><br>
        <button type="submit" class="stud_login_bttn btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button>
    </form>
</div>
</div>
 <?php
        include("../Storage/Footer/Footer1.html");
    ?>
