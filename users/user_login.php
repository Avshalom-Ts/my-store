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

  <title>Login page</title>

</head>

<body>


  <div class="container-fluid m-3">
    <h2 class="text-center">Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-10">
        <form action="" method="post">
          <!-- Username Field -->
          <div class="form-outline mb-4">
            <label for="user_username" class="form-label">Username</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required
              name="user_username" />
          </div>
        <!-- Password Field -->
        <div class="form-outline mb-4">
          <label for="user_password" class="form-label">Password</label>
          <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required
            name="user_password" />
        </div>
        <div class="mt-4">
          <input class="btn btn-primary" type="submit" value="Login" name="user_login">
          <p class="small fw-bold mt-2 pt-1">Don't have an account? <a class="text-decoration-none" href="user_registration.php">Register</a></p>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

</body>

</html>

<?php
if (isset($_POST['user_login'])) {
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];
  $select_query = "select * from `user_table` where username='$user_username'";
  $result = mysqli_query($con, $select_query);
  $row_count = mysqli_num_fields($result);
  $row_data = mysqli_fetch_assoc($result);
  $user_ip = getIPAddress();

  // Cart items
  $select_query_cart = "select * from `cart_details` where ip_address='$user_ip'";
  $select_cart = mysqli_query($con, $select_query_cart);
  $row_count_cart = mysqli_num_fields($select_cart);
  if ($row_count > 0) {
    if (password_verify($user_password, $row_data['user_password'])) {
      $_SESSION['username'] = $user_username;
      if ($row_count_cart == 0) {
        echo "<script>alert('Login successful.')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      } else {
        echo "<script>alert('Login successful.')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
      }
    } else {
      echo "<script>alert('Invalid Credentials')</script>";
    }
  } else {
    echo "<script>alert('Invalid Credentials')</script>";
  }
}
?>