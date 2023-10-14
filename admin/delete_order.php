<?php
$delete_order_id = $_GET['delete_order'];
$delete_order_query = "delete from `user_orders` where order_id=$delete_order_id";
$delete_order_result = mysqli_query($con, $delete_order_query);
if ($delete_order_result) {
  echo "<script>alert('Delete order successful.!!')</script>";
  echo "<script>window.open('index.php?view_orders','_self')</script>";
}
?>