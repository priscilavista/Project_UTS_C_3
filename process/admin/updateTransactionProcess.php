<?php
    include('../../db.php'); 
    $id_transaction = $_GET['id_transaction'];
    $status = $_POST['status'];

    $sql = "UPDATE transaction SET status = '$status'
            WHERE id_transaction=$id_transaction";
    $query = mysqli_query($con,$sql);

    if ($query)
    {
        echo                     
            '<script>                     
            alert("Update Status Transaction Success");                      
            window.location = "../../page/admin/transactionUserPage.php"                     
            </script>'; 
    }
    else
    {
        echo                 
            '<script>                 
            alert("Update Status Transaction Failed"); window.location = "../../page/admin/transactionUserPage.php"             
            </script>'; 
    }
?>