<?php
    require('../config.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM user where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id_user = $user['id_user'];
            $sql =  "UPDATE user set is_verified=1 where id_user=$id_user";
            $query = mysqli_query($con,$sql);
            if($query){
                echo                     
                    '<script>                     
                    alert("Verifikasi Berhasil");                      
                    window.location = "../page/loginPage.php"                     
                    </script>'; 
            }else{
                echo                     
                    '<script>                     
                    alert("Verifikasi Gagal. Error : ".$query);                      
                    window.location = "../page/loginPage.php"                     
                    </script>'; 
            }
        }else {
            echo                     
                '<script>                     
                alert("Code Tidak Valid");                      
                window.location = "../page/loginPage.php"                     
                </script>'; 
        }
    }else {
        echo                     
            '<script>                     
            alert("Code Tidak Ada");                      
            window.location = "../page/loginPage.php"                     
            </script>'; 
    }

?>