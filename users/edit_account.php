<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/c6bdbdbc60.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Edit Account</title>

</head>

<body>
  <h3 class="text-center text-success mb-4">Edit Account</h3>
  <form action="" method="post" enctype="multipart/form-data" class="text-center">
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="user_username" placeholder="Username">
    </div>
    <div class="form-outline mb-4">
      <input type="email" class="form-control w-50 m-auto" name="user_email" placeholder="Email">
    </div>
    <div class="form-outline mb-4 d-flex w-50 m-auto">
      <input type="file" class="form-control" name="user_image">
      <img src="./user_images/<?php echo $user_image; ?>" alt="avatar" style="width:100px;">
    </div>
    <div class="form-outline mb-4">
      <input type="email" class="form-control w-50 m-auto" name="user_address" placeholder="Address">
    </div>
    <div class="form-outline mb-4">
      <input type="text" class="form-control w-50 m-auto" name="user_mobile" placeholder="Mobile">
    </div>
    <input type="submit" class="btn btn-info" value="Update" name="user_update">
  </form>

</body>

</html>