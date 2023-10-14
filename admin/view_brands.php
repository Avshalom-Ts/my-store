
<h3 class="text-center">All Brands</h3>

<table class="table table-bordered mt-5 text-center">
  <thead class="table-info">
    <tr>
      <th>No</th>
      <th>Brand Title</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody class="table-secondary">
    <?php
    $get_brand = "select * from `brands`";
    $result = mysqli_query($con, $get_brand);
    while ($row_brand = mysqli_fetch_assoc($result)) {
      $brand_id = $row_brand['brand_id'];
      $brand_title = $row_brand['brand_title'];
      echo "<tr>
      <td>$brand_id</td>
      <td>$brand_title</td>
      <td><a href='index.php?edit_brand=$brand_id' class='text-info'><i class='fa-solid fa-pen-to-square'></i></a></td>
      <td><a href='index.php?delete_brand=$brand_id' class='text-danger'><i class='fa-solid fa-trash'></i></a></td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>