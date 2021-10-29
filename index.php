<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <title>Home</title>
  </head>
  <body>
    <!-- navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
          <li class="nav-item active">
            <a class="nav-link active" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./page/loginPage.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./page/registerPage.php">Register</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- caraousel  -->
    <div
      id="carouselExampleCaptions"
      class="sliders carousel slide"
      data-bs-ride="carousel"
      style="z-index: 1"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./image/image1.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Welcome to All Cure</h5>
            <!-- <p>Some representative placeholder content for the first slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="./image/image2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Welcome to All Cure</h5>
            <!-- <p>Some representative placeholder content for the second slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./image/image3.jpg"
            class="d-block w-100"
            alt="..."
            style="height: 855px"
          />
          <div class="carousel-caption">
            <h5>Welcome to All Cure</h5>
            <!-- <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
