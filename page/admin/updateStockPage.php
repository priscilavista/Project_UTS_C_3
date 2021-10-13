<?php
  include '../../component/sidebarAdmin.php'
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
            <a href="./inventoryPage.php"><i class="fa fa-caret-left fa-2x mt-3"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="global-container">
      <div class="card profile-form" style="height: 500px">
        <div class="card-body">
          <h1 class="card-title text-center fs-4">Add Stock</h1>
          <div class="card-text">
            <form action="../../process/admin/updateStockProcess.php" method="POST" style="margin-top: 40px">
            <div class="form-group">
              <label for="jenis" style="margin-bottom: 5px">Obat</label>
              <select class="form-select" 
                  aria-label="Default select example" name="nama_obat" id="nama_obat"
                  style="border: 2px solid #5913ca; border-radius: 10px; margin-bottom: 25px;">      
                  <?php
                      $query = mysqli_query($con, "SELECT * FROM obat") or die(mysqli_error($con)); 
                      while($data = mysqli_fetch_assoc($query))
                      {
                        $obat = $data['nama_obat'];
                        echo"
                            <option value=$obat>$obat</option>
                        ";
                      }
                  ?>                              
              </select>  
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input
                  type="text"
                  name="stock"
                  id="stock"
                  class="form-control form-control-sm mt-2"
                />
              </div>

              <div class="d-grid gap-2 p-2 ms-4 me-4">
                <button
                  type="submit"
                  class="btn btn-primary btn-block center-block"
                  name="updateStock"
                >
                  Add
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
