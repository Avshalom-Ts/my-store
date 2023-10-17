
<?php
$get_user = "select * from `user_table` where username='$username'";
$result = mysqli_query($con, $get_user);
$user_row = mysqli_fetch_assoc($result);
// echo $user_row['username'];
$user_id = $user_row['user_id'];
?>

  <h3 class="text-center my-4">All my orders</h3>
  <table class="table table-bordered">
    <thead class="table-info">
      <tr>
        <th>SL No</th>
        <th>Amount Due</th>
        <th>Total products</th>
        <th>Invoice number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
      <?php
      $get_orders_details = "select * from `user_orders` where user_id='$user_id'";
      $result_orders = mysqli_query($con, $get_orders_details);
      while ($orders_row = mysqli_fetch_assoc($result_orders)) {
        $order_id = $orders_row['order_id'];
        $amount_due = $orders_row['amount_due'];
        $total_products = $orders_row['total_products'];
        $invoice_num = $orders_row['invoice_number'];
        $order_date = $orders_row['order_date'];
        $order_status = $orders_row['order_status'];
        echo "<tr>
        <td>$order_id</td>
        <td>$amount_due</td>
        <td>$total_products</td>
        <td>$invoice_num</td>
        <td>$order_date</td>
        <td>$order_status</td>";
        ?>

              <?php
              if ($order_status == 'complete') {
                echo "<td>Paid</td>
          </tr>";
              } else {
                echo "<td><a href='confirm_payment.php?order_id=$order_id' class='btn btn-success'>Confirm</a></td>
          </tr>";
              }
              ;
      }
      ?>
      
    </tbody>
  </table>
