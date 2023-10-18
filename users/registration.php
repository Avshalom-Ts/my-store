<?php
include('includes/connect.php');
$show_warn_email = "none";
$show_warn_username = "none";
$show_warn_passwords = "none";
?>

<div class="container mb-4">
  <h2 class="text-center mb-2 text-dark">Registration Page</h2>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <img src="images/signin.png" alt="signin" class="image-fluid">
    </div>
    <div class="col-6 my-5">
      <form action="" method="post" enctype="multipart/form-data">
        <!-- Username Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="username" class="form-label">Username</label>
          <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username" required>
          <p class="text-danger" style="display:<?php echo $show_warn_username ?>;">Username is taken</p>
        </div>
        <!-- First Name Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="first_name" class="form-label">First Name</label>
          <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter Your First Name" required>
        </div>
        <!-- Last Name Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="last_name" class="form-label">Last Name</label>
          <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter Your Last Name" required>
        </div>
        <!-- Email Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="email" class="form-label">Email</label>
          <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" required>
          <p class="text-danger" style="display:<?php echo $show_warn_email ?>;">Email is taken</p>
        </div>
        <!-- Image Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="image" class="form-label">Image</label>
          <input type="file" id="image" class="form-control" required name="image" />
        </div>
        <!-- Password Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="password" class="form-label">Password</label>
          <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password" required>
        </div>
        <!-- Confirm Password Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
          <p class="text-danger" style="display:<?php echo $show_warn_passwords ?>;">Passwords not match!</p>
        </div>
        <!-- Address Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="address" class="form-label">Address</label>
          <input type="text" id="address" class="form-control" placeholder="Enter your address" autocomplete="off" required name="address" />
        </div>
        <!-- Contact Field -->
        <div class="form-outline mb-4 w-75 m-auto">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" id="phone" class="form-control" placeholder="Enter your phone bumber" autocomplete="off" required name="phone" />
        </div>
        <div class="form-outline mb-4 w-75 m-auto">
          <input type="submit" value="Register" name="register" class="btn btn-info">
        </div>
        <div class="form-outline mb-4 w-75 m-auto">
          <p class="small text-info">Alredy have an account? <a href="index.php?login"><strong class="link-danger">Login</strong></a></p>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conf_password = $_POST['confirm_password'];
  $hash_password = password_hash($password, PASSWORD_DEFAULT);
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $image = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  $ip = getIPAddress();
  $type = "user";

  // Check users table empty
  $select_all_users_query = "SELECT * FROM `users`";
  $select_all_users_result = mysqli_query($con, $select_all_users_query);
  $select_all_users_row_count = mysqli_num_rows($select_all_users_result);
  if ($select_all_users_row_count == 0) {
    $type = "super_user";
  }
  // Check if user alredy signin with email or username
  $check_all_users_query = "SELECT * FROM `users` WHERE username='$username' OR email='$email'";
  $check_all_users_result = mysqli_query($con, $check_all_users_query);
  $check_all_users_count = mysqli_num_rows($check_all_users_result);
  if ($check_all_users_count > 0) {
    $show_warn_email = "block";
    $show_warn_username = "block";
  } else {
    // Check for passwords matches
    if ($password != $conf_password) {
      $show_warn_passwords = "block";
    } else {
      // Insert the new user
      // echo "<script>alert('Before creating user.!!');</script>";
      move_uploaded_file($image_tmp, "./users/user_images/$image");
      $insert_user_query = "INSERT INTO `users` (username,first_name,last_name,email,password,avatar,ip,address,phone,type,created) VALUES ('$username','$first_name','$last_name','$email','$hash_password','$image','$ip','$address',$phone,'$type',now())";
      $insert_user_result = mysqli_query($con, $insert_user_query);
      if ($insert_user_result) {
        echo "<script>window.open('index.php?login','_self');</script>";
      }
    }
  }




}

?>