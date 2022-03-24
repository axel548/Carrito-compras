<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--ICONO-->
    <link rel="icon" href="<?php echo RUTAPUBLIC; ?>/public/img/logo.png">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="<?php echo RUTAPUBLIC; ?>/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/vendor/fontawesome-free/css/all.min.css">
        <?php if(isset($_SESSION['id_usuario']) && $_SESSION['usr']->rol=="1"):?>
            <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/css/sb-admin-2.min.css">
        <?php endif ?>
    <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/css/reloj.css">
    <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/css/menu.css">

    <!--JS-->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <title>
        <?php echo NOMBREAPP ?>
    </title>
    <style>
        body {
            background-color: white-smoke;
        }
        
        .center-div {
            margin: 0 auto;
            width: 50%;
        }
    </style>
</head>
    <?php if(isset($_SESSION['id_usuario']) && $_SESSION['usr']->rol=="1"):?>
    <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- MENU-SIDEBAR -->
        <?php require RUTAAPP . '/vistas/include/menu.php'; ?>
        <!-- Contenido WRAPPER -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require RUTAAPP . '/vistas/include/toolbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php else: ?>
    <body>
    <?php require RUTAAPP . '/vistas/include/navbar.php'; ?>
<?php endif ?>