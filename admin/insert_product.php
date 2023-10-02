<?php
include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/c6bdbdbc60.js" crossorigin="anonymous"></script>
  <!-- CSS file -->
  <link rel="stylesheet" href="../style.css">
  <title>Insert Products - Admin Dashboard</title>
</head>
<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>

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
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" required>
      </div>

      <!-- Price -->
      <div class="form-outline mb-4 w-50  m-auto">
        <input type="submite" name="insert_product" class="btn btn-info mb-3 px-3" value="insert Product">
      </div>


    </form>
  </div>
</body>
</html>