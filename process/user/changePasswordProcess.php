<?php   
    $cek_password = $_POST['password'];
    $cek_confirm_password = $_POST['confirm_password'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);           
    $confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
    $id_user = $_GET['id_user'];

    include('../../db.php'); 

    if (strcmp($cek_password,$cek_confirm_password)!=0)
    {
        echo                     
            '<script>                     
            alert("Password Invalid");                      
            window.location = "../../page/user/changePasswordPage.php"                     
            </script>'; 
    }
    else
    {
        $sql = "UPDATE user SET password = '$password' WHERE id_user=$id_user";
        $query = mysqli_query($con,$sql);

        if ($query)
        {
            echo                     
                '<script>                     
                alert("Password berhasil diubah, silahkan log in kembali");                      
                window.location = "../../process/logoutProcess.php"                     
                </script>'; 
        }
        else
        {
            echo                 
                '<script>                 
                alert("Change Password Failed"); window.location = "../../page/user/profilePage.php"             
                </script>'; 
        }
    }
?>