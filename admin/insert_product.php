<?php
include('../includes/connect.php');

if (isset($_POST['insert_product'])) {
  $product_title = $_POST['product_title'];
  $product_description = $_POST['product_description'];
  $product_keywords = $_POST['product_keywords'];
  $product_category = $_POST['product_category'];
  $product_brads = $_POST['product_brads'];
  $product_price = $_POST['product_price'];
  $product_status = "true";

  // accessing images
  $product_image1 = $_FILES['product_image1']['name'];
  $product_image2 = $_FILES['product_image2']['name'];
  $product_image3 = $_FILES['product_image3']['name'];

  // accessing images tmp name
  $temp_image1 = $_FILES['product_image1']['tmp_name'];
  $temp_image2 = $_FILES['product_image2']['tmp_name'];
  $temp_image3 = $_FILES['product_image3']['tmp_name'];



  // Checking empty condition
  if ($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brads == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '' or $product_price == '') {
    echo "<script>alert('please fill all fields!!')</script>";
    exit();
  } else {
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");

    //insert query
    $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$product_description','$product_keywords','$product_category','$product_brads','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
    $result_query = mysqli_query($con, $insert_products);
    if ($result_query) {
      echo "<script>alert('Successfully inserted the product.')</script>";
    }
  }
}
?>



<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <!-- <div class="flex">
      <a href="http://localhost/my-store/admin" class="btn btn-info">Back to Admin panel</a>
    </div> -->

    <!-- Form create product -->
    <form action="" method="post" enctype="multipart/form-data">

      <!-- Title -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_title" class="form-label">Product Title</label>
        <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" required>
      </div>

      <!-- Description -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_description" class="form-label">Product Description</label>
        <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" required>
      </div>

      <!-- Key words -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" required>
      </div>

      
      

      <!-- Categories -->
      <div class="form-outline mb-4 w-50  m-auto">
        <select name="product_category" id="" class="form-select" >
          <option value="">Select a category</option>
          <?php
          $select_query = "select * from `categories`";
          $result_query = mysqli_query($con, $select_query);
          while ($row_data = mysqli_fetch_assoc($result_query)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
          }
          ?>
        </select>
      </div>

      <!-- Brands -->
      <div class="form-outline mb-4 w-50  m-auto">
        <select name="product_brads" id="" class="form-select" >
          <option value="">Select a brands</option>
          <?php
          $select_query = "select * from `brands`";
          $result_query = mysqli_query($con, $select_query);
          while ($row_data = mysqli_fetch_assoc($result_query)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo "<option value='$brand_id'>$brand_title</option>";
          }
          ?>
        </select>
      </div>
      
      <!-- Image 1 -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_image1" class="form-label">Product Image 1</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required>
      </div>
      <!-- Image 2 -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_image2" class="form-label">Product Image 2</label>
        <input type="file" name="product_image2" id="product_image2" class="form-control" required>
      </div>
      <!-- Image 3 -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_image3" class="form-label">Product Image 3</label>
        <input type="file" name="product_image3" id="product_image3" class="form-control" required>
      </div>

      
      <!-- Price -->
      <div class="form-outline mb-4 w-50  m-auto">
        <label for="product_price" class="form-label">Product Price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" autocomplete="off" placeholder="Enter product price" required="required">
      </div>

      <!-- Price -->
      <div class="form-outline mb-4 w-50  m-auto">
        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert Product">
      </div>


    </form>
  </div>
