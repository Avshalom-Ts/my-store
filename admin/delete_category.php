<?php
$delete_category_id = $_GET['delete_category'];
// echo $delete_category_id;
$delete_category_query = "delete from `categories` where category_id=$delete_category_id";
$delete_category_result = mysqli_query($con, $delete_category_query);
if ($delete_category_result) {
  echo "<script>alert('Category deleted successfully.!!')</script>";
  echo "<script>window.open('index.php?view_categories','_self')</script>";
}

?>