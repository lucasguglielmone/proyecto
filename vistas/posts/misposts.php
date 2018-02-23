<?php
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'].'/proyecto/controller/dbConect.php';
    $id = $_SESSION['u_id'];
    $imgs = mysqli_query($conn, "SELECT * FROM imgs WHERE idUser = '$id';");
    
?>
<!DOCTYPE HTML5>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/head.php";?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/proyecto/vistas/layouts/navbar.php' ?>

        <div class="post-container">
            <?php
                while($img = mysqli_fetch_assoc($imgs)){
                    echo '<div class="post" id="post-'. $img["id"] .'">
                    <div class="x12 title">
                        <h1>'. $img["nombre"] .' </h1>
                        <button class="pull-right close-btn" onclick="toggleDisplay('. "'". "post-". $img["id"] . "'" .')">X</button>
                    </div>
                    <div class="img-container">
                        <img src="'. "/proyecto/public/uploads/".$img["ruta"] .'" alt="">
                    </div>
                    <div>
                        <span class="leermas">
                            Leer mas
                        </span>
                    </div>
                </div>';
                }
            ?>
            
        </div>
    </body>
    <!--script type="text/javascript" src="http://scmplayer.net/script.js" 
        data-config="{'skin':'http://static.tumblr.com/d41lcii/CPRmqwldp/skinflor.css','volume':50,'autoplay':true,'shuffle':false,'repeat':1,'placement':'bottom','showplaylist':false,'playlist':[{'title':'Positive Vibe - SAINT WKND','url':'https://www.youtube.com/watch?v=jf98EeJJimo'},{'title':'Deeper - Van Gelder','url':'https://www.youtube.com/watch?v=pXxbcye1EaU'},{'title':'Go Go Chaos - BONJAH','url':'https://www.youtube.com/watch?v=0bxqu4r5MGY'},{'title':'Here For You - Kygo','url':'https://www.youtube.com/watch?v=tBESAFzAzw8'},{'title':'Dont Wanna Fight - Alabama Shakes','url':'https://www.youtube.com/watch?v=x-5OX7CO26c'},{'title':'Tonight - Coasts','url':'https://www.youtube.com/watch?v=LHdBn38-v1I'},{'title':'My Pretty Blue - Shallow Waters','url':'https://www.youtube.com/watch?v=vX4VYWS0UsI'},{'title':'Henry Krinkle - Stay Justin Martin Remix','url':'https://www.youtube.com/watch?v=PoKZlyaDAmQ'},{'title':'Kyle Andrews - Kangaroo','url':'https://www.youtube.com/watch?v=BmVU1TlBn0Q'},{'title':'Kyle Andrews - The Way To Wonder','url':'https://www.youtube.com/watch?v=2bPm6Jkqrwc'},{'title':'The Lighthouse and the Whaler - Venice','url':'https://www.youtube.com/watch?v=nClBjDOJbGU'},{'title':'Mac DeMarco - Let Her Go','url':'https://www.youtube.com/watch?v=Neu3_4MeGls'},{'title':'S.O.J.A - Here I Am','url':'https://www.youtube.com/watch?v=v2drfdznUB4'},{'title':'Alt-J - Left Hand Free','url':'https://www.youtube.com/watch?v=NRWUoDpo2fo'},{'title':'The 1975 - Robbers','url':'https://www.youtube.com/watch?v=Iyy3YOpxL2k'}]}" >
    </script-->
    <script>
        function toggleDisplay(id_post){
            document.getElementById(id_post).style.display = 'none';
        }
    </script>
</html>