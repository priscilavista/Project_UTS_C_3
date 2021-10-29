<?php
  include '../../component/sidebarAdmin.php'
?>
    <div id="app" class="for-dashboard">
      <div class="sidebar">
        <div class="header">
          <p class="brand">Admin</p>
        </div>
        <div class="body" style="position: fixed; width: 250px;">
          <a href="./dashboardAdminPage.php"><div class="item active">Dashboard</div></a>
          <a href="./inventoryPage.php"><div class="item">Inventory</div></a>
          <a href="./transactionUserPage.php"><div class="item">Ongoing Transaction</div></a>
          <a href="./historyTransactionPage.php"><div class="item">History Transaction</div></a>
          <a href="../../process/logoutProcess.php"><div class="item logout">LOG OUT <i class="fa fa-sign-out"></i></div></a>
        </div>
      </div>
      <div class="content">
        <div class="header">
          <div class="hamburger" onclick="toogleSidebar()">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <!-- <div class="logout">SIGN OUT <i class="fa fa-sign-out"></i></div> -->
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
                      <th scope="col">Obat</th> 
                      <th scope="col">Jenis</th> 
                      <th scope="col">Harga</th> 
                      <th scope="col">Stock</th> 
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
                          echo "<li class='page-item'><a class='page-link' href='dashboardAdminPage.php?halaman=$i'>$i</a></li>";
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
