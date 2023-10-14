<?php
// Get the product ID
$product_id = $_GET['edit_products'];
// echo $product_id;
// Select the product from database
$select_product = "select * from `products` where product_id=$product_id";
$product_query = mysqli_query($con, $select_product);
$product_row = mysqli_fetch_assoc($product_query);

// Save all fields in variables
$product_title = $product_row['product_title'];
$product_description = $product_row['product_description'];
$product_keywords = $product_row['product_keywords'];


// Select all categories
$category_id = $product_row['category_id'];
$select_categories = "select * from `categories`";
$select_categories_query = mysqli_query($con, $select_categories);

// Current category
$select_current_category = "select * from `categories` where category_id=$category_id";
$current_category_query = mysqli_query($con, $select_current_category);
$current_category_row = mysqli_fetch_assoc($current_category_query);
$current_category_id = $current_category_row['category_id'];
$current_category_title = $current_category_row['category_title'];
// echo $current_category_title, $current_category_id;

// Select all brands
$brand_id = $product_row['brand_id'];
$select_brands = "select * from `brands`";
$select_brands_query = mysqli_query($con, $select_brands);

// Current brand
$select_current_brand = "select * from `brands` where brand_id=$brand_id";
$current_brand_query = mysqli_query($con, $select_current_brand);
$current_brand_row = mysqli_fetch_assoc($current_brand_query);
$current_brand_id = $current_brand_row['brand_id'];
$current_brand_title = $current_brand_row['brand_title'];
// echo $current_brand_title, $current_brand_id;


$product_image1 = $product_row['product_image1'];
$product_image2 = $product_row['product_image2'];
$product_image3 = $product_row['product_image3'];
$product_price = $product_row['product_price'];

// Update the product
if (isset($_POST['update_product'])) {
  $product_title = $_POST['product_title'];
  $product_description = $_POST['product_description'];
  $product_keywords = $_POST['product_keywords'];
  $category_id = $_POST['product_category'];
  $brand_id = $_POST['product_brands'];
  $product_price = $_POST['product_price'];

  if ($_FILES['product_image1']['name']) {
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image1_tmp = $_FILES['product_image1']['tmp_name'];
    move_uploaded_file($product_image1_tmp, "./product_images/$product_image1");
  }
  if ($_FILES['product_image2']['name']) {
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image2_tmp = $_FILES['product_image2']['tmp_name'];
    move_uploaded_file($product_image2_tmp, "./product_images/$product_image2");
  }
  if ($_FILES['product_image3']['name']) {
    $product_image3 = $_FILES['product_image3']['name'];
    $product_image3_tmp = $_FILES['product_image3']['tmp_name'];
    move_uploaded_file($product_image3_tmp, "./product_images/$product_image3");
  }

  $update_product = "update `products` set product_title='$product_title', product_description='$product_description', product_keywords='$product_keywords', category_id=$category_id, brand_id=$brand_id,product_image1='$product_image1', product_price=$product_price where product_id=$product_id";
  $update_query = mysqli_query($con, $update_product);
  if ($update_product) {
    echo "<script>alert('Product Updated successfully.!!')</script>";
    echo "<script>window.open('index.php?edit_products=$product_id','_self')</script>";
  }
}


?>

<div class="container my-5">
  <h3 class="text-center">Edit Product</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_title" class="form-label">Product Title</label>
      <input value="<?php echo $product_title ?>" type="text" id="product_title" name="product_title" class="form-control" required placeholder="Product Title">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_description" class="form-label">Product Description</label>
      <input value="<?php echo $product_description ?>" type="text" id="product_description" name="product_description" class="form-control" required placeholder="Product Description">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_keywords" class="form-label">Product Keywords</label>
      <input value="<?php echo $product_keywords ?>" type="text" id="product_keywords" name="product_keywords" class="form-control" required placeholder="Product Keywords">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_category" class="form-label">Product Category</label>
      <select name="product_category" id="product_category" class="form-select">
        <?php
        echo "<option value='$current_category_id'>$current_category_title</option>";
        while ($row_categories = mysqli_fetch_array($select_categories_query)) {
          $category_id = $row_categories['category_id'];
          $category_title = $row_categories['category_title'];
          if ($category_id != $current_category_id) {
            echo "<option value='$category_id'>$category_title</option>";
          }
        }
        ?>
        
      </select>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_brands" class="form-label">Product Brands</label>
      <select name="product_brands" id="product_brands" class="form-select">
          <?php
          echo "<option value='$current_brand_id'>$current_brand_title</option>";
          while ($row_brand = mysqli_fetch_array($select_brands_query)) {
            $brand_id = $row_brand['brand_id'];
            $brand_title = $row_brand['brand_title'];
            if ($current_brand_id != $brand_id) {
              echo "<option value='$brand_id'>$brand_title</option>";
            }
          }
          ?>
      </select>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image1" class="form-label">Product Image 1</label>
          <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/<?php echo $product_image1 ?>" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image2" class="form-label">Product Image 2</label>
          <input type="file" id="product_image2" name="product_image2" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/<?php echo $product_image2 ?>" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image3" class="form-label">Product Image 3</label>
          <input type="file" id="product_image3" name="product_image3" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/<?php echo $product_image3 ?>" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_price" class="form-label">Product Price</label>
      <input value="<?php echo $product_price ?>" type="text" id="product_price" name="product_price" class="form-control" required placeholder="Product Price">
    </div>
    <div class="w-50 mx-auto mb-4">
      <input type="submit" name="update_product" value="Update Product" class="btn btn-info">
    </div>
  </form>
</div>
