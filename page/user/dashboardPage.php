<?php
  include '../../component/sidebarUser.php'
?>
<?php 
  $query = mysqli_query($con, "SELECT * FROM obat ORDER BY id_obat DESC") or die(mysqli_error($con)); 
?> 

    <div id="app" class="for-dashboard">
      <div class="sidebar">
        <div class="header d-flex justify-content-center">
          <p class="brand" style="position: fixed;">All Cure</p>
        </div>
        <div class="body" style="position: fixed; width: 250px; margin-top: 7.5%">
          <a href="./dashboardPage.php"><div class="item active">Dashboard</div></a>
          <a href="./profilePage.php" ><div class="item">Profile</div></a>
          <a href="./cartPage.php"><div class="item">Cart</div></a>
          <a href="./historyPage.php"><div class="item">History Order</div></a>
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
        </div>
        <div class="container mt-5" style="margin-left: 7.5%"> 
          <div class="row">
            <?php
                while($data = mysqli_fetch_assoc($query)) {
                  if (strcmp($data['jenis'],"Sirup")==0) 
                  {
                    echo '
                    <div class="card" style="width: 20rem; padding:1rem">
                      <img src="../../image/sirup.jpg" class="card-img-top" alt="..." style="height: 240px; width: 100%;">
                      <div class="card-body">
                        <h5 class="card-title">'.$data['nama_obat'].'</h5>
                        <p class="card-text">Rp '.$data['harga'].'</p>
                        '.($data['stock']>0 ? 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary">Add to Cart</a>' : 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary disabled" aria-disabled="true">Add to Cart</a>'
                        ).'
                      </div>
                    </div>';
                  } 
                  else if (strcmp($data['jenis'],"Tablet")==0) 
                  {
                    echo '
                    <div class="card" style="width: 20rem; padding:1rem">
                      <img src="../../image/tablet.jpg" class="card-img-top" alt="..." style="height: 240px; width: 100%;">
                      <div class="card-body">
                        <h5 class="card-title">'.$data['nama_obat'].'</h5>
                        <p class="card-text">Rp '.$data['harga'].'</p>
                        '.($data['stock']>0 ? 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary">Add to Cart</a>' : 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary disabled" aria-disabled="true">Add to Cart</a>'
                        ).'
                      </div>
                    </div>';
                  } 
                  else
                  {
                    echo '
                    <div class="card" style="width: 20rem; padding:1rem">
                      <img src="../../image/pil.jpg" class="card-img-top" alt="..." style="height: 240px; width: 100%;">
                      <div class="card-body">
                        <h5 class="card-title">'.$data['nama_obat'].'</h5>
                        <p class="card-text">Rp '.$data['harga'].'</p>
                        '.($data['stock']>0 ? 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary">Add to Cart</a>' : 
                          '<a href="../../process/user/addToCartProcess.php?id_obat='.$data['id_obat'].'" class="btn btn-primary disabled" aria-disabled="true">Add to Cart</a>'
                        ).'
                      </div>
                    </div>';
                  }
                }
            ?>
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
