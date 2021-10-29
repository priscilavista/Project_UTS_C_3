<?php
    include('../../db.php'); 
    $id_transaksi = $_GET['id_transaction'];
    $is_checkout = true;
    $status = "Dibayar";

    $sql = "UPDATE transaction SET is_checkout = '$is_checkout', status = '$status'
            WHERE id_transaction=$id_transaksi";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));

    if ($query)
    {
        echo                     
            '<script>                     
            alert("Checkout Success");                      
            window.location = "../../page/user/historyPage.php"                     
            </script>'; 
    }
    else
    {
        echo                 
            '<script>                 
            alert("Checkout Failed"); window.location = "../../page/user/cartPage.php"             
            </script>'; 
    }
?>