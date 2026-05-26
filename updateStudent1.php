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
    <script src="../Storage/js/formSub.js" ></script>

    <style>
      
.updatestud_con {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  margin-top: 40px;
}


.updatestud_form {
  background: #f9fdfc;            
  max-width: 700px;                
  width: 100%;
  padding: 25px 30px;              
  border-radius: 12px;
  border: 1px solid #008080;        
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  font-family: 'Segoe UI', Arial, sans-serif;
}


.updatestud_form .form-label {
  font-weight: 600;
  color: #004d4d;
  margin-bottom: 6px;
  display: block;
}


.updatestud_form .form-control,
.updatestud_form .form-select {
  border-radius: 8px;
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 18px;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.updatestud_form .form-control:focus,
.updatestud_form .form-select:focus {
  border-color: #1a73e8;
  box-shadow: 0 0 6px rgba(26,115,232,0.3);
}


.updatestud_form label:not(.form-label) {
  font-size: 18px;
  font-weight: bold;
  color: #1a73e8;
  margin-top: 20px;
  display: block;
}

.updatestud_form button {
  
  background-color: #008080;
  color: #fff;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  padding: 10px 20px;
  margin-top: 20px;
  display: block;       
    margin: 20px auto 0;  


}

.updatestud_form button:hover {
  background-color: #006666;
}

    </style>
</head>

<?php
      if(isset($_POST['updateStudent'])){   
        $con = connect(); 
        $sId = $_POST['updateStudent'];  

          $query = 'Select * from student_data Where sId='.$sId;
          $result1 = $con->query($query);

       
        $res = $result1->fetch_assoc();
        
        echo"<div class='updatestud_con mt-5'>";
          // echo '<div class="col-10 offset-1 mt-5"><br>';  

          //  echo"<div class='display'>";          
              echo "<br><form  id='updateStudent' class='updatestud_form' enctype='multipart/form-data' >

                
                <label for='sId' class='form-label' >Student Id : </label> 
                <input type='text' class='form-control me-5 ' name='sId' id='sId' value='".$res['sId']."' readonly >

                <label for='sname' class='form-label'>Edit Student Name : </label> 
                <input type='text'  class='form-control me-5' name='sname' id='sname' value='".$res['sName']."'>
                <br>";

                 echo "<img src='data:image/jpeg;base64,".base64_encode($res['sPhoto'])."' width='280px' height='290px'/><br><br>
                  <label for='sphoto' class='form-label'>Upload Student Photo : </label> 
                  <input type='file'  class='form-control' name='sphoto' id='sphoto'  >
                  <br>



                 <label for='scourse'  class='form-label' value='".$res['sCourse']."'>Select Your Course : </label>
                  <select name='scourse' id='scourse' class='form-select'>
                     <option value='BCA'>BCA</option>
                     <option value='Bsc'>Bsc Home Science</option>
                  </select>            
                <br>


                 <label for='scyear' class='form-label'>Select the year in which you are in : </label> 
                  <select name='scyear' id='scyear' class='form-select' value='".$res['sCYear']."'>
                     <option value='FY'>First Year</option>
                     <option value='SY'>Second Year</option>
                     <option value='TY'>Third Year</option>
                  </select>
                <br>



                <label >Fill student Contact Details :</label><br>


               <label for='scontactno' class='form-label'>Enter Student Contact Number : </label> 
               <input type='number' name='scontactno'  class='form-control' id='scontactno' pattern='[0-9]{10}' value='".$res['sContactNo']."' class='upsCon' >
               <br><br>
               <label for='semail' class='form-label'>Enter Student Email : </label> 
               <input type='email'   class='form-control' name='semail' id='semail' value='".$res['sEmail']."'>
               <br><br>
               <label for='saddress' class='form-label'>Enter Student Address : </label> 
               <input type='text' class='form-control'  name='saddress' id='saddress' value='".$res['sAddress']."'>
               <br>

                <label>Fill student Personal Details :</label><br> 

               <label for='sdob' class='form-label'>Enter Student Date of Birth : </label> 
               <input type='date'  class='form-control'  name='sdob' id='sdob' value='".$res['sDOB']."' >
               <br>
               <label for='sfname' class='form-label'>Enter Student Father Name : </label> 
               <input type='text'  class='form-control'  name='sfname' id='sfname' value='".$res['sFatherName']."' >
               <br>
               <label for='smname' class='form-label'>Enter Mother Name : </label> 
               <input type='text'  class='form-control'  name='smname' id='smname' value='".$res['sMotherName']." '>
               <br>
               <label for='sfcontact' class='form-label'>Enter Contact Number of Father : </label> 
               <input type='number'  class='form-control'  name='sfcontact' id='sfcontact' pattern='[0-9]{10}' value='".$res['sFatherContact']."' >
               <br>
               <label for='smcontact' class='form-label'>Enter Contact Number of Mother : </label > 
               <input type='number'  class='form-control' name='smcontact' id='smcontact' pattern='[0-9]{10}' value='".$res['sMotherContact']."' >
               <br>
               <label for='sfoccupation' class='form-label'>Enter Occupation of Father : </label> 
               <input type='text'  class='form-control' name='sfoccupation' id='sfoccupation' value='".$res['sFatherOccupation']."'>
               <br>
               <label for='smoccupation' class='form-label'>Enter Occupation of Mother : </label> 
               <input type='text'  class='form-control' name='smoccupation' id='smoccupation' value='".$res['sMotherOccupation']."'>
               <br>   
              
               <label for='sRNo' class='form-label'>Edit Room Number : </label> 
               <input type='text'  class='form-control' name='sRNo' id='sRNo' value='".$res['sRoomNumber']."' >
               <br>

               <label for='sAdm' class='form-label'>Enter Admission Date : </label> 
               <input type='date'   class='form-control' name='sAdm' id='sAdm' value='".$res['sAdmissionDate']."'>
               <br>
                 
                
                                 
                <button name='updateStudent' value='.$sId.'>Submit</button>
                
      
                
           </form>";
          echo"</div>";
               
       echo"</div>";

   
          } 


           ?>
    </div>

    
<?php
    include("../Storage/Footer/Footer1.html");
    ?>
