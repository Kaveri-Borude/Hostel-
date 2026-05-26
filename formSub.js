$(document).ready(function(){


    // registerNewStaff
    $("#registerNewStaff").on("submit",function(e){
         e.preventDefault();
         $.ajax({
             url: "registerNewStaff2.php",
             type: "POST",
             data: $("#registerNewStaff").serialize(),
             success: function(response){
                 alert("registerNewStaff Success"+response);
                 if(response.includes("Registered Successfully!!")){
                        window.location.href = "/KDAJ-PHP/Hostel_Management/";
                 }                
             },
             error: function(response){
                   alert("registerNewStaff success"+response);
             }
         });
    });

   
    // login staff
    $("#loginStaff").on("submit", function(e){
          e.preventDefault();
          $.ajax({
              url: "loginStaff2.php",
              type: "POST",
              data: $("#loginStaff").serialize(),
              success: function(response){
                  //    alert(response);

                     console.log("Success"+"Login handler attached");
                     if(response.includes("Login Successful!!")){
                          window.location.href = "../HomePage/Home.php";
                          alert(response);                         
                     }else{
                        alert(response);   
                     }
              },
              error: function(xhr, status, error){
                    alert("loginStaff Error: " + error);
                    console.log(xhr.responseText);
              }

              
          });
    });

   // RegisterNewStudent
   $("#RegisterNewStudent").on("submit",function(e){
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             url: "RegisterNewStudent2.php",
             type: "POST",
             data: formData,
             contentType: false, 
             processData: false,
             success: function(response){
                 alert("RegisterNewStudent Success"+response);
                 if(response.includes("RegisterNewStudent Successfully")){
                        window.location.href = "/KDAJ-PHP/Hostel_Management/";
                 }                
             },
             error: function(response){
                   alert("registerNewStaff success"+response);
             }
         });
    });

    // loginStudent
    $("#loginStudent").on("submit", function(e){
          e.preventDefault();
          $.ajax({
              url: "loginStudent2.php",
              type: "POST",
              data: $("#loginStudent").serialize(),
              success: function(response){    
                     if(response.includes("StudentLoginSuccess")){                          
                          alert("loginStudent Success"+response);
                          window.location.href = "../StudentHome/studentHome.php";
                     }else{
                         alert("loginStudent Success"+response);
                     }
              },
              error: function(xhr, status, error){
                    alert("loginStudent Error: " + error);
              }
          });
    });


    // addVisitor
    $("#addVisitor").on("submit", function(e){
          e.preventDefault();
          $.ajax({
              url: "addVisitor2.php",
              type: "POST",
              data: $("#addVisitor").serialize(),
              success: function(response){
                     alert("addVisitor success"+response);
                  //    console.log("Login handler attached");
                     if(response.trim() === "Visitor information is Filled...!"){
                          window.location.href = window.document.referrer;
                     }
              },
              error: function(xhr, status, error){
                    alert("addVisitor Error: " + error);
              }
          });
    });

    // close Visitor Enrtry
    $("#closeVisitorEntry").on("submit", function(e){
          e.preventDefault();

          $.ajax({
               url: "closeVisitorEntry.php",
               type: "POST",
               data: $("#closeVisitorEntry").serialize(),
               success: function(response){
                    
                     alert("closeVisitorEntry"+response);
                  //    console.log("Login handler attached");
                     if(response.trim() === "visitor Entry Closed!"){
                          window.location.href = "KDAJ-PHP/Hostel_Management/HomePage/showAllVisitors.php";
                     }

               },
               error: function(xhr, status, error){
                    alert("Error is Occurred: " + error);
                    console.log(xhr.responseText);
              }
          });
    });

    // OutingForm
     $("#OutingForm").on("submit", function(e){
          e.preventDefault();
          $.ajax({            
              url: "outing2.php",
              type: "POST",
              data: $("#OutingForm").serialize(),           
              success: function(response){   
                     alert("OutingForm success"+response);
                     console.log("Outing1");
                     if(response.trim() === "OutingForm success : Outing Form Filled Successfully!!"){
                        console.log("Outing1");
                          window.location.href = window.document.referrer;
                     }
              },
              error: function(xhr, status, error){
                    alert("OutingForm Error: " + error);
              }
          });
    });


    
     // addComplaint
    $("#addComplaint").on("submit", function(e){     
          e.preventDefault();
          $.ajax({
              url: "addComplaint2.php",
              type: "POST",
              data: $("#addComplaint").serialize(),
              success: function(response){ 
                     alert("addComplaint success : "+response);                     
                     if(response.trim() === "Query Added Successfully!"){
                          window.location.href = window.document.referrer;
                     }
              },
              error: function(xhr, status, error){
                    alert("addComplaint Error: " + error);
              }
          });
      });

      // Add Fees Data
      $("#addFeesData").on("submit", function(e){     
          e.preventDefault();
          $.ajax({
              url: "addFeesData2.php",
              type: "POST",
              data: $("#addFeesData").serialize(),
              success: function(response){ 
                     alert("addFeesData : "+response);                     
                     if(response.trim() === "Fee Details Filled Successfully!!"){
                          window.location.href = window.document.referrer;
                     }
              },
              error: function(xhr, status, error){
                    alert("addFeesData Error: " + error);
              }
          });
    });



    // Update Existing Student
   $("#updateStudent").on("submit",function(e){
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             url: "updateStudent2.php",
             type: "POST",
             data: formData,
             contentType: false, 
             processData: false,
             success: function(response){
                 alert("Update Existing Student Success : "+response);
                 if(response.includes("Student Updated Successfully")){
                        window.location.href = window.document.referrer;
                 }                
             },
             error: function(response){
                   alert("registerNewStaff success"+response);
             }
         });
    });



    // Authority Login
    $("#ALogin").on("submit", function(e){  
          e.preventDefault();
          $.ajax({
              url: "ALogin2.php",
              type: "POST",
              data: $("#ALogin").serialize(),
              success: function(response){ 
                  console.log("Success"+"Login handler attached3");
                     if(response.includes("Authority Login Successful!!")){
                          window.location.href = "../MainAuthority/AuthorityHome.php";
                          alert(response);                         
                     }else{
                        alert(response);   
                     }
              },
              error: function(xhr, status, error){console.log("Success"+"Login handler attached5");
                    alert("AuthorityLogin Error: " + error);
                    console.log(xhr.responseText);
              }
              
          });
    });

      // Change College Token 
      $("#changeCollegeToken").on("submit", function(e){ 
          e.preventDefault();
          $.ajax({
              url: "changeCollegeToken2.php",
              type: "POST",
              data: $("#changeCollegeToken").serialize(),    
              success: function(response){
                     if(response.includes("New Token Set Successfully")){
                          window.location.href = "../MainAuthority/AuthorityHome.php";
                          alert(response);                         
                     }else{
                        alert(response);   
                     }
              },
              error: function(xhr, status, error){
                    alert("changeCollegeToken Error: " + error);
                    console.log(xhr.responseText);
              }
          });
      });

      // Update Fees 
      $("#updateFees").on("submit", function(e){ 
          e.preventDefault();
          $.ajax({
              url: "updateFees2.php",
              type: "POST",
              data: $("#updateFees").serialize(),    
              success: function(response){
                     if(response.includes("Fees Updated Successfully")){
                          window.location.href = "../MainAuthority/AuthorityHome.php";
                          alert(response);                         
                     }else{
                        alert(response);   
                     }
              },
              error: function(xhr, status, error){
                    alert("UpdateFees Error: " + error);
                    console.log(xhr.responseText);
              }
          });
      });

       // Update Password Authority 
      $("#updatePassword").on("submit", function(e){ 
          e.preventDefault();
          $.ajax({
              url: "updatePassword2.php",
              type: "POST",
              data: $("#updatePassword").serialize(),    
              success: function(response){
                     if(response.includes("Password For Authority is Updated Successfully")){
                          window.location.href = "../MainAuthority/AuthorityHome.php";
                          alert(response);                         
                     }else{
                        alert(response);   
                     }
              },
              error: function(xhr, status, error){
                    alert("UpdateFees Error: " + error);
                    console.log(xhr.responseText);
              }
          });
      });

        // showAttendance
      $("#showAttendance").on("submit", function(e){ 
          e.preventDefault();
          $.ajax({
              url: "showAttendance2.php",
              type: "POST",
              data: $("#showAttendance").serialize(),    
              success: function(response){
                        alert(response);
              },
              error: function(xhr, status, error){
                    
              }
          });
      });






});

