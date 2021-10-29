<?php     
    session_start();     
    if (!$_SESSION['isLogin']) {         
        header("location: ../loginPage.php");     
    }else {         
        include('../../db.php');  
        $data = $_SESSION['user'];     
    }     
    echo '         
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../../style.css" />
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
        crossorigin="anonymous"
        />
        <title>All Cure</title>
    </head>

    <body>
    <style>
        body {
            background: #512DA8 !important;
            background: -webkit-repeating-linear-gradient(
                to right,
                #673AB7,
                #512DA8
            ) !important;
            background: linear-gradient(to right, #673AB7, #512DA8) !important;
            }
        </style>
    '
?>