<?php
    if(isset($_POST['submit'])){
        include_once 'dbConect.php';

        $file = $_FILES['file'];
        print_r($file);
    }
    else {
        header("Location: /proyecto");
        exit();
    }

















