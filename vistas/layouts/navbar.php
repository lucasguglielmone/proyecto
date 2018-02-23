<nav class="navbar">
    <ul class="container">
        <li class="">
            <a href="/proyecto" class="nav-item">
                <img src="/proyecto/public/img/favicon-invertido.png" alt="Home" height="20px" width="15px">
            </a>
        </li>
        <li class="">
            <a></a>
        </li>
        <li class="listItem">
            <a href="/proyecto/vistas/posts/get.php" class="nav-item">Blog</a>
        </li>
        <li class="pull-right listItem no-hover">
            <?php 
            if(empty($_SESSION)){
                echo '<form action="/proyecto/controller/login.php" method="post" class="login-form">
                    <div class="">
                        <input type="text" placeholder="E-mail" name="email" class="login-email">
                    </div>
                    <div class="">
                        <input type="password" name="password" placeholder="Contraseña" class="login-pass">
                    </div>
                    <input type="submit" name="submit" class="login-btn" value="Entrar">
                </form>';
            }
            else {
            echo '<li class="listItem myacc">
                <div class="drop-down">
                    <a href="/proyecto/vistas/user/micuenta.php" class="nav-item">Mi Cuenta</a>
                    <div class="drop-down-content">
                        <a href="/proyecto/vistas/user/upload.php">Nuevo Post</a>
                        <form action="/proyecto/controller/logout.php" method="post" class="logoutformm">
                            <input type="submit" name="submit" class="logout-btn" value="Cerrar Sesion">
                        </form>
                    </div>
                </div>
            </li>';
            /*echo '<form action="/proyecto/controller/logout.php" method="post" class="login-form">
                <input type="submit" name="submit" class="logout-btn" value="Log Out">
            </form>';*/
            } ?>
            <!--a href="/proyecto/vistas/user/login.php" class="nav-item nav-item-login">
                Log in
            </a-->
        </li>
        <!--li class="pull-right listItem">
            <a href="/proyecto/vistas/user/register.php" class="nav-item nav-item-register">
                Register
            </a>
        </li-->
    </ul>
</nav>

<section id="errors">
    <?php include_once ($_SERVER['DOCUMENT_ROOT']."/proyecto/vistas/layouts/errors.php")?>
</section>