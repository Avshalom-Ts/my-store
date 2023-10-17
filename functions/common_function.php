<?php
// include('./includes/connect.php');


//Geting products
function getProducts()
{
  global $con;

  //Check if isset..
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "select * from `products` order by rand() limit 0,3";
      $result_query = mysqli_query($con, $select_query);
      // $row = mysqli_fetch_assoc($result_query);
      // echo $row['product_title'];
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        // $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $product_image1 = $row['product_image1'];
        // $product_image2 = $row['product_image2'];
        // $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                  <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>$product_price<span>$</span></p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                    <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                  </div>
                </div>
              </div>";
      }
    }
  }
}

// Get ALL products
function getAllProducts()
{
  global $con;

  //Check if isset..
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "select * from `products` order by rand()";
      $result_query = mysqli_query($con, $select_query);
      // $row = mysqli_fetch_assoc($result_query);
      // echo $row['product_title'];
      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        // $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $product_image1 = $row['product_image1'];
        // $product_image2 = $row['product_image2'];
        // $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$product_price<span>$</span></p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
      }
    }
  }
}

// Getting unique categories
function getUniqueCategories()
{
  global $con;

  //Check if isset..
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $select_query = "select * from `products` where category_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No products in this category.</h2>";
    }
    // $row = mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      // $product_keywords = $row['product_keywords'];
      $category_id = $row['category_id'];
      $product_image1 = $row['product_image1'];
      // $product_image2 = $row['product_image2'];
      // $product_image3 = $row['product_image3'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$product_price<span>$</span></p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
    }
  }
}

// Getting unique brands
function getUniqueBrands()
{
  global $con;

  //Check if isset..
  if (isset($_GET['brand'])) {
    $brand_id = $_GET['brand'];
    $select_query = "select * from `products` where category_id=$brand_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No products with this brand.</h2>";
    }
    // $row = mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      // $product_keywords = $row['product_keywords'];
      $category_id = $row['category_id'];
      $product_image1 = $row['product_image1'];
      // $product_image2 = $row['product_image2'];
      // $product_image3 = $row['product_image3'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$product_price<span>$</span></p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
    }
  }
}


function getBrands()
{
  global $con;
  $select_brands = "select * from `brands`";
  $result_brands = mysqli_query($con, $select_brands);
  // echo $row_data['brand_title']; // Show the result of one brand insted do while loop
  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    // echo $brand_title;
    echo "<li class='nav-item'>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>
              $brand_title
            </a>
          </li>";
  }
}

function getCategories()
{
  global $con;
  $select_categories = "select * from `categories`";
  $result_categories = mysqli_query($con, $select_categories);
  // echo $row_data['brand_title']; // Show the result of one brand insted do while loop
  while ($row_data = mysqli_fetch_assoc($result_categories)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    // echo $brand_title;
    echo "<li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>
              $category_title
            </a>
          </li>";
  }
}

// Serach products
function searchProduct()
{
  global $con;
  if (isset($_GET['search_data_product'])) {
    $search_data_value = $_GET['search_data'];

    $search_query = "select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    // $row = mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No products for this search.</h2>";
    } else {

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        // $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $product_image1 = $row['product_image1'];
        // $product_image2 = $row['product_image2'];
        // $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <p class='card-text'>$product_price<span>$</span></p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
      }
    }
  }
}

// Search by ID
function getProductByID()
{
  global $con;
  $product_id = $_GET['product_id'];
  // echo $product_id;

  $search_query = "select * from `products` where product_id=$product_id";
  $result_query = mysqli_query($con, $search_query);
  // $row = mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  $num_of_rows = mysqli_num_rows($result_query);
  if ($num_of_rows == 0) {
    echo "<h2 class='text-center text-danger'>Cant view page.</h2>";
  } else {
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      // $product_keywords = $row['product_keywords'];
      $category_id = $row['category_id'];
      $product_image1 = $row['product_image1'];
      // $product_image2 = $row['product_image2'];
      // $product_image3 = $row['product_image3'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
        <div class='card'>
          <img style='width: 100%;height: 200px;object-fit: contain;' src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title''>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description</p>
            <p class='card-text'>$product_price<span>$</span></p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
            <a href='index.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
          </div>
        </div>
      </div>";
    }
  }
}

// Get ip address function
function getIPAddress()
{
  //whether ip is from the share internet  
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from the remote address  
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
// $ip = getIPAddress();
// echo 'User Real IP Address - ' . $ip;

function cart()
{
  if (isset($_GET['add_to_cart'])) {
    global $con;

    $get_ip_address = getIPAddress();

    $get_product_id = $_GET['add_to_cart'];
    $select_query = "select * from `cart_details` where ip_address='$get_ip_address' and product_id=$get_product_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows > 0) {
      echo "<script>alert('This item is already in cart.')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    } else {
      $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip_address',0)";
      echo "<script>alert('Item added to cart.')</script>";
      $result_query = mysqli_query($con, $insert_query);

    }
  }
}

// function to get cart items number
function cart_items()
{
  if (isset($_GET['add_to_cart'])) {
    global $con;

    $get_ip_address = getIPAddress();

    $select_query = "select * from `cart_details` where ip_address='$get_ip_address'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);
  } else {
    global $con;
    $get_ip_address = getIPAddress();
    $select_query = "select * from `cart_details` where ip_address='$get_ip_address'";
    $result_query = mysqli_query($con, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);

  }
  echo $count_cart_items;
}

// Total price function
function totalCartPrice()
{
  global $con;
  $get_ip_address = getIPAddress();
  $total = 0;
  $cart_query = "select * from `cart_details` where ip_address='$get_ip_address'";
  $result = mysqli_query($con, $cart_query);
  while ($row = mysqli_fetch_array($result)) {
    $product_id = $row['product_id'];
    $select_product = "select * from `products` where product_id='$product_id'";
    $result_products = mysqli_query($con, $select_product);

    while ($row_product_price = mysqli_fetch_array($result_products)) {
      $product_price = array($row_product_price['product_price']);
      $product_values = array_sum($product_price);
      $total += $product_values;
    }
  }
  echo $total;
}

function getUserOrderDetails()
{
  global $con;
  $username = $_SESSION['username'];
  $get_details = "select * from `user_table` where username='$username'";
  $result_query = mysqli_query($con, $get_details);
  while ($row_query = mysqli_fetch_array($result_query)) {
    $user_id = $row_query['user_id'];
    // echo $user_id;
    if (!isset($_GET['edit_account']) && !isset($_GET['my_orders']) && !isset($_GET['delete_account'])) {
      $get_orders_query = "select * from `user_orders` where user_id=$user_id and order_status='pending'";
      $result_orders_query = mysqli_query($con, $get_orders_query);
      $row_count = mysqli_num_rows($result_orders_query);
      if ($row_count > 0) {
        echo "<h3 class='text-center py-5'>You have <span class='text-danger'>$row_count</span> pending orders.!!</h3>
        <h5 class='text-center'><a class='btn btn-info text-decoration-none' href='profile.php?my_orders'>Orders details</a></h5>";
      } else {
        echo "<h3 class='text-center py-5'>You dont have pending orders.!!</h3>
        <h5 class='text-center'><a class='btn btn-info text-decoration-none' href='../index.php'>Continue shoping</a></h5>";
      }
    }
  }
}

?>