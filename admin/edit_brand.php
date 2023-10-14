<?php

$brand_id = $_GET['edit_brand'];
$select_brand = "select * from `brands` where brand_id=$brand_id";
$result_brand = mysqli_query($con, $select_brand);
$brand_row = mysqli_fetch_assoc($result_brand);
$brand_title = $brand_row['brand_title'];

if (isset($_POST['update_brand'])) {
  $brand_title = $_POST['brand_title'];
  $update_brand_query = "update `brands` set brand_title='$brand_title' where brand_id=$brand_id";
  $update_brand_result = mysqli_query($con, $update_brand_query);
  if ($update_brand_result) {
    echo "<script>alert('Brand updated successfully.!!')</script>";
    echo "<script>window.open('index.php?view_brands','_self')</script>";
  }
}

?>


<div class="container my-5">
  <h3 class="text-center">Edit Brand</h3>
  <form action="" method="post">
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="brand_title" class="form-label">Brand Title</label>
      <input value="<?php echo $brand_title ?>" type="text" id="brand_title" name="brand_title" class="form-control" required placeholder="Brand Title">
    </div>
    <div class="w-50 mx-auto mb-4">
      <input type="submit" name="update_brand" value="Update Brand" class="btn btn-info">
    </div>
  </form>
</div>