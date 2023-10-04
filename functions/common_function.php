<?php
include('./includes/connect.php');

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
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
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
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
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
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
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
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
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
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
              </div>
            </div>
          </div>";
      }
    }
  }

}

?>