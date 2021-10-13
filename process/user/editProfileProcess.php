<?php
    $fullname = $_POST['fullname'];                 
    $email = $_POST['email'];         
    $phone = $_POST['phone'];
    $id_user = $_GET['id_user'];

    include('../../db.php'); 

    $sql = "SELECT * FROM user where id_user='$id_user'";
    $query = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($query);

    if (strcmp($data['email'],$email)!=0 && mysqli_num_rows($query) > 0)
    {
        echo                     
            '<script>                     
            alert("Email sudah terdaftar");                      
            window.location = "../../page/user/editProfilePage.php"                     
            </script>'; 
    } 
    else 
    {
        $sql = "UPDATE user SET fullname = '$fullname', phone = '$phone', email = '$email'
            WHERE id_user=$id_user";
        $query = mysqli_query($con,$sql);

        if (strcmp($data['email'],$email)!=0 && $query)
        {
            echo                     
                '<script>                     
                alert("Silahkan verif email anda terlebih dahulu");                      
                window.location = "../../process/logoutProcess.php"                     
                </script>'; 
        }
        else if (strcmp($data['email'],$email)==0 && $query)
        {
            echo                     
                '<script>                     
                alert("Profile berhasil diupdate");                      
                window.location = "../../page/user/profilePage.php"                     
                </script>'; 
        }
        else
        {
            echo                 
                '<script>                 
                alert("Update Data Failed"); window.location = "../../page/user/profilePage.php"             
                </script>'; 
        }
    }
?>