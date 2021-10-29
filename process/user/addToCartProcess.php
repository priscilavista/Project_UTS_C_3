<?php
    include('../../db.php'); 
    session_start();
    $user = $_SESSION['user'];
    $id_user = $user['id_user'];
    $id_obat = $_GET['id_obat'];

    $sql = "SELECT * FROM obat where id_obat='$id_obat'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($query);
    $total =$data['harga'];

    $stock = $data['stock'] - 1;
    $sql = "UPDATE obat SET stock = '$stock'
            WHERE id_obat=$id_obat";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));

    $query = mysqli_query($con,              
        "INSERT INTO transaction(id_obat, id_user, total)                  
            VALUES             
        ('$id_obat', '$id_user', '$total')")                  
            or die(mysqli_error($con)); 
                
    
    if($query){             
        echo                 
            '<script>                 
            window.location = "../../page/user/cartPage.php"                 
            </script>';         
    }else{             
        echo                 
            '<script>                 
            alert("Add to Cart Failed");                  
            </script>';         
    }   
?>