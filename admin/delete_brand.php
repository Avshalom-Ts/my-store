<?php
$delete_brand_id = $_GET['delete_brand'];
// echo $delete_brand_id;
$delete_brand_query = "delete from `brands` where brand_id=$delete_brand_id";
$delete_brand_result = mysqli_query($con, $delete_brand_query);
if ($delete_brand_result) {
  echo "<script>alert('brand deleted successfully.!!')</script>";
  $delete_brand_related_query = "delete from `products` where brand_id=$delete_brand_id";
  $delete_brand_related_result = mysqli_query($con, $delete_brand_related_query);
  if ($delete_brand_related_result) {
    echo "<script>alert(All related products was deleted successfully.!!')</script>";
    echo "<script>window.open('index.php?view_brands','_self')</script>";
  }
}

?>