<?php

$delete_query = "delete from `users` where user_id=$user_id";
$result = mysqli_query($con, $delete_query);
if ($result) {
  session_destroy();
  echo "<script>alert('Account deleted successfully.!!')</script>";
  echo "<script>window.open('../index.php','_self')</script>";
}

?>