<?php
include('./includes/connect.php');
include('functions/common_function.php');
include('./includes/header.php');
?>


  <!-- Navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <?php
    include('./includes/navbar.php');
    ?>


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
    <?php
    include('./includes/footer.php');
    ?>


    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>