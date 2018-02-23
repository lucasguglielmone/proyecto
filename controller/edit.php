<?php
    if(isset($_POST['submit'])){

        include_once 'dbConect.php';
        session_start();

        $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
        $apellido = mysqli_real_escape_string($conn, $_POST["apellido"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);
        $updated_at  = date('Y-m-d H:i:s');
        $uid = $_SESSION['u_id'];

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
            if($_POST['password'] != $_POST['password2'] || sizeof($_POST['password']) > 12){
                header("Location: /proyecto?e=pass_match");
                exit();
            }

            $user_sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = mysqli_query($conn, $user_sql);
            $result_check = mysqli_num_rows($result);
            if($result_check ){ 
                $pass_encrypted = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', pass = '$pass_encrypted', email = '$email', updated_at = '$updated_at' WHERE id = '$uid';";
                $insert = mysqli_query($conn, $sql);

                if ($insert) {
                    header("Location: /proyecto?e=edit_success");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                //mysqli_close($conn);
            }
            
            
        }

        
        
    }
    else {
        header("Location: /proyecto");
        exit();
    }

















