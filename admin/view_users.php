<h3 class="text-center mt-4">All Users</h3>

<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>image</th>
      <th>Address</th>
      <th>Mobile</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $select_users_query = "select * from `user_table`";
    $select_users_result = mysqli_query($con, $select_users_query);
    while ($select_users_row = mysqli_fetch_array($select_users_result)) {
      $user_id = $select_users_row['user_id'];
      $username = $select_users_row['username'];
      $user_email = $select_users_row['user_email'];
      $user_image = $select_users_row['user_image'];
      $user_address = $select_users_row['user_address'];
      $user_mobile = $select_users_row['user_mobile'];

      echo "<tr>
      <td>$user_id</td>
      <td>$username</td>
      <td>$user_email</td>
      <td><img src='../users/user_images/$user_image' alt='product_image' style='width: 50px;'></td>
      <td>$user_address</td>
      <td>$user_mobile</td>
      <td><a href='index.php?edit_user=$user_id' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='index.php?delete_user=$user_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>