<?php
  include '../../component/sidebarAdmin.php'
?>

<?php
    include('../../db.php'); 
    $id_transaction = $_GET['id_transaction']; 
    $query = mysqli_query($con, "SELECT * FROM transaction WHERE id_transaction = '$id_transaction'") or die(mysqli_error($con)); 
    if(mysqli_num_rows($query) == 0) {
        echo
        '<script>                 
        alert("Data not found!"); window.location = "./transactionUserPage.php"                 
        </script>'; 
    } else {
        $data = mysqli_fetch_assoc($query);
        //get nama obat
        $id_obat = $data['id_obat'];
        $obat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM obat WHERE id_obat=$id_obat"));
        $nama_obat = $obat['nama_obat'];
        //get nama user
        $id_user = $data['id_user'];
        $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id_user=$id_user"));
        $nama_user = $user['fullname'];
    }
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
            <a href="./transactionUserPage.php"><i class="fa fa-caret-left fa-2x mt-3"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="global-container">
      <div class="card profile-form" style="height: 600px">
        <div class="card-body">
          <h1 class="card-title text-center fs-4">Update Status Transaction</h1>
          <div class="card-text">
            <form action="../../process/admin/updateTransactionProcess.php?id_transaction=<?php echo $data['id_transaction']?>" method="POST" style="margin-top: 40px">
              <div class="form-group">
                <label for="nama_user">Nama User</label>
                <input
                  type="text"
                  name="nama_user"
                  id="nama_user"
                  class="form-control form-control-sm mt-2"
                  value="<?= $nama_user?>"
                  disabled
                />
              </div>

              <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input
                  type="text"
                  name="nama_obat"
                  id="nama_obat"
                  class="form-control form-control-sm mt-2"
                  value="<?= $nama_obat?>"
                  disabled
                />
              </div>

              <div class="form-group">
                <label for="total">Total</label>
                <input
                  type="text"
                  name="total"
                  id="total"
                  class="form-control form-control-sm mt-2"
                  value="<?= $data['total']?>"
                  disabled
                />
              </div>

              <div class="form-group">
                <label for="status" style="margin-bottom: 5px">Status</label>
                <select class="form-select" 
                    aria-label="Default select example" name="status" id="status"
                    style="border: 2px solid #5913ca; border-radius: 10px; margin-bottom: 25px;">  
                    <option selected 
                        value="<?= $data['status']?>"
                    >  
                        <?= $data['status']?>
                    </option>      
                    <?php
                        $option = array("Dibayar","Dikemas", "Dikirim", "Diterima");
                        foreach ($option as $status) 
                        {
                            if($status != $data['status'])
                            echo"
                                <option value='$status'>$status</option>
                            ";
                        }
                    ?>                              
                </select>  
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
