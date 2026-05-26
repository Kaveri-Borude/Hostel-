
<head>
   <title>LoginStaff1.php</title>
   <!-- <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css"> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
   <script src="../Storage/js/formSub.js" ></script>

<style>
         
.logins_con{
    /* background-image: url("../../Apply CSS/main/bg.png"); */
    /* background-color: #f3fbfb; */
    background-repeat: no-repeat;
  background-size: cover;
  flex: 0 0px;                  
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 90%;
  width:100% !important
}         
.s_login_con{
    width: 100%;
    max-width: 500px;
    padding: 32px 28px 40px;
    border-radius: 14px;
    border:2px solid black;
    border: 1px solid rgba(255, 255, 255, 0.4);
    margin-top:5vh;
    margin-left:70vh;
     box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.s_login_bttn{
    align-items: center;
    margin-left:22vh;
    margin-bottom:0vh;
}


.con:hover{
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.25);
}
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* keeps it above other elements */
}
#s_login_heading{
        margin-top:10vh;
         margin-left:84vh;
         color : #00008B;

}

#s_login_usr, #s_login_psw{
        margin-top:3vh;
}

.s_login_con input{
        border:1px solid skyblue;
        background-color: rgba(255, 255, 255, 0.2); 
    /* color: #00008B;  */
    color : #00008B;
    border: 1px solid rgba(135, 206, 235, 0.6); /* subtle skyblue border */
    padding: 10px;
    backdrop-filter: blur(4px); /* optional: adds glassy effect*/
}

.s_login_luser{
        font-size:3vh;
        color: #00008B;
}

.s_login_con:hover{
          box-shadow: 0 0 15px rgba(0,0,0,0.3);
}

#s_login_psw:hover{
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

#s_login_usr:hover{
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

</style>

</head>
 <?php      
            include("../Storage/Navbars/navbarMain.php");
         

     ?>     
<div class="logins_con"> 
        <h1 id="s_login_heading"> Staff Login Form  </h1> 
        <div class="col-10 offset-1 mt-5 ">
         <hr>
</div> 
        <div class="s_login_con">

                <form id="loginStaff">
                        <Label for='usr' class=" form-label s_login_luser "><b>Enter Username :</b></Label> 
                        <input type='text' name='usr' id='s_login_usr' class="form-control">
                        <br><br>
                        <Label for='psw' class="form-label s_login_luser"><b>Enter Password :</b></Label> 
                        <input type='password' name='psw' id='s_login_psw' class="form-control">  
                        <br><br>                 
                        <button name='sub' class="s_login_bttn btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button>
                        <!-- <a href="staffForgotPassword.php">Forgot Password</a> -->
                </form>

        </div>

</div>
</html>

 <?php
        include("../Storage/Footer/Footer1.html");
    ?>