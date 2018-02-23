<?php
    session_start();
    include_once 'dbConect.php';
    $id = $_GET['id'];
    $img = mysqli_query($conn, "SELECT * FROM imgs WHERE id = '$id';");

    

?>

<!DOCTYPE HTML5>
<html>
    <head>
        <?php include_once  $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/layouts/head.php' ?>
    </head>
    <body>
        <?php include_once  $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/layouts/navbar.php' ?>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/posts/view.php'; ?>
    </body>
</html>
