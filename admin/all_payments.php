<?php
$select_payments_query = "select * from `user_payments`";
$select_payments_result = mysqli_query($con, $select_payments_query);
$select_payments_rows = mysqli_num_rows($select_payments_result);
if ($select_payments_rows == 0) {
  echo "<h2 class='text-danger mt-5 text-center'>No Payments to show</h2>";
} else {
  echo "<table class='table table-bordered mt-5 text-center'>
              <thead class='table-info'>
                <tr>
                  <th>Payment ID</th>
                  <th>Order ID</th>
                  <th>Invoice No</th>
                  <th>Amount</th>
                  <th>Payment Method</th>
                  <th>Date</th>
                </tr>
              </thead>
            <tbody class='table-secondary'>";
  while ($select_payments_row = mysqli_fetch_assoc($select_payments_result)) {
    $payment_id = $select_payments_row['payment_id'];
    $order_id = $select_payments_row['order_id'];
    $invoice_number = $select_payments_row['invoice_number'];
    $amount = $select_payments_row['amount'];
    $payment_mothod = $select_payments_row['payment_mode'];
    $payment_date = $select_payments_row['data'];

    echo "
            <tr>
              <td>$payment_id</td>
              <td>$order_id</td>
              <td>$invoice_number</td>
              <td>$amount</td>
              <td>$payment_mothod</td>
              <td>$payment_date</td>
              <td><a href='index.php?delete_payment=$payment_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";

  }
}

?>