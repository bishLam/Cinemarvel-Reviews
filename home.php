<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cinemarvel Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- this is for the star rating from core ui -->
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.5.0/dist/css/coreui.min.css" rel="stylesheet"
    integrity="sha384-r/2d1aBwRhQSqjQh/21GvBPd8Oq6JOk0rWn05ngWyhiPOL79wFjw7vcbn3HwYGC/" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.5.0/dist/js/coreui.bundle.min.js"
    integrity="sha384-fB1r9DlcQtqFJcV4iBZiGPf1lH3BrXFpqFFYC0QTRc29fB9HQhpuEhjQwM9j96yG" crossorigin="anonymous">
  </script>


</head>
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
              <img class="rounded-circle ms-3" src="pictures/logo.jpg" width="45" height="45" alt="profile icon">
              </img>
            </a>
          </div>

        </div>
      </div>
    </nav>
  </header>


  <!-- Carousel for the hits marvel movie or series  -->
  <div id="carouselMain" class="carousel slide carousel-fade mt-1" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <div class="overlay-image image-fluid rounded-2" style="background-image: url(pictures/captain-america.jpg)">
        </div>
        <div class="description-container">
          <h1>Captain America</h1>
          <p>Ratings and Description here</p>
          <div class="d-flex align-items-center">
            <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
            <p class="mt-3 ps-2">323k Reviews</p>
          </div>
          <button class="btn btn-primary mt-1">Watch Trailer</button>
        </div>
      </div>
      <div class="carousel-item data-bs-interval=" 1000"">
        <div class="overlay-image image-fluid rounded-2"
          style="background-image: url(pictures/doctor-strange-movie.jpg)"></div>
        <div class="description-container">
          <h1>Doctor Strange</h1>
          <p>Ratings and Description here</p>
          <div class="d-flex align-items-center">
            <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
            <p class="mt-3 ps-2">323k Reviews</p>
          </div>
          <button class="btn btn-primary mt-1">Watch Trailer</button>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image rounded-2" style="background-image: url(pictures/avengers-movie.jpg)"></div>
        <div class="description-container">
          <h1>Avengers</h1>
          <p>Ratings and Description here</p>
          <div class="d-flex align-items-center">
            <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
            <p class="mt-3 ps-2">323k Reviews</p>
          </div>
          <button class="btn btn-primary">Watch Trailer</button>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image rounded-2" style="background-image: url(pictures/captain-marvel-movie.jpg)"></div>
        <div class="description-container">
          <h1>Captain Marvel</h1>
          <p>Ratings and Description here</p>
          <div class="d-flex align-items-center">
            <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
            <p class="mt-3 ps-2">323k Reviews</p>
          </div>
          <button class="btn btn-primary">Watch Trailer</button>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" data-bs-target="#carouselMain" role="button" data-bs-slide="prev">
      <span class="carousel-control-previous-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carouselMain" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </button>

    <style>
    body {
      background-color: black;
    }

    .overlay-image {
      height: 50rem;
      width: 100%;
      position: relative;
      background-position: center;
      background-size: cover;
      /* background-image: url(./pictures/doctor-strange-movie.jpg); */
    }

    .description-container {
      color: white;
      position: absolute;
      right: 6rem;
      bottom: 6rem;

    }
    </style>
  </div>

  <!-- welcome and second section -->
  <div class="container-fluid bg-danger border-1 rounded-4 mt-3 p-5">
    <h1 class="">Welcome to Cinemarvel Movies </h1>
    <div class="card pt-5 bg-danger border-0">
      <div class="row justify-content-between">
        <div class="left-section col-md-6">
          <div class="card-body ">
            <h3 class="card-title">
              Card title here
            </h3>
            <p class="card-text">
              Join the ultimate marvel fan community, rate movies and discuss your favourite movies and shows
            </p>
            <button class="btn btn-primary">View all</button>
          </div>
        </div>
        <div class="right-section col-md-6">
          <img class="img-thumbnail img-fluid rounded" src="pictures/captain-america.jpg" alt="captain america movie">
        </div>
      </div>
    </div>
    <!-- second card -->
    <div class="card pt-5 bg-danger border-0">
      <div class="row justify-content-center mt-2">
        <div class="right-section col-md-6">
          <img class="img-fluid img-thumbnail rounded" src="pictures/captain-america.jpg" alt="captain america movie">
        </div>

        <div class="left-section col-md-6">
          <div class="card-body">
            <h3 class="card-title">
              Card title here
            </h3>
            <p class="card-text">
              Find details info and ratings on every marvel release - sorted by fans for fans
            </p>
            <button class="btn btn-primary">View all</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card pt-5 bg-danger border-0 ">
      <div class="row justify-content-between ">
        <div class="left-section col-md-6">
          <div class="card-body ">
            <h3 class="card-title">
              Card title here
            </h3>
            <p class="card-text">
              Join the ultimate marvel fan community, rate movies and discuss your favourite movies and shows
            </p>
            <button class="btn btn-primary">View all</button>
          </div>
        </div>
        <div class="right-section col-md-6">
          <img class="img-thumbnail img-fluid rounded" src="pictures/captain-america.jpg" alt="captain america movie">
        </div>
      </div>
    </div>
  </div>

  <!-- New releases card section -->
  <div class="new-releases-container container-fluid mt-4">
    <h1 class="text-white">New Releases</h1>
    <!-- vertical cards on horizontal scroll -->
    <!-- <div class="card" style="width: 18rem;">
      <img src="/pictures/captain-marvel-movie.jpg" class="card-img-top" alt="captain marvel movie">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        
      </div>
    </div> -->
    <div class="card-deck d-flex justify-content-start overflow-x-auto" style="white-space: flex-nowrap;">
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body ">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card  m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card  m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>

      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action. This is a wider
            card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action. This is a wider
            card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>

    <style>
    .scrollable-card {
      flex: 0 0 auto;
      /* Prevents the card from shrinking */
      width: 30%;
      /* Ensures 3 cards fit in the view */
    }

    /* Make sure it's scrollable on smaller screens */
    @media (max-width: 768px) {
      .scrollable-card {
        width: 50%;
        /* 2 cards visible on medium and small screens */
      }
    }

    @media (max-width: 576px) {
      .scrollable-card {
        width: 100%;
        /* Full width for single card view on extra small screens */
      }
    }
    </style>
  </div>


  <hr color="red" size="10">

  <!-- Upcoming Section -->
  <div class="Upcoming-container container-fluid mt-4">
    <h1 class="text-white">Upcoming</h1>
    <div class="upcoming-card-deck card-deck d-flex justify-content-start overflow-x-auto"
      style="white-space: flex-nowrap;">
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body ">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>
      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>
      <div class="card  m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>
      <div class="card  m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>

      <div class="card m-3 scrollable-card" style="min-width:18rem;">
        <img src="pictures/captain-marvel-movie.jpg" class="card-img-top" alt="movie">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action. This is a wider
            card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action. This is a wider
            card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
          <div data-coreui-read-only="true" data-coreui-toggle="rating" data-coreui-value="3"></div>
        </div>
      </div>
    </div>
  </div>


  <hr color="red" size="10">
  <!-- Browse Franchises -->
  <div class="container-fluid rounded-4 bg-danger mt-5 ">
    <h1 class="text-white">Browse Franchises</h1>
    <div class="container-fluid d-flex justify-content-between overflow-x-auto  mt-4">
      <div class=" card franchise-card">
        <img class=" card card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="text-center card-title">Captain America</h1>
        </div>
      </div>

      <div class="card franchise-card">
        <img class="card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="text-center card-title">X-Men</h1>
        </div>
      </div>

      <div class="card franchise-card">
        <img class="card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="card-title text-center">Avengers</h1>
        </div>
      </div>

      <div class="card franchise-card">
        <img class="card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="card-title text-center">SpiderMan</h1>
        </div>
      </div>

      <div class="card franchise-card">
        <img class="card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="card-title text-center">Thor</h1>
        </div>
      </div>

      <div class="card franchise-card">
        <img class="card-img-top" src="pictures/captain-america-franchise.jpg" alt="captain america franchise">
        <div class="card-body">
          <h1 class="card-title text-center">Black Panther</h1>
        </div>
      </div>
    </div>
    <style>
    .franchise-card {
      flex: 0 0 auto;
      width: 21%;
      margin: 1rem;

    }
    </style>

  </div>

  <!-- Browse Genres -->
  <div class="container-fluid mt-5 ">
    <h1 class="text-white">Browse Genres</h1>
    <div class="container-fluid d-flex bg-danger justify-content-between overflow-x-auto rounded-4 mt-4">
      <div class="card card-body genre-card">
        <h1 class="text-center card-title">Sci-Fi</h1>
      </div>

      <div class="card card-body genre-card">
        <h1 class="text-center card-title">Sci-Fi</h1>
      </div>

      <div class="card card-body genre-card">
        <h1 class="text-center card-title">Sci-Fi</h1>
      </div>

      <div class="card card-body genre-card">
        <h1 class="text-center card-title">Sci-Fi</h1>
      </div>

      <div class="card card-body genre-card">
        <h1 class="text-center card-title">Sci-Fi</h1>
      </div>

      <style>
      .genre-card {
        margin: 3px;
        min-width: 300px;
        min-height: 300px
      }
      </style>



    </div>
  </div>


  <!-- Footer section -->
   <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">

<footer class="text-center text-lg-start bg-dark" >
  <div class="container d-flex justify-content-center py-5">
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-facebook-f"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-youtube"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-instagram"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-twitter"></i>
    </button>
  </div>

  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="#">CinemarvelReviews.com</a><br>
    <a class="text-white" href="#">By Bishonath Lamichhane and Syeda Minaal Fatima</a>
  </div>
  <!-- Copyright -->
</footer>

</div>
<!-- End of .container -->

















  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.bundle.min.js"
    integrity="sha384-yoEOGIfJg9mO8eOS9dgSYBXwb2hCCE+AMiJYavhAofzm8AoyVE241kjON695K1v5" crossorigin="anonymous">
  </script>
  </body>

</html>