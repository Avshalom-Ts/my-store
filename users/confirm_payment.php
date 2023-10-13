<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

if (isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  $username = $_SESSION['username'];
  $fetch_user = "select * from `user_table` where username='$username'";
  $result_fetch_user = mysqli_query($con, $fetch_user);
  $row_user = mysqli_fetch_assoc($result_fetch_user);
  $user_id = $row_user['user_id'];
  // echo $order_id;
  $select_data = "select * from `user_orders` where order_id=$order_id";
  $result = mysqli_query($con, $select_data);
  $row_fetch = mysqli_fetch_assoc($result);
  $invoice_number = $row_fetch['invoice_number'];
  $amount = $row_fetch['amount_due'];

}

if (isset($_POST['confirm_payment'])) {
  $invoice_number = $_POST['invoice_number'];
  $amount = $_POST['amount'];
  $payment_mode = $_POST['paymant_mode'];

  $insert_query = "insert into `user_payments` (order_id,invoice_number,amount,payment_mode) values ($order_id,$invoice_number,$amount,'$payment_mode')";
  $result_insert = mysqli_query($con, $insert_query);

  $update_query = "update `user_orders` set order_status='complete' where user_id=$user_id and order_id=$order_id";
  $result_update = mysqli_query($con, $update_query);

  if ($result_insert && $result_update) {
    echo "<script>window.open('profile.php?my_orders','_self')</script>";
  }
}
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
</head>
<body class="bg-secondary">
  <div class="container my-5">
    <h1 class="text-center text-light">Confirm payment</h1>
    <form action="" method="post">
      <div class="form-outline my-4 w-50 m-auto">
        <label for="invoice" class="form-label text-light">Invoice</label>
        <input id="invoice" type="text" class="form-control" name="invoice_number" value="<?php echo $invoice_number; ?>">
      </div>
      <div class="form-outline my-4 w-50 m-auto">
        <label for="amount" class="form-label text-light">Amount</label>
        <input id="amount" type="text" class="form-control" name="amount" value="<?php echo $amount; ?>">
      </div>
      <div class="form-outline my-4 w-50 m-auto">
        <label for="options" class="form-label text-light">Payment Options</label>
        <select name="paymant_mode" id="options" class="form-select">
          <option value="">-- Select payment mode --</option>
          <option value="">UPI</option>
          <option value="">NetBanking</option>
          <option value="">Paypal</option>
          <option value="">Cash</option>
          <option value="">Offline</option>
        </select>
      </div>
      <!-- Button submit -->
      <div class="form-outline my-4 w-50 m-auto">
        <input value="Confirm Pay" type="submit" class="btn btn-info w-50" name="confirm_payment">
      </div>
    </form>
  </div>
</body>
</html>