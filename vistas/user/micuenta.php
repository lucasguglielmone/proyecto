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
                <span>Editar Cuenta</span>
            </div>
            <hr>
            <span>Ver mi post</span>
            <hr>
            <button type="button" id="newp" class="btn" onclick="toggleDisplay()">Nuevo Post!</button>
        </div>

        <div id="pos" style="display:none;">
            <button type="button" id="uplo" class="btn" onclick="toggleDisplayBack()"><</button>
            <form action="/proyecto/controller/upload.php" method="POST" enctype="multipart/form-data">
                <div class="x12">
                    <input type="text" placeholder="Titulo" name="titulo">
                </div>
                <div class="x12 y20">
                    <input type="text" placeholder="Descripcion" name="descripcion">
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
    function toggleDisplay(){
        document.getElementById('acc').style.display = 'none';
        document.getElementById('pos').style.display = 'block';
    }
    function toggleDisplayBack(){
        document.getElementById('pos').style.display = 'none';
        document.getElementById('acc').style.display = 'block';
    }

</script>
