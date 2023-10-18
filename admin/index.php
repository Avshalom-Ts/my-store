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
  <!-- <link rel="stylesheet" href="style.scss"> -->
  <title>Admin Page</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-dark bg-black">
  <div class="container">
    <div class="d-flex">
      <a href="index.php" class=""><img src="../images/AzLogo48px.png" alt="" class="admin-image"></a>
      <h4 class="text-dark text-center align-self-end ms-3">Hi, Admin name</h4>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>



  <div class="container-fluid bg-light pt-5">
    <!-- Links Pages -->
    <div class="row pt-2 bg-secondary">
      <h3 class="text-light text-center pt-3">Admin Page</h3>
      <div class="col-md-12p-1 d-flex justify-content-center align-items-center">
        <div class="p-3">
        </div>
        <div class="button text-center">
          <button class="my-3"><a href="index.php?insert_product" class="nav-link text-light bg-info my-1">Insert Products</a></button>
          <button class="my-3"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
          <button class="my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
          <button class="my-3"><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
          <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
          <button class="my-3"><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
          <button class="my-3"><a href="index.php?view_orders" class="nav-link text-light bg-info my-1">All Orders</a></button>
          <button class="my-3"><a href="index.php?view_payments" class="nav-link text-light bg-info my-1">All Payments</a></button>
          <button class="my-3"><a href="index.php?view_users" class="nav-link text-light bg-info my-1">All Users</a></button>
          <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
      </div>
    </div>


    <div class="container">
      <!-- Page Content -->
      <?php
      if (isset($_GET['insert_product'])) {
        include('insert_product.php');
      }
      if (isset($_GET['insert_category'])) {
        include('insert_categories.php');
      }
      if (isset($_GET['view_categories'])) {
        include('view_categories.php');
      }
      if (isset($_GET['edit_category'])) {
        include('edit_category.php');
      }
      if (isset($_GET['delete_category'])) {
        include('delete_category.php');
      }
      if (isset($_GET['insert_brand'])) {
        include('insert_brands.php');
      }
      if (isset($_GET['view_brands'])) {
        include('view_brands.php');
      }
      if (isset($_GET['edit_brand'])) {
        include('edit_brand.php');
      }
      if (isset($_GET['delete_brand'])) {
        include('delete_brand.php');
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
      if (isset($_GET['view_orders'])) {
        include('view_orders.php');
      }
      if (isset($_GET['delete_order'])) {
        include('delete_order.php');
      }
      if (isset($_GET['view_payments'])) {
        include('view_payments.php');
      }
      if (isset($_GET['view_users'])) {
        include('view_users.php');
      }
      ?>
    </div>
  </div>

    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>
</body>

</html>