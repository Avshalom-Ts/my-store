<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/c6bdbdbc60.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.scss">
  <title>Admin Login</title>
</head>
<body>
  <div class="container-fluid py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="../images/signin.png" alt="signin" class="image-fluid">
      </div>
      <div class="col-lg-6 col-sm-12">
        <h2 class="text-center mb-5 text-light">Admin Login</h2>
        <form action="" method="post">
          <div class="form-outline mb-4 w-75 m-auto">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username" required>
          </div>
          <div class="form-outline mb-4 w-75 m-auto">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" required>
          </div>
          <div class="form-outline mb-4 w-75 m-auto">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password" required>
          </div>
          <div class="form-outline mb-4 w-75 m-auto">
            <input type="submit" value="Login" name="register" class="btn btn-info">
          </div>
          <div class="form-outline mb-4 w-75 m-auto">
            <p class="small text-info">Don't have an account? <a href="admin_registration.php"><strong class="link-danger">Register</strong></a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>