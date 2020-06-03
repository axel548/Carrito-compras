<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<?php  
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>
<div class="container">
    <br>
    <form action="<?php echo RUTAPUBLIC; ?>/reservas/nuevaReserva" method="post" autocomplete="off" enctype="multipart/form-data">
        <h1>¡Reserva Ya!</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nombre de empresa</label>
                    <input type="text" class="form-control" name="empresa" id="" maxlength="100" onkeypress="return sololetras(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="">Número telefonico</label>
                    <input type="tel" class="form-control" name="telefono" id="" maxlength="8" onkeypress="return valideKey(event);" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="" maxlength="50" minlength="2" onkeypress="return sololetras(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="" maxlength="50" minlength="2" onkeypress="return sololetras(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="">Cantidad de Personas</label>
                    <div class="form-group">sss
                        <label for="">Hospedaje</label>
                        <!--
                            <input type="text" class="form-control" name="cantPersonas" id="" maxlength="3" minlength="1" onkeypress="" required>
                        -->
                        <select class="form-control" name="cantPersonas" required>
                            <?php for ($i=1; $i <= 50; $i++) { ?>
                            <option><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Correo Electrónico</label>
                    <input type="email" class="form-control" name="correo" id="" maxlength="100" minlength="11" onkeypress="" required>
                </div>

                <div class="form-group">
                    <label for="">Hospedaje</label>
                    <!--
                        <input type="text" class="form-control" name="hospedaje" id="" maxlength="3" minlength="1" onkeypress="" required>
                    -->
                    <select class="form-control" name="hospedaje" required>
                        <?php for ($i=1; $i <= 50; $i++) { ?>
                        <option><?php echo $i; ?></option>
                        <?php } ?>
                         </select>
                </div>
            </div>
        </div>

        <br><br>

        <h1>Datos de Evento</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hora de Entrada</label>
                    <input type="time" class="form-control" name="horaEntrada" id="" onkeypress="" required>
                </div>
                <div class="form-group">
                    <label for="">Hora de Salida</label>
                    <input type="time" class="form-control" name="horaSalida" id="" onkeypress="" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Día</label>
                    <!--
                    <input type="text" class="form-control" name="dia" id="" maxlength="2" minlength="1" onkeypress="" required>
                    -->
                    <select class="form-control" name="dia" required>
                        <?php for ($i=1; $i <= 31; $i++) { ?>
                        <option><?php echo $i; ?></option>
                        <?php } ?>
                         </select>
                </div>
                <div class="form-group">
                    <label for="">Mes</label>
                    <!--
                    <input type="text" class="form-control" name="mes" id="" maxlength="15" minlength="5" onkeypress="" required>
                    -->
                    <select class="form-control" name="mes" required>
                        <?php for ($i=0; $i <= 11; $i++) { ?>
                        <option><?php echo $meses[$i]; ?></option>
                        <?php } ?>
                         </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Año</label>
                    <!--
                    <input type="text" class="form-control" name="año" id="" maxlength="4" minlength="4" onkeypress="" required>
                    -->
                    <select class="form-control" name="año" required>
                        <?php for ($i=2000; $i <= 2100; $i++) { ?>
                        <option><?php echo $i; ?></option>
                        <?php } ?>
                         </select>
                </div>
                <div class="form-group">
                    <label for="">Tipo de Evento</label>
                    <input type="text" class="form-control" name="tipoEvento" id="" maxlength="50" minlength="5" onkeypress="" required>
                </div>
            </div>
        </div>
        <button class="btn btn-success">Reservar</button>
    </form>
    <br>
    <br><br>
</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>