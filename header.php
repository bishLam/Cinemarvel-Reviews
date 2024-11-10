<header>
  <?php session_start(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- First Row: Logo, Search Bar, and Profile/Login -->
      <div class="d-flex w-100 justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
          <img src="assets/cinemarvel_icons/cinemarvel_logo.png" alt="Logo" width="50" height="50">
        </a>
        <!-- Search bar -->
        <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#">New Release</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Browse
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">By Franchise</a></li>
                <li><a class="dropdown-item" href="#">By Genre</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#">FAQ's</a>
            </li>
          </ul>
        </div>
        <!-- login/signup/profile -->
        <div class="d-flex align-items-center">
          <?php if (isset($_SESSION["first_name"])): ?>
            <span class="text-light me-3">Welcome <?php echo htmlspecialchars($_SESSION["first_name"]); ?></span>
            <a href="cinemarvel_logout.php" class="link-light me-3">Logout</a>
          <?php else: ?>
            <a href="cinemarvel_login.php" class="link-light me-3">Login</a>
          <?php endif; ?>
          <a href="profile-page.php">
            <img class="rounded-circle" src="assets/cinemarvel_icons/navigation/icons8-test-account-96.png" width="45" height="45" alt="profile icon">
          </a>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Second Row: Navigation Links -->
    <div class="container-fluid d-flex justify-content-center">
      <form class="d-flex" style="flex: 1; max-width: 400px;">
        <div class="input-group ml-3">
          <input type="text" class="form-control" placeholder="Search">
          <button type="button" class="btn btn-danger"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
  </nav>
</header>