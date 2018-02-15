<?php
    if(isset($_POST['submit'])){
        include_once 'dbConect.php';
        session_start();

        $titulo = $_POST['titulo'];
        $desc = $_POST['desc'];
        $uid = $_SESSION['u_id'];

        $file = $_FILES['file'];
        
        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTmp = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileExt = explode('.',$fileName);
        $fileExtension = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');
        if(!in_array($fileExtension,$allowed)){
            header("Location: /proyecto/vistas/user/micuenta.php?error=file");
            exit();
        }
        else {
            if($file['error'] != 0){
                header("Location: /proyecto/vistas/user/micuenta.php?error=error");
            exit();
            }
            else {
                $fileNameNew = uniqid('',true) . "." . $fileExtension;
                $fileDestination = $_SERVER['DOCUMENT_ROOT']."/proyecto/public/uploads/" . $fileNameNew;
                move_uploaded_file($fileTmp, $fileDestination);

                $sql = " INSERT INTO imgs (nombre, size, idUser, ruta, descr)  VALUES ('$titulo' , $fileSize ,$uid , '$fileNameNew', '$desc' );";
                //echo $sql;
                $insert = mysqli_query($conn, $sql);

                header("Location: /proyecto?upload=success");
                exit();
            }
        }
    }
    else {
        header("Location: /proyecto");
        exit();
    }

















