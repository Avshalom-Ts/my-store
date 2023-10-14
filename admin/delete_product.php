<?php
// Geting the product id from the URL
$delete_id = $_GET['delete_products'];
// echo $delete_id;

// Delete query
$delete_product_query = "delete from `products` where product_id=$delete_id";
$delete_product_result = mysqli_query($con, $delete_product_query);
if ($delete_product_result) {
  echo "<script>alert('Product deleted successfully.!!')</script>";
  echo "<script>window.open(index.php?view_products)</script>";
}

?>