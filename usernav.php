<?php

if (!isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $select_user_query = "select * from `users` where username=$username";

}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-0">
  <div class="container">
    <ul class="navbar-nav me-auto">
      <?php
      // Say Hy for User or Guest
      if (!isset($_SESSION['username'])) {
        echo "<li class='nav-item'>
          <a class='nav-link' href='./users/user_login.php'>Welcome Guest</a>
        </li>";
      } else {
        echo "<li class='nav-item'>
          <a class='nav-link' href='./users/profile.php'>Welcome " . $_SESSION['username'] . "</a>
        </li>";
      }
      // Show login or Logout
      if (!isset($_SESSION['username'])) {
        echo "<li class='nav-item'>
          <a class='nav-link' href='./users/user_login.php'>Login</a>
        </li>";
      } else {
        echo "<li class='nav-item'>
          <a class='nav-link' href='./users/logout.php'>Logout</a>
        </li>";
      }
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
          <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- Botstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>