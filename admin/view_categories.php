<?php

?>


<h3 class="text-center">All Categories</h3>

<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>No</th>
      <th>Category Title</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $get_category = "select * from `categories`";
    $result = mysqli_query($con, $get_category);
    while ($row_category = mysqli_fetch_assoc($result)) {
      $category_id = $row_category['category_id'];
      $category_title = $row_category['category_title'];

      echo "<tr>
      <td>$category_id</td>
      <td>$category_title</td>
      <td><a href='index.php?edit_category=$category_id' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='index.php?delete_category=$category_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>