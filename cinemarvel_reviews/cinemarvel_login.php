<?php
session_start();
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

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate input
    if (empty($username)) {
        header("Location: cinemarvel_home.php?error=Username is Required");
        exit();
    } elseif (empty($password)) {
        header("Location: cinemarvel_home.php?error=Password is Required");
        exit();
    }

    // Sign-in query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Log in successful
        $_SESSION["username"] = $row["username"];
        $_SESSION["id"] = $row["id"];
        header("Location: cinemarvel_main.php");
        exit();
    } else {
        // Incorrect username or password
        header("Location: cinemarvel_home.php?error=Incorrect Username or Password");
        exit();
    }
}
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
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <header>
        <!-- navigation bar start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="nav flex-row justify-content-center align-items-center" >
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
                <a href="#" class="link-light">Sign In</a>
              </div>
              <div class="col-2">
                <a href="cinemarvel_profile.html">
                  <img class="rounded-circle ms-3" src="assets/cinemarvel_icons/navigation/icons8-test-account-96.png"
                    width="45" height="45" alt="profile icon">
                  </img>
                </a>
            </div>
            </form>

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
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper">
    <form action="cinemarvel_login.php" method="post">

        <div
        class="overflow-hidden min-vh-100 d-flex align-items-center justify-content-center ">
        <div class="d-flex align-items-center justify-content-center w-100 ">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body align-items-center justify-content-center">
                    <img src="/assets/cinemarvel_icons/cinemarvel_logo.png" width="100" alt="cinemarvel logo">
                  <p class="text-center">Log in to start</p>
                  <form>
                    <div class="mb-3">
                      <label for="uName" class="form-label">Username</label>
                      <input type="text" class="form-control" id="uName">
                    </div>
                    <div class="mb-4">
                      <label for="uPass" class="form-label">Password</label>
                      <input type="password" class="form-control" id="uPass">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <input class="form-check-input bg-danger border-danger" type="checkbox" value="" id="remember" check="checked">
                          Remember this Device
                        </label>
                      </div>
                      <a class="text-primary fw-bold text-danger" href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-danger text-light w-100 fs-4 mb-4 rounded-2" id="signInButton">Sign In</button>
                    <p><?php $_SESSION?></p>
                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-7 mb-0 fw-bold">New to Cinemarvel Movies?</p>
                      <a class="text-danger fw-bold ms-2 fs-7" href="cinemarvel_register.php" id="signUpButton">Create an account</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
</html>
