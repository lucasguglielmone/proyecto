<?php
    session_start();
    include_once 'dbConect.php';
    $id = $_GET['id'];
    $img = mysqli_query($conn, "SELECT * FROM imgs WHERE id = '$id' LIMIT 1;");
    $imgs = mysqli_fetch_assoc($img);

    if ($_SESSION['u_id'] != $imgs['idUser']){
        header("Location: /proyecto?1");
        exit();
    }
    else {
        $query = mysqli_query($conn, "DELETE FROM imgs WHERE id = '$id';");
        $result_check = mysqli_num_rows($query);
        
        header("Location: /proyecto/vistas/posts/misposts.php?e=delOk");
        exit();
    }

    

?>