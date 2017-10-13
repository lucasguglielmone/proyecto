<!DOCTYPE HTML5>
<html>
    <head>
        <?php include '../layouts/head.php' ?>
    </head>
    <body>
        <?php include '../layouts/navbar.php' ?>
        <!--?php include 'vistas/home/home.php' ?-->
        <div class="registration-container">
            <h1>Register</h1>
            <hr>
            <div class="box registration-form">
                <form action="../../controller/registerController.php" method="post">
                <div class="x6">
                    <label class="" for="">Nombre</label>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="x6">
                    <label for="">Apellido</label>
                    <input type="text" placeholder="Apellido">
                </div>
                <div class="x12">
                    <label for="">E-Mail</label>
                    <input type="text" placeholder="E-Mail">
                </div>
                <div class="x6">
                    <label class="" for="">Contrasena</label>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="x6">
                    <label for="">Confirmar Contrasena</label>
                    <input type="text" placeholder="Apellido">
                </div>
                <input type="submit" class="form-btn">
                </form>
            </div>
        </div>
        
    </body>
</html>