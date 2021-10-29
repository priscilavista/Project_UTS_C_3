<?php
    require ('../config.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';
    
    session_start();
    
    $fullname = $_POST['fullname'];        
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);         
    $email = $_POST['email'];         
    $phone = $_POST['phone'];
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM user where email='$email'";
    $query = mysqli_query($con,$sql);
    $user = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) > 0 && strcmp($user['verif_code'],"Non-Aktif")!=0){
        echo                     
            '<script>                     
            alert("Email sudah terdaftar");                      
            window.location = "../page/registerPage.php"                     
            </script>'; 
    }else {
        if(mysqli_num_rows($query) > 0 && strcmp($user['verif_code'],"Non-Aktif")==0)
        {
            $sql = "UPDATE user SET fullname = '$fullname', password = '$password', phone = '$phone', verif_code = '$code' WHERE email = '$email'";
            $query = mysqli_query($con,$sql);
        }
        else{
            $sql = "INSERT INTO user (fullname, password, email, phone, verif_code)VALUES('$fullname', '$password', '$email', '$phone','$code')";
            $query = mysqli_query($con,$sql);
        }

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        // $mail->SMTPDebug=0;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'moonnfest@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'ajppetcqrcgvxubk';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@yourwebsite.com', 'Your website service');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $fullname);

        //Set the subject line
        $mail->Subject = 'Verification Account - All Cure';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$fullname."<br>Please verif your email before access our website : <br> http://localhost:8081/Project_UTS_C_3/process/confirmEmail.php?code=".$code;
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo                     
                '<script>                     
                alert("Register sukses silahkan login");                      
                window.location = "../page/loginPage.php"                     
                </script>'; 
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }

    }





?>