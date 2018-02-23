<?php
    if(isset($_GET['e'])){
        $e = $_GET['e'];
    if (!empty($e)){
        $type = '';
        $msg = '';
        if ($e == "campo_vacio"){
            $msg = 'Debe completar todos los campos';
            $type = 'Error';
        }
        elseif ($e == "nombre"){
            $msg = 'nombre invalido';
            $type = 'Error';
        }
        elseif ($e == "apellido"){
            $msg = 'apellido invalido';
            $type = 'Error';
        }
        elseif ($e == "email"){
            $msg = 'email invalido';
            $type = 'Error';
        }
        elseif ($e == "pass_match"){
            $msg = 'las contraseñas no coinciden';
            $type = 'Error';
        }
        elseif ($e == "user"){
            $msg = 'el usuario ya existe';
            $type = 'Error';
        }
        elseif ($e == "reg_success"){
            $msg = 'Te has registrado';
            $type = 'OK';
        }
        elseif ($e == "noUser" || $e == "pass"){
            $msg = 'Datos invalidos';
            $type = 'Error';
        }
        elseif ($e == "success"){
            $msg = 'estas logeado';
            $type = 'Exito';
        }
        elseif ($e == "edit_success"){
            $msg = 'cuenta editada';
            $type = 'Exito';
        }
        elseif ($e == 'delOk'){
            $msg = 'post borrado';
            $type = 'Exito';
        }
        $div = '
        <div class="'. $type .'">
            <span><strong style="margin-right:3px;">'. $type .'!</strong>'. $msg .'</span>
        </div>';

        echo $div;
    }
}


