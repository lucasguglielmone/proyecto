<?php
    $img = mysqli_fetch_assoc($img);
    echo '<div class="post only" id="post-'. $img["id"] .'">
        <div class="x12 title">
            <h1>'. $img["nombre"] .' </h1>
        </div>
        <div class="img-container">
            <img src="'. "/proyecto/public/uploads/".$img["ruta"] .'" alt="">
        </div>
        <div>
            <span class="descr">
                '. $img['descr'] .'
            </span>
        </div>
    </div>';

?>