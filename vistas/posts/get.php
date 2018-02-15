<?php
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/controller/dbConect.php';
    $imgs = mysqli_query($conn, "SELECT * FROM imgs ;");
    
?>
<!DOCTYPE HTML5>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/head.php";?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/layouts/navbar.php' ?>

        <div class="post-container">
            <?php
                //var_dump($imgs);
                while($img = mysqli_fetch_assoc($imgs)){
                    echo '<div class="post">
                    <div class="x12">
                        <h1>'. $img["nombre"] .' </h1>
                    </div>
                    <div class="img-container">
                        <img src="'. "/proyecto/public/uploads/".$img["ruta"] .'" alt="">
                    </div>
                    <div>
                        <span>
                            '. $img["descr"] .'
                        </span>
                    </div>
                </div>';
                }
            ?>
            
        </div>
    </body>
</html>