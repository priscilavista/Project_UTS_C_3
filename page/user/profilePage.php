<?php
  include '../../component/sidebarUser.php';

  $id_user = $data['id_user'];
  $sql = "SELECT * FROM user where id_user = $id_user";
  $query = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($query);
?>
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
      <div class="collapse navbar-collapse mt-2" id="navbarNav">
        <ul class="navbar-nav nav-item" style="margin-left: 100px">
          <li>
          <a href="./dashboardPage.php"><i class="fa fa-caret-left fa-2x mt-3"></i></a>
          </li>
        </ul>
        <div
          class="navbar-nav ms-auto mb-2 mb-lg-0 nav-item dropdown"
          style="margin-right: 100px"
        >
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./editProfilePage.php">Edit Profile</a></li>
            <li>
              <a class="dropdown-item" href="./changePasswordPage.php">Change Password</a>
            </li>
            <li>
              <a class="dropdown-item" href="../../process/user/deleteUserProcess.php?id_user=<?php echo $data['id_user']?>">Delete Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="global-container">
      <div class="card profile-form">
        <div class="card-body">
          <h1 class="card-title text-center fs-4">Profile</h1>
          <div class="card-text">
            <form action="" style="margin-top: 40px">
              <div class="form-group">
                <label for="profileName">Full Name</label>
                <input
                  type="text"
                  name=""
                  id="profileName"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['fullname']?>"
                  disabled
                />
              </div>

              <div class="form-group">
                <label for="profilePhone">Phone</label>
                <input
                  type="text"
                  name=""
                  id="profilePhone"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['phone']?>"
                  disabled
                />
              </div>

              <div class="form-group">
                <label for="profileEmail">Email Address</label>
                <input
                  type="email"
                  name=""
                  id="profileEmail"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['email']?>"
                  disabled
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

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