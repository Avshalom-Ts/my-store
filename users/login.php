<?php

?>
  <div class="container-fluid py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="images/signin.png" alt="signin" class="image-fluid">
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
            <p class="small text-info">Don't have an account? <a href="index.php?registration"><strong class="link-danger">Register</strong></a></p>
          </div>
        </form>
      </div>
    </div>
  </div>