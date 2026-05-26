>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <title>Staff Reset Password</title>
  <style>
     .sReset_pass_body {
      height: 100%;
      margin: 0;
    }

    .sReset_pass_page-wrapper {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    .sReset_pass_content {
      flex: 1; /* pushes footer down */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .sReset_pass_con {
      border-radius: 10px;
      background: #f4f8fc;
      width: 100%;
      max-width: 400px;
      padding: 20px; /* ensures heading is visible */
    }

    .sReset_pass_h2 {
      text-align: center;
      font-weight: 600;
      color: #1154ba;
      margin-bottom: 20px;
    }

    .sReset_pass_footer {
      padding: 20px;
      text-align: center;
    }

    .sReset_pass_label{
      font-weight:bold;
    }
  </style>
</head>

 <?php      
            include("../Storage/Navbars/navbarMain.php");
     ?>
<body class="sReset_pass_body mt-5">
  <div class="sReset_pass_page-wrapper">
    <div class="sReset_pass_content mb-5">
      <div class="sReset_pass_con">
        <form action="staffResetPassword.php" method="post">
          <h2 class="sReset_pass_h2">Staff Reset Password</h2>

          <label for="username" class="form-label sReset_pass_label ">Enter Username :</label>
          <input type="text" name="username" id="username" class="form-control">

          <label for="npsw" class="form-label  sReset_pass_label">Create New Password :</label>
          <input type="password" name="npsw" id="npsw" class="form-control">

          <div class="text-center mt-3">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Set</button>
          </div>
        </form>
      </div>
    </div>

    <footer class="sReset_pass_footer">
      <?php
          include("../Storage/Footer/Footer1.html");
    ?>
    </footer>
  </div>
</body>
</html>
