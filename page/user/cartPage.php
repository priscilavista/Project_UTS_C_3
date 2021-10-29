<?php
  include '../../component/sidebarUser.php'
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
      </div>
    </nav>
    <div>
        <br><br><br>
    </div>
        <br><br><br>
        <div class="container p-3" style="background-color: #FFF; border-top: 5px solid #17337A; 
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 75%;" >
              <h4 class="text-center">CART</h4> 
              <hr> 
              <table class="table"> 
                  <thead> 
                      <tr> 
                        <th scope="col">No</th> 
                        <th scope="col" >Obat</th>  
                        <th scope="col">Harga</th>  
                        <th scope="col">Jumlah</th>  
                        <th scope="col"></th> 
                        <th scope="col"></th> 
                        <th scope="col"></th> 
                      </tr> 
                  </thead> 
                  <?php
                    include('../../db.php');
                    $batas = 1;
                    $halaman = @$_GET['halaman'];
                      if (empty($halaman)) {
                        $posisi = 0;
                        $halaman = 1;
                      }
                      else {
                        $posisi = ($halaman-1) * $batas;
                      }
                    $no = $posisi+1;
                    $sql = "SELECT * FROM transaction WHERE is_checkout = false ORDER BY id_transaction DESC limit $posisi,$batas";
                    $hasil = mysqli_query($con, $sql);
                    while($data = mysqli_fetch_assoc($hasil)) {
                        //get nama obat
                        $id_obat = $data['id_obat'];
                        $obat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM obat WHERE id_obat=$id_obat"));
                        $nama_obat = $obat['nama_obat'];
                  ?>
                      <tbody> 
                      <tr> 
                        <th scope="row" style="vertical-align: middle"><?php echo $no;?></th> 
                        <td scope="row" style="vertical-align: middle"><?php echo $nama_obat;?></td>
                        <td scope="row" style="vertical-align: middle"><?php echo $data['total'];?></td>
                        <td scope="row" style="vertical-align: middle"><?php echo $data['jumlah'];?></td>
                        <td style="vertical-align: middle"> 
                        <a href="../../process/user/plusOrderProcess.php?id_transaction=<?php echo $data['id_transaction'];?>"><i style="color: green" class="fa fa-plus fa-lg"></i></a>
                        <a href="../../process/user/minusOrderProcess.php?id_transaction=<?php echo $data['id_transaction'];?>"><i style="color: red; margin-left: 20px" class="fa fa-minus fa-lg"></i></a>
                        </td>
                        <td>
                            <form action="../../process/user/cancelOrderProcess.php?id_transaction=<?php echo $data['id_transaction'];?>" method="POST">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    name="cancel"
                                    style="margin-bottom: 55px"
                                >
                                    Cancel
                                </button>
                            </form>
                            </form>
                        </td>
                        <td>
                            <form action="../../process/user/checkoutOrderProcess.php?id_transaction=<?php echo $data['id_transaction'];?>" method="POST">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    name="checkout"
                                    style="margin-bottom: 55px;"
                                >
                                    Checkout
                                </button>
                            </form>
                        </td>
                      </tr>
                      </tbody>
                      <?php
                        $no++;
                    }
                      ?>
                </table>
                <?php
                  $query2 = mysqli_query($con, "SELECT * FROM transaction WHERE is_checkout = false");
                  $jmldata = mysqli_num_rows($query2);
                  $jmlhalaman = ceil($jmldata/$batas);
                ?>

                <div class="text-center">
                  <ul class="pagination">
                    <?php
                      for($i=1; $i<=$jmlhalaman; $i++) {
                        if ($i != $halaman) {
                          echo "<li class='page-item'><a class='page-link' href='cartPage.php?halaman=$i'>$i</a></li>";
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
