<?php

$category_id = $_GET['edit_category'];
$select_category = "select * from `categories` where category_id=$category_id";
$result_category = mysqli_query($con, $select_category);
$category_row = mysqli_fetch_assoc($result_category);
$category_title = $category_row['category_title'];

if (isset($_POST['update_category'])) {
  $category_title = $_POST['category_title'];
  $update_category_query = "update `categories` set category_title='$category_title' where category_id=$category_id";
  $update_category_result = mysqli_query($con, $update_category_query);
  if ($update_category_result) {
    echo "<script>alert('Category updated successfully.!!')</script>";
    echo "<script>window.open('index.php?view_categories','_self')</script>";
  }
}

?>


<div class="container my-5">
  <h3 class="text-center">Edit Category</h3>
  <form action="" method="post">
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="category_title" class="form-label">Category Title</label>
      <input value="<?php echo $category_title ?>" type="text" id="category_title" name="category_title" class="form-control" required placeholder="Category Title">
    </div>
    <div class="w-50 mx-auto mb-4">
      <input type="submit" name="update_category" value="Update Category" class="btn btn-info">
    </div>
  </form>
</div>