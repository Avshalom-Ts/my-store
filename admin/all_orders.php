<h3 class="text-center">All Orders</h3>
    <?php
    $get_orders_query = "select * from `user_orders`";
    $get_orders_result = mysqli_query($con, $get_orders_query);
    $get_orders_rows_count = mysqli_num_rows($get_orders_result);
    if ($get_orders_rows_count == 0) {
      echo "<h2 class='text-danger mt-5 text-center'>No Orders to show</h2>";
    } else {
      echo "<table class='table table-bordered mt-5 text-center'>
              <thead class='table-info'>
                <tr>
                  <th>No</th>
                  <th>Due Amount</th>
                  <th>Invoice Number</th>
                  <th>Total Products</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Delete</th>
                </tr>
              </thead>
            <tbody class='table-secondary'>";
      while ($get_orders_row = mysqli_fetch_assoc($get_orders_result)) {
        $order_id = $get_orders_row['order_id'];
        $amount_due = $get_orders_row['amount_due'];
        $invoice_number = $get_orders_row['invoice_number'];
        $total_products = $get_orders_row['total_products'];
        $order_date = $get_orders_row['order_date'];
        $order_status = $get_orders_row['order_status'];

        echo "
            <tr>
              <td>$order_id</td>
              <td>$amount_due</td>
              <td>$invoice_number</td>
              <td>$total_products</td>
              <td>$order_date</td>
              <td>$order_status</td>
              <td><a href='index.php?delete_order=$order_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";
      }
    }
    ?>
  </tbody>
</table>