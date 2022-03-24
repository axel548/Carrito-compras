<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo RUTAPUBLIC; ?>/public/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/css/cover.css">
    <title>
        <?php echo NOMBREAPP ?>
    </title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand"><?php echo NOMBREAPP ?></h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="<?php echo RUTAPUBLIC; ?>/usuarios/slider">Home</a>
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/slider">Productos</a>
                    <a class="nav-link" href="<?php echo RUTAPUBLIC; ?>/usuarios/contacto">Contact</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Axel</h1>
           
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
            </p>
    </main>
            <?php require RUTAAPP . '/vistas/include/footer.php'; ?>