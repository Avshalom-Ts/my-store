<?php
include('../includes/connect.php');
include('../functions/common_function.php');
include('../includes/header.php');
session_start();
?>

<link rel="stylesheet" href="../style.css">
<style>
  .profile_img{
  width: 60%;
  height: 100%;
  object-fit:contain;
}
</style>

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
          <a class="nav-link" href="../index.php?dispaly_all">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../users/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i>
            <sup>
              <?php
              cart_items();
              ?>
            </sup>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price: 
            <?php
            totalCartPrice();
            ?>/-</a>
        </li>

      </ul>
      <form class="d-flex" action="../index.php" method="get">
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
        <?php
        if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./user_login.php'>Welcome Guest</a>
        </li>";
        } else {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./profile.php'>Welcome " . $_SESSION['username'] . "</a>
        </li>";
        }
        if (!isset($_SESSION['username'])) {
          // echo $_SESSION['username'];
          echo "<li class='nav-item'>
          <a class='nav-link' href='./user_login.php'>Login</a>
        </li>";
        } else {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./logout.php'>Logout</a>
        </li>";
        }
        ?>
      </ul>
    </nav>
    
    <!-- Third child -->
    <!-- <div class="bg-light">
      <h3 class="text-center">My Store</h3>
      <p class="text-center m-0">Communications is at the heart of e-commerce and community</p>
    </div> -->

    <!-- Fourth child -->
    <div class="row">
      <!-- Side navbar -->
      <div class="col-2 p-0">
        <ul class="navbar-nav bg-secondary text-center" style="height:100vh;">
        <li class="nav-item bg-info">
          <a class="nav-link text-light" aria-current="page" href="#"><h4>Your Profile</h4></a>
        </li>

        <?php
        $username = $_SESSION['username'];
        if (!$username) {
          echo "<script>window.open('../index.php','_self')</script>";
        }
        $user_image = "select * from `user_table` where username='$username'";
        $result_image = mysqli_query($con, $user_image);
        $row_image = mysqli_fetch_array($result_image);
        $user_image = $row_image['user_image'];
        echo "<li class='nav-item bg-info'>
          <img src='./user_images/$user_image' alt='user_avatar' class='profile_img'>
        </li>";
        ?>

        
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="profile.php">Pending orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="profile.php?edit_account">Edit account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="profile.php?my_orders">My orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="profile.php?delete_account">Delete account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="logout.php">Logout</a>
        </li>
        </ul>
      </div>
      <div class="col-10">

      <?php
      getUserOrderDetails();
      if (isset($_GET['edit_account'])) {
        include('edit_account.php');
      }
      if (isset($_GET['my_orders'])) {
        include('user_orders.php');
      }
      ?>

      </div>
    </div>


    <!-- last child -->
    <?php
    include('../includes/footer.php');
    ?>


    <!-- Botstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>
</body>

</html>