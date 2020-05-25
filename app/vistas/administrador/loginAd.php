<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo RUTAPUBLIC; ?>/public/img/logo.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTAPUBLIC; ?>/public/css/admin.css">
    <title>
        <?php echo NOMBREAPP ?>
    </title>
</head>

<body class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <?php echo NOMBREAPP ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
    <main>
        <div class="container" align="center" style="margin-top: 150px;">
            <div class="row center-div">
                <div class="col-md-12">
                    <form class="form-signin" action="<?php echo RUTAPUBLIC; ?>/usuarios/iniciarSesion" method="POST" autocomplete="off">
                        <h1 class="h3 mb-3 font-weight-bold" style="color: black ; ">Login</h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="correo" required autofocus>
                        <br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="action">ENTRAR</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require RUTAAPP . '/vistas/include/footer.php'; ?>