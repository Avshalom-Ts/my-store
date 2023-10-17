<?php
// $user_session_name = $_SESSION['username'];
// $select_query = "select * from `user_table` where username='$user_session_name'";
// $result_query = mysqli_query($con, $select_query);
// $row_fetch = mysqli_fetch_assoc($result_query);
// $user_id = $row_fetch['user_id'];
// $user_name = $row_fetch['username'];
// $user_email = $row_fetch['user_email'];
// $user_address = $row_fetch['user_address'];
// $user_mobile = $row_fetch['user_mobile'];

// if (isset($_POST['user_update'])) {
//   $update_id = $user_id;
//   $user_name = $_POST['user_username'];
//   $user_email = $_POST['user_email'];
//   $user_address = $_POST['user_address'];
//   $user_mobile = $_POST['user_mobile'];
//   if ($_FILES['user_image']['name']) {
//     $user_image = $_FILES['user_image']['name'];
//     $user_image_tmp = $_FILES['user_image']['tmp_name'];
//     move_uploaded_file($user_image_tmp, "./user_images/$user_image");
//   }

//   // Update query
//   $update_data = "update `user_table` set username='$user_name',user_email='$user_email',user_address='$user_address',user_mobile='$user_mobile',user_image='$user_image' where user_id='$update_id'";
//   $result_update = mysqli_query($con, $update_data);
//   if ($result_update) {
//     echo "<script>alert('Updated successfully.')</script>";
//   }
// }
?>


  <h3 class="text-center my-4">Edit Account</h3>
  <form action="" method="post" enctype="multipart/form-data" class="text-center">
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="user_username" value="<?php echo $user_name ?>" placeholder="Username">
    </div>
    <div class="form-outline mb-4">
      <input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo $user_email ?>" placeholder="Email">
    </div>
    <div class="form-outline mb-4 d-flex w-50 m-auto">
      <input type="file" class="form-control" name="user_image">
      <img src="./user_images/<?php echo $user_image; ?>" alt="avatar" style="width:100px;">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="user_address" value="<?php echo $user_address ?>" placeholder="Address">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="user_mobile" value="<?php echo $user_mobile ?>" placeholder="Mobile">
    </div>
    <input type="submit" class="btn btn-info" value="Update" name="user_update">
  </form>

