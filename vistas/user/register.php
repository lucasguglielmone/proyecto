<!DOCTYPE HTML5>
<?php
    if(empty($_SESSION)){
    echo '<div class="registration-container">
        <h1>Registrate</h1>
        <hr>
        <div class="box registration-form">
            <form action="/proyecto/controller/register.php" method="post">
                <div class="x12 inp">
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="x12 inp">
                    <input type="text" placeholder="Apellido" name="apellido">
                </div>
                <div class="x12 inp">
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="x12 inp">
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
                <div class="x12 inp">
                    <input type="password" placeholder="Confirmar contraseña" name="password2">
                </div>
                <input type="submit" name="submit" class="form-btn" value="Registrarme!">
            </form>
        </div>
    </div>';
    }