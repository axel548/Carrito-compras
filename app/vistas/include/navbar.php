<nav class="navbar navbar-expand-lg navbar-dark bg-dark site-header sticky-top py-2">
    <a class="navbar-brand" href="#">
        <?php echo NOMBREAPP ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container d-flex flex-column flex-md-row justify-content-between" id="navbarSupportedContent">

        <!--ul-->
        <ul class="navbar-nav mr-auto">
        <?php if(isset($_SESSION['id_usuario'])):?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <ion-icon name="person-circle"></ion-icon> Usuario
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if($_SESSION['usr']->rol=="1"):?>
                            <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/usuarios/inicio"><ion-icon name="person"></ion-icon> Administrar</a>
                        <?php elseif($_SESSION['usr']->rol=="2"):?>
                            <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/Pedido/confirmado"><ion-icon name="person"></ion-icon> Confirmado</a>
                            <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/Pedido/index"><ion-icon name="person"></ion-icon> Pedidos</a>
                            <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/Pedido/mis_pedidos"><ion-icon name="person"></ion-icon>Mis Pedidos</a>
                        <?php elseif($_SESSION['usr']->rol=="3"):?>
                            <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/usuarios/inicio"><ion-icon name="person"></ion-icon> Administrar</a>
                        <?php endif ?> 
                        <a class="dropdown-item" href="<?php echo RUTAPUBLIC; ?>/usuarios/salir"><ion-icon name="person"></ion-icon> Salir</a>                  
                    </div>
                </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/index"><ion-icon name="home"></ion-icon></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/slider"><ion-icon name="pricetags"></ion-icon> Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/productosrandom"><ion-icon name="pricetags"></ion-icon> Productos</a>
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
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/Carrito/index"><ion-icon name="cart"></ion-icon>Carrito</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/contacto"><ion-icon name="pricetags"></ion-icon> Contacto</a>
                </li>
        </ul>
        <!--/ul-->

        <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">
            <button class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
        </form>
    </div>
</nav>