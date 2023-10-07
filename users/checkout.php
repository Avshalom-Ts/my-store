<?php
include('../includes/connect.php');
include('../includes/header.php');
// include('../functions/common_function.php');
?>


  <!-- Navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../images/AzLogo48px.png" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
      <div class="col-md-12">
        <div class="row">
          <?php
          if (!isset($_SESSION['username'])) {
            include('./user_login.php');
          } else {
            include('payment.php');
          }


          ?>


        </div>
      </div>

    </div>



    <!-- last child -->
    <?php
    include('../includes/footer.php');


    // Render the IP address
    // $ip = getIPAddress();
    // echo 'User Real IP Address - ' . $ip;
    ?>


    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>