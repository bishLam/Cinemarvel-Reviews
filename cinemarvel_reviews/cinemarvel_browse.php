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

// SQL query to fetch movie details
$query = "SELECT movie_title, release_date, poster_filepath FROM movies LIMIT 20";  
$result = mysqli_query($conn, $query);

$movie = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
<div class="container mt-5 bg-danger p-4 border-danger rounded">
        <div class="row">
            <?php while ($movie = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark border-4 border-dark text-light p-1" style="width: 12rem; height: 22rem">
                        <img class="card-img-top" src="assets/movie_posters/<?php echo $movie['poster_filepath']; ?>" alt="<?php echo htmlspecialchars($movie['movie_title']); ?> Poster">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-3"><?php echo htmlspecialchars($movie['movie_title']); ?></h5>
                            <p class="card-text"><?php echo date('d M Y', strtotime($movie['release_date'])); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    
</body>
</html>
