<nav class="navbar navbar-expand-lg navbar-light bg-info">
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
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>