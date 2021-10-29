<?php     
    include ('../../db.php');         
    $id_user = $_GET['id_user'];         
    $status = "Non-Aktif";
    $query = mysqli_query($con, "UPDATE user SET verif_code = '$status', is_verified=0 WHERE id_user='$id_user'") or die(mysqli_error($con));         
    if($query){           
        echo             
            '<script>             
            alert("Delete Account Success. Log Out"); window.location = "../../process/logoutProcess.php"             
            </script>';         
    }else{         
        echo             
            '<script>             
            alert("Delete Failed"); window.location = "../../page/user/profilePage.php"             
            </script>';         
    }
?>