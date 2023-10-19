<div class="container mt-5">

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
        <td><a href='' class='text-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fa-solid fa-trash'></i></a></td>
      </tr>";
      }
      ?>
      
    </tbody>
  </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this brand ? <?php echo $brand_title ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href='index.php?delete_brand=<?php echo $brand_id ?>' type="button" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>