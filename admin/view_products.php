<div class="container mt-5">
<h3 class="text-center">All Products</h3>
<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>Product ID</th>
      <th>Category</th>
      <th>Brand</th>
      <th>Title</th>
      <th>Image</th>
      <th>Price</th>
      <th>Total Sold</th>
      <th>In Stock</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $get_all_products_query = "select * from `products`";
    $get_all_products_query_result = mysqli_query($con, $get_all_products_query);
    while ($row_product = mysqli_fetch_assoc($get_all_products_query_result)) {
      $product_id = $row_product['product_id'];
      $product_title = $row_product['product_title'];
      $product_image1 = $row_product['product_image1'];
      $product_price = $row_product['product_price'];
      $product_instock = $row_product['product_instock'];

      $category_id = $row_product['category_id'];
      $get_categoy_query = "select * from `categories` where category_id=$category_id";
      $get_category_result = mysqli_query($con, $get_categoy_query);
      $category_title_row = mysqli_fetch_assoc($get_category_result);
      $category_title = $category_title_row['category_title'];

      $brand_id = $row_product['brand_id'];
      $get_brand_query = "select * from `brands` where brand_id=$brand_id";
      $get_brand_result = mysqli_query($con, $get_brand_query);
      $brand_title_row = mysqli_fetch_assoc($get_brand_result);
      $brand_title = $brand_title_row['brand_title'];



      $get_count = "select * from `orders_pending` where product_id=$product_id";
      $result_count = mysqli_query($con, $get_count);
      $rows_count = mysqli_num_rows($result_count);



      echo "<tr>
      <td>$product_id</td>
      <td>$category_title</td>
      <td>$brand_title</td>
      <td>$product_title</td>
      <td><img src='product_images/$product_image1' alt='product_image' style='width: 50px;'></td>
      <td>$product_price<strong> $</strong></td>
      <td>$rows_count</td>
      <td>$product_instock</td>
      <td><a href='index.php?edit_products=$product_id' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='index.php?delete_products=$product_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>

</div>