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
</head>

<body class="bg-dark">
  <header>
    <!-- navigation bar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="nav flex-row justify-content-center align-items-center">
        <div class="col-1 m-3">
          <!--Logo-->
          <a class="navbar-brand" href="home.php">
            <img class="d-inline-block align-top d-flex" height="50" width="50"
              src="assets/cinemarvel_icons/cinemarvel_logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-7">
          <!-- Search -->
          <form class="d-flex justify-content-between">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <button type="button" class="btn btn-danger "><i class="fa fa-search"></i></button>
            </div>
            <div class="col-2">
              <!-- If a user is signed in display their username instead of the sign in option -->

              <?php if (isset($_SESSION["username"])): ?>
                <span class="link-light">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                <a href="cinemarvel_logout.php" class="link-light ms-3">Logout</a>
              <?php else: ?>
                <a href="cinemarvel_login.php" class="link-light">Sign In</a>
              <?php endif; ?>
              
            </div>
            <div class="col-2">
              <a href="cinemarvel_profile.html">
                <img class="rounded-circle ms-3" src="assets/cinemarvel_icons/navigation/icons8-test-account-96.png"
                  width="45" height="45" alt="profile icon">
                </img>
              </a>
            </div>

          </form>
        </div>
        <ul class="row">
          <li class="nav flex-row justify-content-center align-items-center">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="cinemarvel_main.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cinemarvel_browse.html">Browse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cinemarvel_new_releases.html">New Releases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cinemarvel_about.html">About Us</a>
              </li>
            </ul>
        </ul>
      </div>
    </nav>
  </header>
  </div>

  <!--we'll put Randomized Banners here-->
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
          <img src="assets/movie_banners/deadpool_wolverine_cropped.jpg" alt="Deadpool and Wolverine Banner"
            class="d-block h-100 w-100">
        </div>
        <div class="carousel-item">
          <img src="assets/movie_banners/venom.jpeg" alt="Venom Banner" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="assets/movie_banners/captain_america.jpg" alt="Captain America: A Brave New World Banner"
            class="d-block w-100">
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