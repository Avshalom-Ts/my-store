<?php
include('../includes/connect.php');
include('../functions/common_function.php');
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
  <link rel="stylesheet" href="style.css">

  <title>Registration page</title>

</head>

<body>


  <div class="container-fluid m-3">
    <h2 class="text-center">Registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-10">
        <form action="" method="post" enctype="multipart/form-data">
          <!-- Username Field -->
          <div class="form-outline mb-4">
            <label for="user_username" class="form-label">Username</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required
              name="user_username" />
          </div>
        <!-- Email Field -->
        <div class="form-outline mb-4">
          <label for="user_email" class="form-label">Email</label>
          <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required name="user_email" />
        </div>
        <!-- Image Field -->
        <div class="form-outline mb-4">
          <label for="user_image" class="form-label">Image</label>
          <input type="file" id="user_image" class="form-control" required name="user_image" />
        </div>
        <!-- Password Field -->
        <div class="form-outline mb-4">
          <label for="user_password" class="form-label">Password</label>
          <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required
            name="user_password" />
        </div>
        <!-- Confirm Password Field -->
        <div class="form-outline mb-4">
          <label for="conf_user_password" class="form-label">Confirm password</label>
          <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" required
            name="conf_user_password" />
        </div>
        <!-- Address Field -->
        <div class="form-outline mb-4">
          <label for="user_address" class="form-label">Address</label>
          <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required
            name="user_address" />
        </div>
        <!-- Contact Field -->
        <div class="form-outline mb-4">
          <label for="user_contact" class="form-label">Contact</label>
          <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile bumber" autocomplete="off" required
            name="user_contact" />
        </div>
        <div class="mt-4">
          <input class="btn btn-primary" type="submit" value="Register" name="user_register">
          <p class="small fw-bold mt-2 pt-1">Already have an account? <a class="text-decoration-none" href="user_login.php">Login</a></p>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

</body>

</html>

<?php
if (isset($_POST['user_register'])) {
  $user_username = $_POST['user_username'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  $conf_user_password = $_POST['conf_user_password'];
  $user_address = $_POST['user_address'];
  $user_contact = $_POST['user_contact'];
  $user_image = $_FILES['user_image']['name'];
  $user_image_tmp = $_FILES['user_image']['tmp_name'];
  $user_ip = getIPAddress();

  // Select query
  $select_query = "select * from `user_table` where username='$user_username' or user_email='$user_email'";
  $result = mysqli_query($con, $select_query);
  $rows_count = mysqli_num_rows($result);
  if ($rows_count > 0) {
    echo "<script>alert('This username alredy exist.!!');</script>";
  } else {
    // Insert Query
    move_uploaded_file($user_image_tmp, "./user_images/$user_image");
    $insert_query = "insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) 
  values ('$user_username','$user_email','$user_password','$user_image','$user_ip','$user_address','$user_contact')";

    $sql_execute = mysqli_query($con, $insert_query);

    if ($sql_execute) {
      echo "<script>alert('Data inserted successfully');</script>";
    } else {
      die(mysqli_error($con));
    }
  }


}
?>