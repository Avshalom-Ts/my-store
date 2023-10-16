<?php
include('./includes/connect.php');
include('functions/common_function.php');
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $select_user_query = "select * from `users` where username=$username";

}

$active_link_all_products = "";
if (isset($_GET['dispaly_all'])) {
  $active_link_all_products = "active_link";
}

$page_title = "Home Page";
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
  <title><?php echo $page_title ?></title>
</head>

<!-- Layout -->
<body id="body-pd">
  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/AzLogo48px.png" alt="logo" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <?php
          // if (isset($_SESSION['username'])) {
          //   echo "<li class='nav-item'><a class='nav-link' href='./users/profile.php'>My profile</a></li>";
          // } else {
          //   echo "<li class='nav-item'><a class='nav-link' href='./users/user_registration.php'>Register</a></li>";
          // }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
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
              ?>/-
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <header class="header bg-dark" id="header">
    <!-- Left side -->
    <div class="d-flex gap-3 justify-content-center align-items-center">
      <div class="header_toggle text-light">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="logo">
        <a href="index.php"><img src="images/AzLogo48px.png" alt="logo" width="50" class="nav_logo-icon"></a>
      </div>
    </div>
    
    <!-- Right side -->
    <div class="d-flex gap-4">
      <div class="d-flex justify-content-center align-items-center">
        <a class="nav-link link-light" href="index.php?cart"><i class="fa-solid fa-cart-shopping"></i>
          <sup>
            <?php
            cart_items();
            ?>
          </sup>
        </a>
      </div>
      <div class="header_img">
        <?php
        if (isset($_SESSION['username'])) {

          echo "<a href='profile.php'><img src='images/Man_avatar_image.jpg' alt='user image'/></a>";
        } else {
          echo "<a href='index.php'><img src='images/Girl_avatar_image.jpg' alt='user image'/></a>";
        }
        ?>
        
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Sidenav Links -->
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <!-- <a href="index.php" class="nav_logo">
          <img src="images/AzLogo48px.png" alt="logo" width="30" class="nav_logo-icon">
          <span class="nav_logo-name">My Store</span>
        </a> -->

        <a href="#" class="nav_logo">
          <i class="bx bx-layer nav_logo-icon"></i>
          <span class="nav_logo-name">My Store</span>
        </a>
        <div class="nav_list">
          <a href="index.php?dispaly_all" class="nav_link <?php echo $active_link_all_products ?>">
            <i class='bx bx-barcode nav_icon'></i>

            <!-- <i class="bx bx-grid-alt nav_icon"></i> -->
            <span class="nav_name">All products</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-user nav_icon"></i>
            <span class="nav_name">Users</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-message-square-detail nav_icon"></i>
            <span class="nav_name">Messages</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-bookmark nav_icon"></i>
            <span class="nav_name">Bookmark</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-folder nav_icon"></i>
            <span class="nav_name">Files</span>
          </a>
          <a href="#" class="nav_link">
            <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
            <span class="nav_name">Stats</span>
          </a>
        </div>
      </div>
      <a href="#" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">SignOut</span>
      </a>
    </nav>
  </div>
  <div class="height-100 bg-light">
    <!-- Second navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            // Say Hy for User or Guest
            if (!isset($_SESSION['username'])) {
              echo "<li class='nav-item d-flex align-items-baseline'>
                  <h6>Welcome </h6><a class='nav-link' href='index.php?login'>Guest</a>
                </li>";
            } else {
              echo "<li class='nav-item'>
                  <span>Welcome </span><a class='nav-link' href='index.php?profile'>" . $_SESSION['username'] . "</a>
                </li>";
            }
            // Show login or Logout
            if (!isset($_SESSION['username'])) {
              echo "<li class='nav-item'>
                  <a class='nav-link' href='index.php?login'>Login</a>
                </li>";
            } else {
              echo "<li class='nav-item'>
                  <a class='nav-link' href='index.php?logout'>Logout</a>
                </li>";
            }
            ?>
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
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" action="" method="get" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>
    
    <!-- Main Components -->
    <div class="row">
      <div class="col-12">
        <div class="row p-2">
        <?php
        if (isset($_GET['search_data_product'])) {
          searchProduct();
        } elseif (isset($_GET['dispaly_all'])) {
          getAllProducts();
        } elseif (isset($_GET['product_id'])) {
          getProductByID();
        } elseif (isset($_GET['cart'])) {
          include('cart.php');
        } elseif (isset($_GET['login'])) {
          include('./users/login.php');
        } elseif (isset($_GET['registration'])) {
          include('./users/registration.php');
        } else {
          getProducts();
        }
        getUniqueCategories();
        getUniqueBrands();
        ?>
        </div>
      </div>
    </div>
  </div>

    <!-- Footer -->
    <?php
    // include('./includes/footer.php');
    // Render the IP address
    // $ip = getIPAddress();
    // echo "<script>console.log('$ip')</script>";
    // echo 'User Real IP Address - ' . $ip;
    ?>

  <div class="bg-dark p-3 text-center text-light footer w-100">
    <p>All rights reserved &#x0040;Avshalom-projects 2023</p>
  </div>

    <!-- Botstrap JS link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>

</html>