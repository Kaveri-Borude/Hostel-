<head>
   <title>RegisternewStudent</title>
   <link rel="stylesheet" href="/KDAJ-PHP/Hostel_Management/Storage/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="../Storage/js/formSub.js" ></script>
   <link rel="stylesheet" href="RegisterNewStudent1.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/boo
tstrap.min.css">

</head>
 <?php    
     include("../Storage/Navbars/navbarMain.php");
     ?> 
<body class="sRegisbody">
  
<div class="col-10 offset-1 mt-5  container">
     
    <form  id="RegisterNewStudent"  enctype="multipart/form-data" class="sRegisForm">

             <div>
      <div><h2 class="open-sans-heading " id="sRegish2"> Fill The Student Details </h2></div>
      <hr>
      <br><br>


      <div class="sRegisform-row form-row  ">
           <!-- <div class="col-md-6 col-sm-12 mb-3"> -->
            
             <div class="form-group1">
               <label class="sRegislabel" id="label1"> Fill The Student Educational Details</label> <br>
     
     
               <label for="sname" class="innerlabel" class="alert alert-danger" role="alert" class="form-label">Enter Student Name : </label>
               <input type="text" name="sname" id="sname" required>
               <br>
     
               <label for="sphoto" class="innerlabel" class="form-label">Upload Student Photo : </label>
               <input type="file" name="sphoto" id="sphoto" class="p-1" required>
               <br>
             </div>
     
             <div class="form-group2">
     
                 <label for="scourse" class="innerlabel" class="form-label">Enter the Course Name of the Student : </label>
                 <select class="form-select" name="scourse" style="border: 1px solid #456882;" aria-label="Default select example">
                     <option selected>Select Course Name</option>
                     <option value="1">BCA</option>
                     <option value="2">Home Science</option>
                 </select>
               <br>
               <label for="scyear" class="innerlabel" class="form-label">Enter in which year you are in : </label>
                <select class="form-select" name="scyear" style="border: 1px solid #456882;"  aria-label="Default select example">
                     <option value="1">FY</option>
                     <option value="2">SY</option>
                     <option value="3">TY</option>
                 </select>
             </div>
           </div>     
      </div>
      <hr>
    


      <label class="sRegislabel">Fill student Contact Details :</label><br>
      <div class="row">

        <div class="mb-3 col-md-6">
           <label for="scontactno" class="innerlabel">Enter Student Contact Number : </label>
           <input type="number" name="scontactno" id="scontactno" pattern="[0-9]{10}" required>
        </div>

        <div class="mb-3 col-md-6">
            <label for="semail" class="innerlabel">Enter Student Email : </label>
            <input type="email" name="semail" id="semail" required>
        </div>

      
             <div class="mb-3 col-md-6"> 
                <label  class="form-label innerlabel" for="saddress">Enter Student Address : </label>
                <input type="text"  class="form-control-lg" name="saddress"  id="saddress" required>
            </div>
            <div class="mb-3 col-md-6 mt-2">
              <label for="sdob" class="innerlabel">Enter Student Date of Birth : </label>
              <input type="date" name="sdob" id="sdob" required class="pb-1" >
            </div>
        

      </div>
    
      <b>
        <hr>
      </b>

      <label class="sRegislabel">Fill student Personal Details :</label><br>
      <div class="row">

        
        <div class="mb-3 col-md-6">
           <label for="sfname" class="innerlabel">Enter Student Father Name : </label>
           <input type="text" name="sfname" id="sfname" required>
        </div>
        
        <div class="mb-3 col-md-6">
          <label for="smname" class="innerlabel">Enter Mother Name : </label>
          <input type="text" name="smname" id="smname" required>
        </div>

        <div class="mb-3 col-md-6">
           <label for="sfcontact" class="innerlabel">Enter Contact Number of Father : </label>
           <input type="number" name="sfcontact" id="sfcontact" pattern="[0-9]{10}" required>
        </div>
        <br>
        <div class="mb-3 col-md-6">
          <label for="smcontact" class="innerlabel">Enter Contact Number of Mother : </label>
          <input type="number" name="smcontact" id="smcontact" pattern="[0-9]{10}" required>
        </div>
        <br>
        <div class="mb-3 col-md-6">
          <label for="sfoccupation" class="innerlabel">Enter Occupation of Father : </label>
          <input type="text" name="sfoccupation" id="sfoccupation" required>
        </div>
        
        <div class="mb-3 col-md-6">
           <label for="smoccupation" class="innerlabel">Enter Occupation of Mother : </label>
           <input type="text" name="smoccupation" id="smoccupation" required>
        </div>
        <div class="mb-3 col-md-6">
           <label for="sPsw" class="innerlabel form-label " >Create Your Password : </label>
           <input type="password" name="sPsw" id="sPsw" class="form-control" style="border: 1px solid black;" required>
        </div>  
      </div>

      <br>
      
      <button type="submit" name="addStudent" class="sRegisbtn btn btn-outline-primary w-100">Submit</button>

    </div>
    </form>
</div> 
</body>
</html>

 <?php
        include("../Storage/Footer/Footer1.html");
    ?>
