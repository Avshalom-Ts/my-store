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
  <link rel="stylesheet" href="../style.css">
  <title>Payment page</title>
  <style>
    img {
      width: 90%;
      margin: auto;
      display: block;
    }
  </style>
</head>

<body>
  <!-- Access to user id -->
  <?php
  $user_ip = getIPAddress();
  $get_user = "select * from `user_table` where user_ip='$user_ip'";
  $result = mysqli_query($con, $get_user);
  $run_query = mysqli_fetch_assoc($result);
  $user_id = $run_query['user_id'];

  ?>
  <div class="container mt-5">
    <h2 class="text-center text-info">Payment options</h2>
    <div class="row d-flex justify-content-center align-items-center mt-5">
      <div class="col-md-6">
        <a href="https://www.paypal.com" target="_blank"><img src="../images/upi.jpg" alt="upi"></a>
      </div>
      <div class="col-md-6">
        <a href="order.php?user_id=<?php echo $user_id; ?>">
          <h2 class="text-center">Pay offline</h2>
        </a>
      </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center mt-5">
      <a href="../index.php" class="btn btn-info">Continue Shoping</a>
    </div>
  </div>
</body>

</html>