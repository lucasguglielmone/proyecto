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

        <div class="account-container" id="acc">
            <div>
                <h1>¡Hola <?php echo $_SESSION['u_nombre'] ?>!</h1>
                <hr>
                <a href="/proyecto/vistas/user/editar.php" class="btn btn-edit">Editar Cuenta</a>
            </div>
            <hr>
            <a class="btn btn-edit" href="/proyecto/vistas/posts/misposts.php">Ver mis posts</a>
            <hr>
            <button type="button" id="newp" class="btn btn-edit" onclick="toggleDisplay()">Nuevo Post!</button>
        </div>

        <div id="pos" style="display:none;">
            <button type="button" id="uplo" class="btn" onclick="toggleDisplayBack()"><</button>
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
<script>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/public/js/display.php' ?>

</script>
