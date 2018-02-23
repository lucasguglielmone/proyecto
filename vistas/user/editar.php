<?php
    session_start();
    if(empty($_SESSION)){
        header("Location: /proyecto");
        exit();
    }
?>
<!DOCTYPE HTML5>
    <html>
        <head>
            <?php  include_once $_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/head.php" ?> 
        </head>
        <body>
            <?php include_once $_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/navbar.php" ?>
            <div class="registration-container">
            <h1>Editar Cuenta</h1>
            <hr>
            <div class="box registration-form">
                <form action="/proyecto/controller/edit.php" method="post">
                    <div class="x12 inp">
                        <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $_SESSION['u_nombre'] ?>">
                    </div>
                    <div class="x12 inp">
                        <input type="text" placeholder="Apellido" name="apellido" value="<?php echo $_SESSION['u_apellido'] ?>">
                    </div>
                    <div class="x12 inp">
                        <input type="text" placeholder="E-mail" name="email" value="<?php echo $_SESSION['u_email'] ?>">
                    </div>
                    <div class="x12 inp">
                        <input type="password" placeholder="Contraseña" name="password">
                    </div>
                    <div class="x12 inp">
                        <input type="password" placeholder="Confirmar contraseña" name="password2">
                    </div>
                    <input type="submit" name="submit" class="form-btn">
                </form>
            </div>
        </div>
        </body>
    </html>