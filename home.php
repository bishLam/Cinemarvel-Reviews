<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cinemarvel Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
  <header>

  <!-- navigation bar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
          <img class="d-inline-block align-top d-flex" height="50" width="50" src="pictures/logo.jpg" alt="Logo">
        </a>

        <!-- Navbar toggle for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ">
            <li class="nav-item ">
              <a class="nav-link active pt-5 px-3" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active pt-5 px-3 " href="#">New Releases</a>
            </li>
            <li class="nav-item dropdown px-3">
              <a class="nav-link active dropdown-toggle pt-5" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Browse
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">By Franchise</a></li>
                <li><a class="dropdown-item" href="#">By Genre</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active pt-5 px-3" href="#">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active pt-5 px-3" href="#">FAQ's</a>
            </li>

          </ul>
          <form class="d-flex justify-content-between">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <button type="button" class="btn btn-success "><i class="fa fa-search"></i></button>
            </div>
          </form>
          <div>
            <a href="#">
              <img class="rounded-circle ms-3" src="pictures/logo.jpg" width="45" height="45"
                alt="profile icon">
              </img>
            </a>
          </div>

        </div>
      </div>
    </nav>
  </header>


</body>

</html>