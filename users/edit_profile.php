<?php
$user_id = $_SESSION['user_id'];
$select_user_query = "select * from `users` where user_id=$user_id";
$select_user_result = mysqli_query($con, $select_user_query);
$select_user_row = mysqli_fetch_assoc($select_user_result);

$username = $select_user_row['username'];
$first_name = $select_user_row['first_name'];
$last_name = $select_user_row['last_name'];
$email = $select_user_row['email'];
$hash_password = $select_user_row['password'];
$image_name = $select_user_row['avatar'];
$address = $select_user_row['address'];
$phone = $select_user_row['phone'];
$type = $select_user_row['type'];
$created = $select_user_row['created'];
$updated = $select_user_row['updated'];

if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $conf_password = $_POST['conf_password'];
  if ($password) {
    if ($password == $conf_password) {
      $hash_password = password_hash($password, PASSWORD_DEFAULT);
    }
  }



  if ($_FILES['image']['name']) {
    $image_name = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "./user_images/$image_name");
  }

  // Update query
  $update_user_query = "update `users` set username='$username',first_name='$first_name',last_name='$last_name',email='$email',password='$hash_password',address='$address',phone='$phone',avatar='$image_name' where user_id=$user_id";
  $update_user_result = mysqli_query($con, $update_user_query);
  if ($update_user_result) {
    // echo "<script>alert('Updated successfully.')</script>";
    // TODO Toaster to inform the user of the changes
  }
}
?>


  <h3 class="text-center my-4">Edit Account</h3>
  <form action="" method="post" enctype="multipart/form-data" class="text-center">
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="username" value="<?php echo $username ?>" placeholder="Username">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="first_name" value="<?php echo $first_name ?>" placeholder="First Name">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="last_name" value="<?php echo $last_name ?>" placeholder="Last Name">
    </div>
    <div class="form-outline mb-4">
      <input type="email" class="form-control w-50 m-auto" name="email" value="<?php echo $email ?>" placeholder="Email">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="address" value="<?php echo $address ?>" placeholder="Address">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="phone" value="<?php echo $phone ?>" placeholder="Phone No">
    </div>
    <div class="form-outline mb-4 d-flex w-50 m-auto">
      <input type="file" class="form-control" name="image">
      <img src="./user_images/<?php echo $image_name; ?>" alt="avatar" style="width:100px;height:100px;object-fit:contain;">
    </div>
    <div class="form-outline mb-4">
      <input type="password" class="form-control w-50 m-auto" name="password" placeholder="New Password">
    </div>
    <div class="form-outline mb-4">
      <input type="password" class="form-control w-50 m-auto" name="conf_password" placeholder="Confirm Password">
    </div>
    <div class="d-flex justify-content-between w-50 m-auto">
      <input type="submit" class="btn btn-info" value="Update Account" name="update">
      <a href="index.php?delete_account" class="btn btn-danger">Delete Account</a>
    </div>
  </form>

