<?php
include('../includes/connect.php');
session_start();
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $select_user_query = "SELECT * FROM `users` WHERE user_id=$user_id";
  $select_user_result = mysqli_query($con, $select_user_query);
  $select_user_row = mysqli_fetch_assoc($select_user_result);
  $username = $select_user_row['username'];
} else {
  echo "<script>window.open('../index.php','_self')</script>";
}

$link_active = 'active';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Icons -->
  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/c6bdbdbc60.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.scss">
  <title>Admin Page</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-dark bg-black">
  <div class="container">
    <div class="d-flex">
      <a href="index.php" class=""><img src="../images/AzLogo48px.png" alt="" class="admin-image"></a>
      <h4 class="text-dark text-center align-self-end ms-3">Hi, <?php echo $username ?></h4>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="index.php?view_products">All Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?insert_product">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?view_categories">All Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?insert_category">Add Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?view_brands">All Brands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?insert_brand">Add Brands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?view_users">All Users</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Views
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?all_orders">All Orders</a></li>
              <li><a class="dropdown-item" href="index.php?all_payments">All Payments</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" action="index.php" method="get" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
          </form>
      </div>
    </div>
  </div>
</nav>

    <div class="container flex-grow-1 py-5">
      <!-- Page Content -->
      <?php
      if (isset($_GET['insert_product'])) {
        include('insert_product.php');

      } elseif (isset($_GET['insert_category'])) {
        include('insert_categories.php');

      } elseif (isset($_GET['view_categories'])) {
        include('view_categories.php');

      } elseif (isset($_GET['edit_category'])) {
        include('edit_category.php');

      } elseif (isset($_GET['delete_category'])) {
        include('delete_category.php');

      } elseif (isset($_GET['insert_brand'])) {
        include('insert_brands.php');

      } elseif (isset($_GET['view_brands'])) {
        include('view_brands.php');

      } elseif (isset($_GET['edit_brand'])) {
        include('edit_brand.php');

      } elseif (isset($_GET['delete_brand'])) {
        include('delete_brand.php');

      } elseif (isset($_GET['edit_products'])) {
        include('edit_products.php');

      } elseif (isset($_GET['delete_products'])) {
        include('delete_product.php');

      } elseif (isset($_GET['all_orders'])) {
        include('all_orders.php');

      } elseif (isset($_GET['delete_order'])) {
        include('delete_order.php');

      } elseif (isset($_GET['all_payments'])) {
        include('all_payments.php');

      } elseif (isset($_GET['view_users'])) {
        include('view_users.php');

      } elseif (isset($_GET['edit_user'])) {
        include('edit_user.php');

      } else {
        include('view_products.php');
      }
      ?>
    </div>
  </div>

  <!-- Footer -->
  <div class="bg-black p-3 text-center text-light footer w-100">
    <p>All rights reserved &#x0040;Avshalom-projects 2023</p>
  </div>

    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>
</body>

</html>