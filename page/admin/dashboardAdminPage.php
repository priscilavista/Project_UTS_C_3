<?php
  include '../../component/sidebarAdmin.php'
?>
    <div id="app" class="for-dashboard">
      <div class="sidebar">
        <div class="header">
          <p class="brand">Admin</p>
        </div>
        <div class="body">
          <a href="./dashboardAdminPage.php"><div class="item active">Dashboard</div></a>
          <a href="./inventoryPage.php"><div class="item">Inventory</div></a>
          <a href=""><div class="item">User Transaction</div></a>
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
                      <th scope="col" >Obat</th> 
                      <th scope="col">Jenis</th> 
                      <th scope="col">Harga</th> 
                      <th scope="col">Stock</th> 
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
                                  </tr>'; 
                              $no++; 
                              } 
                          } 
                      ?> 
                  </tbody>
              </table> 
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
