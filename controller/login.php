<?php
session_start();
    if(isset($_POST['submit'])){

        include_once 'dbConect.php';

        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);

        // Revision de datos
        if(empty($email) || empty($pass)){
            header("Location: /proyecto?nope");
            exit();
        }

        class user {
            public $nombre;
            public $apellido;
            public $email;
            protected $password;
            protected $created_at;
            protected $updated_at;
        }

        // Revisar si el usario existe
        $sql_user = "SELECT * FROM usuarios WHERE email = '$email';";
        $query = mysqli_query($conn, $sql_user);
        $result_check = mysqli_num_rows($query);
        if($result_check < 1) {
            header("Location: /proyecto?noUser");
            exit();
        }
        else {
            if($user = mysqli_fetch_assoc($query)){
                $encryptedPassCheck = password_verify($pass, $user['pass']);
                if($encryptedPassCheck == false) {
                    header("Location: /proyecto?pass");
                    exit();
                }
                elseif($encryptedPassCheck == true) {                       // LOG IN
                    $_SESSION['u_id'] = $user['id'];
                    $_SESSION['u_nombre'] = $user['nombre'];
                    $_SESSION['u_apellido'] = $user['apellido'];
                    $_SESSION['u_email'] = $user['email'];
                    header("Location: /proyecto?success=1");
                    exit();
                }
            }
        }

    }
    else {
        header("Location: /proyecto");
        exit();
    }