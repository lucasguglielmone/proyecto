<?php

    include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/controller/dbConect.php';
    $imgs = mysqli_query($conn, "SELECT * FROM imgs;");
    //$_SERVER['DOCUMENT_ROOT'].'/proyecto/public/uploads/' . $img["ruta"]

?>

<div class="slider">
    <?php
    if(!empty($imgs)){
        while($img = mysqli_fetch_assoc($imgs)){
            echo '<img src="'. 'public/uploads/' . $img["ruta"] .'" alt="img" height="auto" width="25%" class="mySlides" id="post-'. $img["id"] .'"/>';
        }
    }
    ?>
</div>
<script>
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/public/js/slider.js';
    ?>
</script>