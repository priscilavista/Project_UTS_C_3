<?php
    $nama_obat = $_POST['nama_obat'];                 
    $jenis = $_POST['jenis'];         
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $id_obat = $_GET['id_obat'];

    include('../../db.php'); 

    $sql = "UPDATE obat SET nama_obat = '$nama_obat', jenis = '$jenis', harga = '$harga', stock = '$stock'
            WHERE id_obat=$id_obat";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));;

    if ($query)
    {
        echo                     
            '<script>                     
            alert("Update Data Success");                      
            window.location = "../../page/admin/inventoryPage.php"                     
            </script>'; 
    }
    else
    {
        echo                 
            '<script>                 
            alert("Update Data Failed"); window.location = "../../page/admin/inventoryPage.php"               
            </script>'; 
    }
?>