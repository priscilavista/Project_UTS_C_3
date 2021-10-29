<?php
    include('../../db.php'); 
    $id_transaction = $_GET['id_transaction'];
    
    $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM transaction WHERE id_transaction=$id_transaction"));
    $id_obat = $data['id_obat'];
    $jumlah = $data['jumlah'];

    $obat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM obat WHERE id_obat=$id_obat"));
    $harga = $obat['harga'];

    $jumlah = $jumlah-1;
    $total = $jumlah*$harga;

    if ($jumlah==0) {
        echo                     
            '<script>                                      
            window.location = "./cancelOrderProcess.php?id_transaction='.$id_transaction.'"                     
            </script>'; 
    }

    $stock = $obat['stock'] + 1;
    $sql = "UPDATE obat SET stock = '$stock'
            WHERE id_obat=$id_obat";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));

    $sql = "UPDATE transaction SET jumlah = '$jumlah', total = '$total'
            WHERE id_transaction=$id_transaction";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));

    if ($query)
    {
        echo                     
            '<script>                                      
            window.location = "../../page/user/cartPage.php"                     
            </script>'; 
    }
    else
    {
        echo                 
            '<script>              
            window.location = "../../page/user/cartPage.php"             
            </script>'; 
    }
?>