<?php                        
    include('../../db.php'); 

    $nama_obat = $_POST['nama_obat'];                  
    $jenis = $_POST['jenis'];         
    $harga = $_POST['harga'];         
    $stock = $_POST['stock']; 

    $sql = "SELECT * FROM obat where nama_obat='$nama_obat'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo                     
            '<script>                     
            alert("Obat sudah terdaftar");                      
            window.location = "../../page/admin/createItemPage.php"                     
            </script>'; 
    }
    else
    {
        $query = mysqli_query($con,              
            "INSERT INTO obat(nama_obat, jenis, harga, stock)                  
                VALUES             
            ('$nama_obat', '$jenis', '$harga', '$stock')")                  
                or die(mysqli_error($con)); 
                    
        
        if($query){             
            echo                 
                '<script>                 
                alert("Create Data Success"); window.location = "../../page/admin/inventoryPage.php"                 
                </script>';         
        }else{             
            echo                 
                '<script>                 
                alert("Create Data Failed");                  
                </script>';         
        }    
    }         
?>