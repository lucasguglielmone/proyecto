<?php
    session_start();
    /*
    >*/
?>
<!DOCTYPE HTML5>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/head.php";?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/layouts/navbar.php' ?>

        

        <div id="pos">
            <form action="/proyecto/controller/upload.php" method="POST" enctype="multipart/form-data">
                <div class="x12">
                    <input type="text" placeholder="Titulo" name="titulo">
                </div>
                <div class="x12 y20">
                    <textarea rows="6" cols="81" placeholder="Descripcion" name="desc"></textarea>
                </div>
                <div>
                    <input type="file" name="file" class="">
                </div>
                <input type="submit" name="submit" value="Subir" class="login-btn pull-right">
            </form>
        </div>


    </body>
</html>

