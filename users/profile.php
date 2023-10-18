<?php
$user_id = $_SESSION['user_id'];
$select_user_query = "select * from `users` where user_id=$user_id";
$select_user_result = mysqli_query($con, $select_user_query);
$select_user_row = mysqli_fetch_array($select_user_result);

$username = $select_user_row['username'];
$first_name = $select_user_row['first_name'];
$last_name = $select_user_row['last_name'];
$email = $select_user_row['email'];
$avatar = $select_user_row['avatar'];
$address = $select_user_row['address'];
$phone = $select_user_row['phone'];
$type = $select_user_row['type'];
$created = $select_user_row['created'];
$updated = $select_user_row['updated'];

?>
<div class="row m-5 p-3">
  <h3>Profile Page</h3>
  <div class="col-6 mt-4 p-4">
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Joind: </h5><Strong class="align-self-end"><?php echo $created ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Type: </h5><Strong class="align-self-end"><?php echo $type ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Username: </h5><Strong class="align-self-end"><?php echo $username ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>First_name: </h5><Strong class="align-self-end"><?php echo $first_name ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Last_name: </h5><Strong class="align-self-end"><?php echo $last_name ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Email: </h5><Strong class="align-self-end"><?php echo $email ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Address: </h5><Strong class="align-self-end"><?php echo $address ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Phone: </h5><Strong class="align-self-end"><?php echo $phone ?></Strong>
    </div>
    <div class="d-flex justify-content-between border-bottom mt-4">
      <h5>Last updated: </h5><Strong class="align-self-end"><?php echo $updated ?></Strong>
    </div>
    <div class="d-flex justify-content-between mt-4">
      <a href="index.php?edit_profile" class="btn btn-secondary">Edit profile</a>
    </div>
  </div>
  <div class="col-6"></div>
</div>
