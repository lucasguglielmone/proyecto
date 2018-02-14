<!DOCTYPE HTML5>
<html>
    <head>
        <?php include '../layouts/head.php' ?>
    </head>
    <body>
        <?php include '../layouts/navbar.php' ?>
        <div class="registration-container">
            <h1 class="form-title">Log In</h1>
            <hr>
            <div class="box registration-form">
                <form action="../../controller/login.php" method="post">
                    <div class="x12">
                        <label for="">E-Mail</label>
                        <input type="text" placeholder="E-mail" name="email">
                    </div>
                    <div class="x12">
                        <label class="" for="">Contraseña</label>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" name="submit" class="form-btn">
                </form>
            </div>
        </div>
        
    </body>
</html>