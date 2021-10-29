<?php
    include ('../../db.php');         
    $id_transaction = $_GET['id_transaction'];   

    $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM transaction WHERE id_transaction=$id_transaction"));
    $id_obat = $data['id_obat'];
    $jumlah = $data['jumlah'];
    $obat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM obat WHERE id_obat=$id_obat"));    
    
    $stock = $obat['stock'] + $jumlah;
    $sql = "UPDATE obat SET stock = '$stock'
            WHERE id_obat=$id_obat";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    $queryDelete = mysqli_query($con, "DELETE FROM transaction WHERE id_transaction=$id_transaction") or die(mysqli_error($con));         
    if($queryDelete){           
        echo             
            '<script>             
            alert("Cancel Transaction Success"); window.location = "../../page/user/cartPage.php"             
            </script>';         
    }else{         
        echo             
            '<script>             
            alert("Cancel Transaction Failed"); window.location = "../../page/user/cartPage.php"             
            </script>';         
    }
?>