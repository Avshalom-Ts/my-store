<?php
include('./includes/connect.php');
include('functions/common_function.php');
include('./includes/header.php');
session_start();
?>


  <!-- Navbar -->
  <div class="container-fluid p-0">


    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <?php
        if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users/user_login.php'>Welcome Guest</a>
        </li>";
        } else {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users/profile.php'>Welcome " . $_SESSION['username'] . "</a>
        </li>";
        }
        if (!isset($_SESSION['username'])) {
          // echo $_SESSION['username'];
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users/user_login.php'>Login</a>
        </li>";
        } else {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users/logout.php'>Logout</a>
        </li>";
        }
        ?>
      </ul>
    </nav>
    <!-- <form action='./users/logout.php'>
      <input type='submit' class='nav-link' value='Logout'>
    </form> -->

    <!-- Third child -->
    <div class="bg-light">
      <h3 class="text-center">My Store</h3>
      <p class="text-center m-0">Communications is at the heart of e-commerce and community</p>
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
        } elseif (isset($_GET['product_id'])) {
          getProductByID();
        } else {
          getProducts();
        }
        getUniqueCategories();
        getUniqueBrands();
        ?>
        </div>
      </div>

      <!-- SideNav Column-->
      <div class="col-md-2 bg-secondary p-0" style="height:100vh;">
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
    <?php
    include('./includes/footer.php');
    ?>