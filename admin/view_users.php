<h3 class="text-center mt-4">All Users</h3>

<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Image</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Type</th>
      <th>Joind</th>
      <th>Updated</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $select_users_query = "select * from `users`";
    $select_users_result = mysqli_query($con, $select_users_query);
    while ($select_users_row = mysqli_fetch_array($select_users_result)) {
      $user_id = $select_users_row['user_id'];
      $username = $select_users_row['username'];
      $first_name = $select_users_row['first_name'];
      $last_name = $select_users_row['last_name'];
      $email = $select_users_row['email'];
      $image = $select_users_row['avatar'];
      $address = $select_users_row['address'];
      $phone = $select_users_row['phone'];
      $type = $select_users_row['type'];
      $created = $select_users_row['created'];
      $updated = $select_users_row['updated'];

      echo "<tr>
      <td>$user_id</td>
      <td>$username</td>
      <td>$first_name</td>
      <td>$last_name</td>
      <td>$email</td>
      <td><img src='../users/user_images/$image' alt='product_image' style='width: 50px;'></td>
      <td>$address</td>
      <td>$phone</td>
      <td>$type</td>
      <td>$created</td>
      <td>$updated</td>
      <td><a href='index.php?edit_user=$user_id' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='index.php?delete_user=$user_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>