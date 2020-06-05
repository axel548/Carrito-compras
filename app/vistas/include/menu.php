<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo RUTAPUBLIC; ?>/Dashboard/index">
  <div class="sidebar-brand-icon rotate-n-15">
  <ion-icon name="skull"></ion-icon>
  </div>
  <div class="sidebar-brand-text mx-3"> <?php echo NOMBREAPP ?><sup>3</sup></div>
</a>

<!-- DIVISION -->
<hr class="sidebar-divider my-0"> 

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/Dashboard/index">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Menu</span></a>
</li>

<!-- DIVISION -->
<hr class="sidebar-divider">

<!-- Heading-Interfaz -->
<div class="sidebar-heading">
  Interfaz
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Components</span>
  </a>  
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="<?php echo RUTAPUBLIC; ?>/inicio/error">404</a>
      <a class="collapse-item" href="cards.html">Cards</a>  
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.html">Colors</a>
      <a class="collapse-item" href="utilities-border.html">Borders</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading-Addon -->
<div class="sidebar-heading">
  Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Pages</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Login Screens:</h6>
      <a class="collapse-item" href="login.html">Login</a>
      <a class="collapse-item" href="register.html">Register</a>
      <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Other Pages:</h6>
      <a class="collapse-item" href="404.html">404 Page</a>
      <a class="collapse-item" href="blank.html">Blank Page</a>
    </div>
  </div>
</li>

<!-- Nav Item - Gestionar Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Gestión</span>
  </a>
  <div id="collapseProducts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Gestionar:</h6>
      <a class="collapse-item" href="<?php echo RUTAPUBLIC; ?>/categoria/index">Categorías</a>
      <a class="collapse-item" href="<?php echo RUTAPUBLIC; ?>/productos/index">Productos</a>
      <a class="collapse-item" href="<?php echo RUTAPUBLIC; ?>/pedido/gestioncategorias">Pedidos</a>
    </div>
  </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/publicaciones/index">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Publicaciones</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/carousel/index">
    <i class="fas fa-fw fa-table"></i>
    <span>Carousel</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/reservas/index">
    <i class="fas fa-fw fa-table"></i>
    <span>Reservas</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>