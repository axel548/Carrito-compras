<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <?php echo NOMBREAPP ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!--ul-->
        <ul class="navbar-nav mr-auto">
            <?php if(isset($_SESSION['id_usuario'])):?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <ion-icon name="person"></ion-icon>
                <?php 
                        if(isset($_SESSION['usr'])) {
                            echo $_SESSION['usr']->nombre;
                        }elseif(!isset($_SESSION['usr'])){
                            echo "";
                        }
                ?>
                     </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/usuarios/login">Mi Perfil</a>
                    <a class="dropdown-item " href="<?php echo RUTAPUBLIC; ?>/usuarios/registro">Privilegios</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href=" <?php echo RUTAPUBLIC; ?>/inicio/index"><ion-icon name="home"></ion-icon> Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/buscador/index"><ion-icon name="search"></ion-icon> Search</a>
            </li>
            <?php if($_SESSION['usr']->rol=="1"):?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <ion-icon name="layers"></ion-icon>
                     </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=" <?php echo RUTAPUBLIC; ?>/publicaciones/index">Publicaciones</a>
                    <a class="dropdown-item " href="<?php echo RUTAPUBLIC; ?>/carousel/index">Carousel</a>
                    <a class="dropdown-item " href="<?php echo RUTAPUBLIC; ?>/reservas/index">Reservación</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <ion-icon name="cart"></ion-icon>
                     </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=" <?php echo RUTAPUBLIC; ?>/categoria/index">Gestionar Categorías</a>
                    <a class="dropdown-item " href="">Gestionar Productos</a>
                    <a class="dropdown-item " href="">Gestionar Pedidos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/adminUsr" tabindex="-1" aria-disabled="true"><ion-icon name="cash"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><ion-icon name="people"></ion-icon></a>
            </li>
            <?php elseif($_SESSION['usr']->rol=="2"):?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/adminUsr" tabindex="-1" aria-disabled="true">Estanda</a>
            </li>
            <?php elseif($_SESSION['usr']->rol=="3"):?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/adminUsr" tabindex="-1" aria-disabled="true">Editar</a>
            </li>
            <?php endif ?>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/salir" tabindex="-1" aria-disabled="true">Salir</a>
            </li>

            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/index"><ion-icon name="home"></ion-icon></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/slider"><ion-icon name="pricetags"></ion-icon> Artículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/productos"><ion-icon name="pricetags"></ion-icon> Productos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuarios
                     </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/usuarios/login"><ion-icon name="person"></ion-icon> Entrar</a>
                    <a class="dropdown-item " href="<?php echo RUTAPUBLIC; ?>/usuarios/registro"> <ion-icon name="person-add"></ion-icon> Registrarse</a>
                    <div class="dropdown-divider "></div>
                    <a class="dropdown-item " href="#"><ion-icon name="analytics"></ion-icon> Riemann</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/contacto"><ion-icon name="pricetags"></ion-icon> Contacto</a>
            </li>
            <?php endif ?>
        </ul>
        <!--/ul-->

        <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">
            <button class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
        </form>
    </div>
</nav>