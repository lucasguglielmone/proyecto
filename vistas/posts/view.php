<?php

use models\posts;

/*
foreach ($posts as $post) {
    
}*/


function displayPost($request){
    $title = $request->title;
    $description = $request->description;
    $body = $request->body;
    $date = $request->created_at;
    $post = <<<com   
        <div class="post-element">
            <img src="" alt="">
            <h3 class="">$title</h3>
            <p class="">$description</p>
            <hr>
            <div class="">
                $body
            </div>
            <hr>
            <div class="">

            </div>
        </div>
com;
}

?>