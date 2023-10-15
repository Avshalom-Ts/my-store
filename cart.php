<?php
// include('./includes/connect.php');
// include('functions/common_function.php');
// include('./includes/header.php');
// session_start();
?>

<link rel="stylesheet" href="style.css">


  <!-- Navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <?php
    // include('./includes/navbar.php');
    
    // Call to cart function
    cart();
    ?>


    

    <!-- Third child -->
    <div class="bg-light">
      <h3 class="text-center">My Store</h3>
      <p class="text-center">Communications is at the heart of e-commerce and community</p>
    </div>

   <!-- Fourth child -->
   <div class="container">
    <div class="row">
      <form action="" method="post">
      <table class="table table-bordered text-center table-responsive">
        
          <!-- Fetch products from cart -->
          <?php
          global $con;
          $get_ip_address = getIPAddress();
          $total_price = 0;
          $subtotal = 0;
          $cart_query = "select * from `cart_details` where ip_address='$get_ip_address'";
          $result = mysqli_query($con, $cart_query);
          $result_count = mysqli_num_rows($result);
          if ($result_count > 0) {
            echo "<thead>
              <tr>
                <th scope='col'>Product Title</th>
                <th scope='col'>Product Image</th>
                <th scope='col'>Quantity</th>
                <th scope='col'>Total Price</th>
                <th scope='col'>Remove</th>
                <th scope='col' colspan='2'>Operations</th>
              </tr>
            </thead>
            <tbody>";
            while ($row = mysqli_fetch_array($result)) {
              $product_id = $row['product_id'];
              $product_qty = $row['quantity'];
              $select_product = "select * from `products` where product_id='$product_id'";
              $result_products = mysqli_query($con, $select_product);

              while ($row_product = mysqli_fetch_array($result_products)) {
                $product_price = array($row_product['product_price']);
                $price_table = $row_product['product_price'];
                $product_title = $row_product['product_title'];
                $product_image1 = $row_product['product_image1'];
                $product_values = array_sum($product_price);
                $total_price += $product_values;
                $subtotal += $total_price;
                ?>
                                                                                                                                <tr>
                                                                                                                                <td><?php echo $product_title; ?></td>
                                                                                                                                <td>
                                                                                                                                <img style="width:100%;height: 60px;object-fit: contain;" src="./admin/product_images/<?php echo $product_image1; ?>" alt="product_image">
                                                                                                                                <?php echo $product_image1; ?>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                <input type="number" value="<?php echo $product_qty; ?>" class="form-control" name="qty">
                                                                                                                                </td>
                                                                                                                                <?php
                                                                                                                                $get_ip_address = getIPAddress();
                                                                                                                                if (isset($_POST['update_cart'])) {
                                                                                                                                  $quantity = $_POST['qty'];
                                                                                                                                  $update_cart = "update `cart_details` set quantity=$quantity where ip_address='$get_ip_address'";
                                                                                                                                  $result_products_quantity = mysqli_query($con, $update_cart);
                                                                                                                                  $total_price = $total_price * $quantity;
                                                                                                                                  echo "<script>window.open('cart.php','_self')</script>";
                                                                                                                                }
                                                                                                                                ?>
                                                                                                                                <td>
                                                                                                                                <?php echo $total_price; ?>/-
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                <input type="checkbox" name="remove_item[]" value="<?php echo $product_id ?>">
                                                                                                                                </td>
                                                                                                                                <td >
                                                                                                                                <input type="submit" class="btn btn-info" value="Update" name="update_cart">
                                                                                                                                <input type="submit" class="btn btn-secondary" value="Remove" name="remove_cart">
                                                                                                                                </td>
                                                                                                                                </tr>
                                                                                                                                <?php
              }
            }
          } else {
            echo "<h2 class='text-center text-danger'>Cart is empty.</h2>";
          }
          ?>
        </tbody>
      </table>
      <!-- Subtotal -->
      <?php
      if ($result_count > 0) {
        ?>
                                                        <div class="d-flex gap-2">
                                                              <h4 class="px-3">Subtotal:<strong class="text-info"><?php echo $subtotal ?>/-</strong></h4>
                                                              <a class="btn btn-info" href="index.php">Continue shoping</a>
                                                              <a class="btn btn-secondary" href="./users/checkout.php">Checkout</a>
                                                            </div>
                                                  <?php
      }
      ?>
    </div>
  </div>
  </form>

  <!-- Remove one item function -->
  <?php
  function removeCartItem()
  {
    global $con;
    if (isset($_POST['remove_cart'])) {
      foreach ($_POST['remove_item'] as $remove_id) {
        echo $remove_id;
        $delete_query = "delete from `cart_details` where product_id=$remove_id";
        $run_delete = mysqli_query($con, $delete_query);
        if ($run_delete) {
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }
  }
  echo $remove_items = removeCartItem();
  ?>


    <!-- last child -->
    <?php
    include('./includes/footer.php');


    // Render the IP address
    // $ip = getIPAddress();
    // echo 'User Real IP Address - ' . $ip;
    ?>


    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>