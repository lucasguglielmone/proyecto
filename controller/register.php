<?php
    if(isset($_POST['submit'])){

        include_once 'dbConect.php';

        $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($conn, $_POST["apellido"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);
        $created_at = $date = date('Y-m-d H:i:s');

        // Revision de datos
        if(empty($nombre) || empty($apellido) || empty($email) || empty($pass)){
            header("Location: /proyecto?e=campo_vacio");
            exit();
        }
        else {
            // Nombre y Apellido
            if(!preg_match("/^[a-zA-Z]*$/", $nombre)){
                header("Location: /proyecto?e=nombre");
                exit();
            }
            if(!preg_match("/^[a-zA-Z]*$/", $apellido)){
                header("Location: /proyecto?e=apellido");
                exit();
            }
            // Email y Contraseña
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: /proyecto?e=email");
                exit();
            }
            if($_POST['password'] != $_POST['password2']){
                header("Location: /proyecto?e=pass_match");
                exit();
            }
            else{
                $user_sql = "SELECT * FROM usuarios WHERE email='$email'";
                $result = mysqli_query($conn, $user_sql);
                $result_check = mysqli_num_rows($result);
                if($result_check ){ 
                    header("Location: /proyecto?e=user");
                    exit();
                }
            }
            
        }

        $pass_encrypted = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, apellido, pass, email, created_at, updated_at) VALUES ('$nombre', '$apellido', '$pass_encrypted', '$email', '$created_at', '$created_at');";
        $insert = mysqli_query($conn, $sql);

        if ($insert) {
            header("Location: /proyecto?e=reg_success");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        //mysqli_close($conn);
        
    }
    else {
        header("Location: /proyecto");
        exit();
    }

















