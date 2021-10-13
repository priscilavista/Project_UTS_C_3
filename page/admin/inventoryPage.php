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
          <a href="./dashboardAdminPage.php"><i class="fa fa-caret-left fa-2x mt-3"></i></a>
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
            Inventory
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./createItemPage.php">Create Item</a></li>
            <li>
              <a class="dropdown-item" href="./updateStockPage.php">Add Stock</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
        <!-- <button class="btn-inventory btn" onclick="location.href='updateStockPage.php'">Add Stock</button>
        <button class="btn-inventory btn" onclick="location.href='createItemPage.php'">Create a New Item</button> -->
        <br><br><br><br><br>
    </div>
    <div class="container p-3" style="background-color: #FFF; border-top: 5px solid #17337A; 
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 65%; ">
        <h4 class="text-center">DATA OBAT</h4> 
            <hr> 
            <table class="table"> 
                <thead> 
                    <tr> 
                    <th scope="col">No</th> 
                    <th scope="col" >Obat</th> 
                    <th scope="col">Jenis</th> 
                    <th scope="col">Harga</th> 
                    <th scope="col">Stock</th> 
                    <th scope="col"></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php 
                        $query = mysqli_query($con, "SELECT * FROM obat") or die(mysqli_error($con)); 
                        
                        if (mysqli_num_rows($query) == 0) { 
                            echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>'; 
                        }else{ 
                            $no = 1; 
                            while($data = mysqli_fetch_assoc($query)){ 
                            echo' 
                                <tr> 
                                    <th scope="row">'.$no.'</th> 
                                    <td>'.$data['nama_obat'].'</td> 
                                    <td>'.$data['jenis'].'</td> 
                                    <td>'.$data['harga'].'</td> 
                                    <td>'.$data['stock'].'</td>
                                    <td> 
                                        <a href="./updateItemPage.php?id_obat='.$data['id_obat'].'"><i style="color: green" class="fa fa-edit"></i></a> 
                                        <a href="../../process/admin/deleteItemProcess.php?id_obat='.$data['id_obat'].'"  
                                            onClick="return confirm ( \'Yakin untuk menghapus '.$data['nama_obat'].'?\')"> 
                                            <i style="color: red" class="fa fa-trash"></i> 
                                        </a> 
                                    </td> 
                                </tr>'; 
                            $no++; 
                            } 
                        } 
                    ?> 
                </tbody>
            </table> 
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