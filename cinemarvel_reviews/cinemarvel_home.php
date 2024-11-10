<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cinemarvel_reviews";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cinemarvel Reviews</title>
  <meta charset="utf-8">
  <meta name="author" content="bishonath+syeda">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/cinemarvel_icons/cinemarvel_logo.png">
  <link rel="stylesheet" href="cinemarvel_main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <style>
    .navbar-nav {
      display: flex;
      justify-content: center;
    }

    .nav-item {
      margin-right: 20px; 
    }

  </style>
</head>

<body class="bg-dark">
<header>
    <!-- Navigation bar start -->
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="row w-100">
      <!-- Logo -->
      <div class="col-3 d-flex align-items-center">
        <a class="navbar-brand" href="home.php">
          <img class="d-inline-block align-top" height="50" width="50" src="assets/cinemarvel_icons/cinemarvel_logo.png" alt="Logo">
        </a>
      </div>

      <!-- Search Bar -->
      <div class="col-6 d-flex justify-content-center align-items-center">
        <form class="d-flex w-100" method="GET" action="search_results.php">
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search for movies..." aria-label="Search">
            <button class="btn btn-danger" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Sign In and Profile -->
      <div class="col-3 d-flex align-items-center justify-content-end">
        <!-- If user is signed in their username should appear instead of the sign in button-->
        <?php if (isset($_SESSION["username"])): ?>
          <span class="link-light">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          <a href="cinemarvel_logout.php" class="link-light ms-3">Logout</a>
        <?php else: ?>
          <a href="cinemarvel_login.php" class="link-light">Sign In</a>
        <?php endif; ?>

        <!-- Profile icon -->
        <a href="cinemarvel_profile.html">
          <img class="rounded-circle ms-3" src="assets/cinemarvel_icons/navigation/icons8-test-account-96.png" width="45" height="45" alt="Profile icon">
        </a>
      </div>
    </div>
  </div>

  <!-- Page Links -->
  <div class="row w-100 mt-2">
    <div class="col-12 d-flex justify-content-center">
      <ul class="navbar-nav d-flex flex-row justify-content-center w-auto gap-4">
        <li class="nav-item">
          <a class="nav-link link-light" href="cinemarvel_home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="cinemarvel_browse.php">Browse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="cinemarvel_new_releases.php">New Releases</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-light" href="cinemarvel_about.php">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </header>
  <section class="banner" id="main_banner">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
        <?php
          include "database.php";
          $sql = "SELECT poster_filepath FROM movies ";
          $result = mysqli_query($conn, $sql);

          $imageURL = array();

          if ($result != null) {
            while ($row = mysqli_fetch_array($result)) {
              $imageURL[] = $row["poster_filepath"];
            }

            $randomURL = $imageURL[array_rand($imageURL)];
          } else {
            $randomURL = "ironman.jpg";
          }
          ?>
          <img src="assets/movie_banners/<?php echo $randomURL ?>" alt="Banner URL" class="d-block w-100">
        </div>
        <div class="carousel-item" style="max-height: 80%">
          <?php
          include "database.php";
          $sql = "SELECT poster_filepath FROM movies ";
          $result = mysqli_query($conn, $sql);

          $imageURL = array();

          if ($result) {
            while ($row = mysqli_fetch_array($result)) {
              $imageURL[] = $row["poster_filepath"];
            }

            $randomURL = $imageURL[array_rand($imageURL)];
          } else {
            $randomURL = "ironman.jpg";
          }
          ?>
          <img src="assets/movie_banners/<?php echo $randomURL ?>" alt="Banner URL" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <?php
          include "database.php";
          $sql = "SELECT poster_filepath FROM movies ";
          $result = mysqli_query($conn, $sql);

          $imageURL = array();

          if ($result) {
            while ($row = mysqli_fetch_array($result)) {
              $imageURL[] = $row["poster_filepath"];
            }

            $randomURL = $imageURL[array_rand($imageURL)];
          } else {
            $randomURL = "ironman.jpg";
          }
          ?>
          <img src="assets/movie_banners/<?php echo $randomURL ?>" alt="Banner URL" class="d-block w-100">
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>
  <section class="p-4">
    <!--Intro-->
    <div class="bg-danger border border-danger rounded mx-auto p-3" style="max-width: 90%;">
      <div class="mx-auto px-3 text-light">
        <h2 class="fs-1">Welcome to Cinemarvel Reviews</h2>
        <div class="row align-items-center">
          <div class="col">
            <p class="fs-5">Join the ultimate Marvel fan community—rate, review, and discuss your favorite movies and
              shows.</p>
          </div>
          <div class="col-6"><img src="assets/screenshots/screenshot_1.png" class="img-fluid"></div>
        </div>
        <div class="row align-items-center">
          <div class="col-6"><img src="assets/screenshots/screenshot_2.png" class="img-fluid"></div>
          <div class="col">
            <p class="fs-5">
              Find detailed info and ratings on every Marvel release—sorted by fans, for fans.
            </p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col">
            <p class="fs-5">Personalize your experience: create lists, manage reviews, and explore new releases.</p>
          </div>
          <div class="col-6"><img src="assets/screenshots/screenshot_3.png" class="img-fluid"></div>
        </div>
      </div>
    </div>

    <!--Movie Carousel-->
    <div class="text-light">
      <div class=" mx-auto py-3">
        <h1>New Releases</h1>
        <!--Carousel of New Movie Cards-->
      </div>
      <hr class="border-danger border-4">
      <div class="mx-auto py-3">
        <h1>Upcoming</h1>
        <!--Carousel of Upcoming Movie Cards-->
        <div id="carouselUpcoming" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
                <div class="card bg-dark border-4 border-dark text-light" style="width: 18rem; height: 32rem">
                  <img class="card-img-top" src="assets/movie_posters/blade.jpg" alt="Blade Poster">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-3">Blade</h5>
                    <p class="card-text">7 NOV 2025</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselUpcoming" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselUpcoming" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="text-light">
      <div class="bg-danger border border-danger rounded mx-auto py-3">
        <h1>Browse By Franchise</h1>
        <!--Carousel of Franchise Cards-->
        <div class="bg-danger border border-danger rounded mx-auto py-3">
          <div id="carouselFranchises" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card-wrapper container-sm d-flex  justify-content-around">
                  <div class="card bg-dark border-4 border-danger  text-light" style="width: 18rem;">

                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>

                    </div>
                  </div>
                  <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>

                    </div>
                  </div>
                  <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>
                    </div>

                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-wrapper container-sm d-flex  justify-content-around">
                  <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>

                    </div>
                  </div>
                  <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>

                    </div>
                  </div>
                  <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-2">Sci-fi</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFranchises"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselFranchises"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="bg-danger border border-danger rounded mx-auto py-3">
        <h1>Browse By Genre</h1>
        <!--Carousel of Genre Cards-->
        <div id="carouselGenres" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
                <div class="card bg-dark border-4 border-danger  text-light" style="width: 18rem;">

                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>

                  </div>
                </div>
                <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>

                  </div>
                </div>
                <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>
                  </div>

                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
                <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>

                  </div>
                </div>
                <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">

                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>

                  </div>
                </div>
                <div class="card bg-dark border-4 border-danger text-light" style="width: 18rem;">
                  <div class="card-body text-center">
                    <h5 class="card-title fs-2">Sci-fi</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselGenres" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselGenres" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <hr class="border-danger border-4">
  </section>

  <!--------------------------------------------------------------->

  <div class="mx-auto py-3">
    <a href="#" target="_blank"><img src="assets/cinemarvel_icons/socials/icons8-instagram-48.png" alt="instagram"></a>
    <a href="#" target="_blank"><img src="assets/cinemarvel_icons/socials/icons8-youtube-60.png" alt="youtube"></a>
    <a href="#" target="_blank"><img src="assets/cinemarvel_icons/socials/icons8-x-60.png" alt="x"></a>
    <a href="#" id="contact-link"><img src="assets/cinemarvel_icons/socials/icons8-call-50.png" alt="x"></a>
  </div>
</body>

</html>