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

 