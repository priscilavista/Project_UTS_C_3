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
            <a href="./profilePage.php"><i class="fa fa-caret-left fa-2x mt-3"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="global-container">
      <div class="card profile-form">
        <div class="card-body">
          <h1 class="card-title text-center fs-4">Edit Profile</h1>
          <div class="card-text">
            <form action="../../process/user/editProfileProcess.php?id_user=<?php echo $data['id_user']?>" method="POST" style="margin-top: 40px">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['fullname']?>"
                />
              </div>

              <div class="form-group">
                <label for="phone">Phone</label>
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['phone']?>"
                />
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['email']?>"
                />
              </div>

              <div class="d-grid gap-2 p-2 ms-4 me-4">
                <button
                  type="submit"
                  class="btn btn-primary btn-block center-block"
                >
                  Update
                </button>
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
