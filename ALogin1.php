
<head>
   <title>LoginStaff1.php</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>
</head>
<style>
        .Authority_login_con{
                  width: 100%;
                  max-width: 500px;
                  padding: 32px 28px 40px;
                  border-radius: 14px;
                  border: 1px solid rgba(0, 0, 0, 0.4);
                  margin-top: 5vh;
                  margin-left: 70vh; 
                  border: 1px solid #008080;
                  border-radius: 12px;
                  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                   background-color:#f1f8f6;
                   height:56%;
        }

        .Authority_login_btn{
                margin-left: 22vh;
                /* margin-bottom: 0px; */
                 display: block;
                margin: 0 auto;
                margin-left:20%;
                width: 60%;  

        }

        .Authority_login_con:hover{
                box-shadow: 0 18px 45px rgba(0, 0, 0, 0.25);
        }

        .Authority_login_h1{
                margin-top: 10vh;
                margin-left: 90vh;
                color : #00008B;
        }
        .Authority_login_input{
                    border: 1px solid #008080 !important;
                    
        }
        .Authority_login_label{
                font-weight:bold;
                margin-bottom: 8px; 
        }




</style>

<?php
        include("../Storage/Navbars/navbarMain.php");
?>    
        <h1 class="Authority_login_h1 ">Login Here</h1>
        
<div  class="Authority_login_con">

        
                <div class="Authority_login_container mb-5">
                         <form id="ALogin">
                                <Label for='usr' class="Authority_login_label">Enter Username :</Label> <br>
                                <input type='text' name='Ausr' id='usr' class="form-control Authority_login_input ">
                                 <br>
                                <Label for='psw' class="Authority_login_label">Enter Password :</Label>  <br>
                                <input type='password' name='Apsw' id='psw' class="form-control Authority_login_input ">  
                                 <br> 
                                <Label for='AToken' class="Authority_login_label">Enter College Token :</Label>  <br>
                                <input type='password' name='AToken' id='AToken' class="form-control Authority_login_input ">  <br><br>              

                                <button name='sub' type="submit" class=" Authority_login_btn btn btn-primary ">Login</button>
                         </form>
                </div>
       

</div>


</html>


<?php
    include("../Storage/Footer/Footer1.html");
    ?>