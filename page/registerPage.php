<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../style.css"/>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto"
    />

    <title>Register</title>
  </head>
  <body>
    <style>
      body {
        background: #7f00ff !important;
        background: -webkit-repeating-linear-gradient(
          to right,
          #e100ff,
          #7f00ff
        ) !important;
        background: linear-gradient(to right, #e100ff, #7f00ff) !important;
      }
    </style>
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
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./loginPage.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./registerPage.php">Register</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="global-container">
      <div class="card register-form">
        <div class="card-body">
          <h1 class="card-title text-center fs-4">Create your account</h1>
          <div class="card-text">
            <form action="../process/RegisterProcess.php" method="POST" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  class="form-control form-control-sm mt-2"
                  required
                />
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="form-control form-control-sm mt-2"
                  required
                />
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control form-control-sm mt-2"
                  required
                />
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control form-control-sm mt-2"
                  required
                />
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
              </div>

              <div class="d-grid gap-2">
                <button
                  type="submit"
                  class="btn btn-primary btn-block center-block"
                  name="register"
                >
                  Register
                </button>
              </div>

              <div class="signup">
                Already have an account? <a href="./loginPage.php">Log In</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
