<?php
    if(isset($_POST['updateStock']))
    {
        $stock = $_POST['stock'];
        $nama_obat = $_POST['nama_obat'];

        include('../../db.php'); 

        $sql = "SELECT * FROM obat where nama_obat='$nama_obat'";
        $query = mysqli_query($con,$sql);
        $data = mysqli_fetch_assoc($query);
        $stock = $stock + $data['stock'];
        $id_obat = $data['id_obat'];

        $sql = "UPDATE obat SET stock = '$stock'
                WHERE id_obat=$id_obat";
        $query = mysqli_query($con,$sql);

        if ($query)
        {
            echo                     
                '<script>                     
                alert("Update Stock Success");                      
                window.location = "../../page/admin/inventoryPage.php"                     
                </script>'; 
        }
        else
        {
            echo                 
                '<script>                 
                alert("Update Stock Failed"); window.location = "../../page/admin/inventoryPage.php"               
                </script>'; 
        }

    }
?>