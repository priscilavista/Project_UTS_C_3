<?php     
    if(isset($_GET['id_obat'])){         
        include ('../../db.php');         
        $id_obat = $_GET['id_obat'];         
        $queryDelete = mysqli_query($con, "DELETE FROM obat WHERE id_obat='$id_obat'") or die(mysqli_error($con));         
        if($queryDelete){             
            echo             
                '<script>             
                alert("Delete Success"); window.location = "../../page/admin/inventoryPage.php"             
                </script>';         
        }else{         
            echo             
                '<script>             
                alert("Delete Failed"); window.location = "../../page/admin/inventoryPage.php"             
                </script>';         
            }     
    }else {         
        echo         
            '<script>         
            window.history.back()         
            </script>';     
    } 
?>