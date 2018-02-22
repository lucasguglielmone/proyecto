<?php
    session_start();
?>
<!DOCTYPE HTML5>
<html>
    <head>
        <?php include_once 'vistas/layouts/head.php' ?>
    </head>
    <body>
        <?php include_once 'vistas/layouts/navbar.php' ?>
        <!--?php include 'vistas/home/home.php' ?-->
        <div class="row1">
            <?php include_once 'vistas/home/intro.php' ?>
            <?php include_once 'vistas/user/register.php' ?>
        </div>
        <div class="row2">
            <?php include_once 'vistas/home/slider.php' ?>
        </div>
    </body>
</html>
