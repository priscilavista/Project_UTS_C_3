<?php
    require ('../config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user where email = '$email'";
    $query = mysqli_query($con,$sql);

    if (strcmp($email,"admin@projectutsc3")==0 && strcmp($password,"admin")==0)
    {
        session_start();
        $_SESSION['isLogin'] = true;
        header("location: ../page/admin/dashboardAdminPage.php");
    }
    else if
    (mysqli_num_rows($query) == 0 ){
        echo                 
            '<script>                 
            alert("Email Address not found!"); window.location = "../page/loginPage.php"                 
            </script>';   
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){ -
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
    
                header("location: ../page/user/dashboardPage.php");
            }else {
                echo                     
                    '<script>                     
                    alert("Silahkan verif email terlebih dahulu.");                      
                    window.location = "../page/loginPage.php"                     
                    </script>'; 
            }
        }else {
            echo                     
                    '<script>                     
                    alert("Password Invalid");                      
                    window.location = "../page/loginPage.php"                     
                    </script>'; 
        }
    }
?>