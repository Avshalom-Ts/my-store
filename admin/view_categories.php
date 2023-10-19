<div class="container mt-5">

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
      <td><a href='' class='text-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fa-solid fa-trash'></i></a></td>
    </tr>
    
    <!-- Modal -->
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h1 class='modal-title fs-5' id='exampleModalLabel'>Modal title</h1>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            Are you sure you want to delete this Category ? <strong>$category_title</strong>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
            <a href='index.php?delete_category=$category_id' type='button' class='btn btn-primary'>Delete</a>
          </div>
        </div>
      </div>
    </div>";
    }
    ?>
    
  </tbody>
</table>

</div>
