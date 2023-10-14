<h3 class="text-center">All Products</h3>

<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>Product ID</th>
      <th>Product Title</th>
      <th>Product Image</th>
      <th>Product Price</th>
      <th>Total Sold</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $get_products = "select * from `products`";
    $result = mysqli_query($con, $get_products);
    while ($row_product = mysqli_fetch_assoc($result)) {
      $product_id = $row_product['product_id'];
      $product_title = $row_product['product_title'];
      $product_image1 = $row_product['product_image1'];
      $product_price = $row_product['product_price'];
      $status = $row_product['status'];

      $get_count = "select * from `orders_pending` where product_id=$product_id";
      $result_count = mysqli_query($con, $get_count);
      $rows_count = mysqli_num_rows($result_count);

      echo "<tr>
      <td>$product_id</td>
      <td>$product_title</td>
      <td><img src='product_images/$product_image1' alt='product_image' style='width: 50px;'></td>
      <td>$product_price</td>
      <td>$rows_count</td>
      <td>$status</td>
      <td><a href='index.php?edit_products' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>