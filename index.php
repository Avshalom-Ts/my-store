<?php
include('./includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Store</title>
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/c6bdbdbc60.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./images/AzLogo48px.png" alt="logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?dispaly_all">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>15</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total price: 100/-</a>
            </li>

          </ul>
          <form class="d-flex" action="" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
            <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>


    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!-- Third child -->
    <div class="bg-light">
      <h3 class="text-center">My Store</h3>
      <p class="text-center">Communications is at the heart of e-commerce and community</p>
    </div>

    <!-- Fourth child -->
    <div class="row px-1">
      <!-- Products Column -->
      <div class="col-md-10 px-4">
        <div class="row">
        <!-- Fetching products -->
        <?php
        if (isset($_GET['search_data_product'])) {
          searchProduct();
        } elseif (isset($_GET['dispaly_all'])) {
          getAllProducts();
        } else {
          getProducts();
        }

        getUniqueCategories();
        getUniqueBrands();
        ?>
        </div>
      </div>

      <!-- SideNav Column-->
      <div class="col-md-2 bg-secondary p-0">
        <!-- Brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h5>Delivery Brands</h5>
            </a>
          </li>
            <!-- Fetching the brads list from the database -->
          <?php
          getBrands();
          ?>
        </ul>
        <!-- Category to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h5>Categories</h5>
            </a>
          </li>
            <!-- Fetching the Categories list from the database -->
          <?php
          getCategories()
            ?>
        </ul>
      </div>
    </div>



    <!-- last child -->
    <div class="bg-info p-3 text-center footer container-fluid">
      <p>All rights reserved &#x0040; Avshalom-projects 2023 ab</p>
    </div>


    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>