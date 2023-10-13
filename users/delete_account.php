<?php
$username_session = $_SESSION['username'];
if (isset($_POST['delete'])) {
  $delete_query = "delete from `user_table` where username='$username_session'";
  $result = mysqli_query($con, $delete_query);
  if ($result) {
    session_destroy();
    echo "<script>alert('Account deleted successfully.!!')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
  }
}

if (isset($_POST['dont_delete'])) {
  echo "<script>window.open('profile.php','_self')</script>";
}
?>
  <h3 class="text-center my-5">Delete Account</h3>
  <form action="" method="post" class="">
    <div class="form-outline w-50 m-auto text-center my-2">
      <input type="submit" class="btn btn-danger" name="delete" value="Delete Your Account">
    </div>
    <div class="form-outline w-50 m-auto text-center my-2">
      <input type="submit" class="btn btn-outline-info" name="dont_delete" value="Don't Delete Your Account">
    </div>
  </form>