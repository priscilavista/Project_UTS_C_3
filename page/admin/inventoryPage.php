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
        <br><br><br>
    </div>
        <br><br><br>
        <div class="container p-3" style="background-color: #FFF; border-top: 5px solid #17337A; 
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 75%;" >
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
                  <?php
                    include('../../db.php');
                    $batas = 5;
                    $halaman = @$_GET['halaman'];
                      if (empty($halaman)) {
                        $posisi = 0;
                        $halaman = 1;
                      }
                      else {
                        $posisi = ($halaman-1) * $batas;
                      }
                    $no = $posisi+1;
                    $sql = "SELECT * FROM obat ORDER BY id_obat DESC limit $posisi,$batas";
                    $hasil = mysqli_query($con, $sql);
                    while($data = mysqli_fetch_assoc($hasil)) {
                  ?>
                      <tbody> 
                      <tr> 
                          <th scope="row"><?php echo $no;?></th> 
                          <td scope="row"><?php echo $data['nama_obat'];?></td>
                          <td scope="row"><?php echo $data['jenis'];?></td>
                          <td scope="row"><?php echo $data['harga'];?></td>
                          <td scope="row"><?php echo $data['stock'];?></td>
                          <td>
                            <a href="./updateItemPage.php?id_obat=<?php echo $data['id_obat'];?>"><i style="color: green" class="fa fa-edit"></i></a> 
                            <a href="../../process/admin/deleteItemProcess.php?id_obat=<?php echo $data['id_obat'];?>"  
                                onClick="return confirm ( \'Yakin untuk menghapus <?php echo $data['id_obat'];?>?\')"> 
                                <i style="color: red" class="fa fa-trash"></i> 
                            </a> 
                </td>
                      </tr>
                      </tbody>
                      <?php
                        $no++;
                    }
                      ?>
                </table>
                <?php
                  $query2 = mysqli_query($con, "SELECT * FROM obat");
                  $jmldata = mysqli_num_rows($query2);
                  $jmlhalaman = ceil($jmldata/$batas);
                ?>

                <div class="text-center">
                  <ul class="pagination">
                    <?php
                      for($i=1; $i<=$jmlhalaman; $i++) {
                        if ($i != $halaman) {
                          echo "<li class='page-item'><a class='page-link' href='inventoryPage.php?halaman=$i'>$i</a></li>";
                        }
                        else {
                          echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </div>
          </div>
           
    </div>

    <script src="../../script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
