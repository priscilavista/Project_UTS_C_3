<?php     
    include ('../../db.php');         
    $id_user = $_GET['id_user'];         
    $queryDelete = mysqli_query($con, "DELETE FROM user WHERE id_user='$id_user'") or die(mysqli_error($con));         
    if($queryDelete){           
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