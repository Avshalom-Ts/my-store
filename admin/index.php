<?php
include('../includes/connect.php');
include('../functions/common_function.php');
include('../includes/header.php');
?>

  <div class="container-fluid p-0">

    <!-- Second child -->
    <div class="bg-light">
      <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- Third child -->
    <div class="row">
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="p-3">
          <a href="#" class=""><img src="../images/AzLogo48px.png" alt="" class="admin-image"></a>
          <p class="text-light text-center">Admin name</p>
        </div>
        <div class="button text-center">
          <button class="my-3"><a href="index.php?insert_product" class="nav-link text-light bg-info my-1">Insert Products</a></button>
          <button class="my-3"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
          <button class="my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
          <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Users</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
      </div>
    </div>


    <!-- Forth child -->
    <div class="container">
      <?php
      if (isset($_GET['insert_product'])) {
        include('insert_product.php');
      }
      if (isset($_GET['insert_category'])) {
        include('insert_categories.php');
      }
      if (isset($_GET['insert_brand'])) {
        include('insert_brands.php');
      }
      if (isset($_GET['view_products'])) {
        include('view_products.php');
      }
      if (isset($_GET['edit_products'])) {
        include('edit_products.php');
      }
      if (isset($_GET['delete_products'])) {
        include('delete_product.php');
      }
      ?>
    </div>

<?php
// include('../includes/footer.php');
?>
