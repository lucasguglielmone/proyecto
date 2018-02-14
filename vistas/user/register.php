<!DOCTYPE HTML5>
<?php
    if(empty($_SESSION)){
    echo '<div class="registration-container">
        <h1>Register</h1>
        <hr>
        <div class="box registration-form">
            <form action="/proyecto/controller/register.php" method="post">
                <div class="x12">
                    <label class="" for="">Nombre</label>
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="x12">
                    <label for="">Apellido</label>
                    <input type="text" placeholder="Apellido" name="apellido">
                </div>
                <div class="x12">
                    <label for="">E-Mail</label>
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="x12">
                    <label class="" for="">Contraseña</label>
                    <input type="password" name="password">
                </div>
                <div class="x12">
                    <label for="">Confirmar Contraseña</label>
                    <input type="password" name="password2">
                </div>
                <input type="submit" name="submit" class="form-btn">
            </form>
        </div>
    </div>';
    }