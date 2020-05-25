<?php require RUTAAPP . '/vistas/include/header.php'; ?>


<div class="container-fluid">
    <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
            <div class="logo">
                <h1 class="bg-primary">Categorías</h1>
            </div>
            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a href="#">
                    <ion-icon name="cart"></ion-icon><span>Crear Categoría</span></a>
                <a href="#">
                    <ion-icon name="cart"></ion-icon><span>facd</span></a>
                <a href="#">
                    <ion-icon name="cart"></ion-icon><span>Cbdgbgfb</span></a>
                <a href="#">
                    <ion-icon name="cart"></ion-icon><span>bsbhdg</span></a>
            </nav>
        </div>
        <main class="main col">
            <div class="row">
                <div class="columna col-lg-7">
                    <div class="widget nueva_entrada">
                        <h3 class="titulo">Nueva Entrada</h3>
                        <form action="">
                            <input type="text" placeholder="Tituo de la entrada">
                            <textarea placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ex quaerat suscipit adipisci aliquam asperiores fuga praesentium id? Minima dolor aperiam officiis et alias at qui tempore iusto? Voluptas, voluptatibus?"></textarea>
                            <div class="d-flex justify-content-end">
                                <button><ion-icon name="send"></ion-icon> Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="columna col-lg-5">
                    <div class="widget estadisticas">
                        <h3 class="titulo">Estadisticas</h3>
                        <div class="contenedor d-flex flex-wrap">
                            <div class="caja">
                                <h3>15,236</h3>
                                <p>Visitas</p>
                            </div>
                            <div class="caja">
                                <h3>1,831</h3>
                                <p>Registros</p>
                            </div>
                            <div class="caja">
                                <h3>$160,548</h3>
                                <p>Ingresos</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget comentarios">
                        <h3 class="titulo">Comentarios</h3>
                        <div class="contenedor">
                            <div class="comentario d-flex flex-wrap">
                                <div class="foto">
                                    <a href="#">
                                    <img src="<?php echo RUTAPUBLIC;?>/public/img/scar.jpg" alt="" width="100">
                                   </a>
                                </div>
                                <div class="texto">
                                    <a href="#">Scarlet</a>
                                    <p>en <a href="#">Mi primer entrada</a></p>
                                    <p class="texto-comentario">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est deserunt atque, facere tenetur ipsam, laborum eos mollitia doloribus minus delectus explicabo repudiandae voluptatem tempore quis suscipit rem placeat consequatur.
                                    </p>
                                </div>
                                <div class="botones d-flex justify-content-start flex-wrap w-100">
                                    <button class="aprobar"><ion-icon name="checkmark-outline"></ion-icon> Aprobar</button>
                                    <button class="eliminar"><ion-icon name="close"></ion-icon> Eliminar</button>
                                    <button class="bloquear"><ion-icon name="flag"></ion-icon> Bloquear</button>
                                </div>
                            </div>
                            <div class="comentario d-flex flex-wrap">
                                <div class="foto">
                                    <a href="#">
                                    <img src="<?php echo RUTAPUBLIC;?>/public/img/scar.jpg" alt="" width="100">
                                   </a>
                                </div>
                                <div class="texto">
                                    <a href="#">Scarlet</a>
                                    <p>en <a href="#">Mi primer entrada</a></p>
                                    <p class="texto-comentario">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est deserunt atque, facere tenetur ipsam, laborum eos mollitia doloribus minus delectus explicabo repudiandae voluptatem tempore quis suscipit rem placeat consequatur.
                                    </p>
                                </div>
                                <div class="botones d-flex justify-content-start flex-wrap w-100">
                                    <button class="aprobar"><ion-icon name="checkmark-outline"></ion-icon> Aprobar</button>
                                    <button class="eliminar"><ion-icon name="close"></ion-icon> Eliminar</button>
                                    <button class="bloquear"><ion-icon name="flag"></ion-icon> Bloquear</button>
                                </div>
                            </div>
                            <div class="comentario d-flex flex-wrap">
                                <div class="foto">
                                    <a href="#">
                                    <img src="<?php echo RUTAPUBLIC;?>/public/img/scar.jpg" alt="" width="100">
                                   </a>
                                </div>
                                <div class="texto">
                                    <a href="#">Scarlet</a>
                                    <p>en <a href="#">Mi primer entrada</a></p>
                                    <p class="texto-comentario">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est deserunt atque, facere tenetur ipsam, laborum eos mollitia doloribus minus delectus explicabo repudiandae voluptatem tempore quis suscipit rem placeat consequatur.
                                    </p>
                                </div>
                                <div class="botones d-flex justify-content-start flex-wrap w-100">
                                    <button class="aprobar"><ion-icon name="checkmark-outline"></ion-icon> Aprobar</button>
                                    <button class="eliminar"><ion-icon name="close"></ion-icon> Eliminar</button>
                                    <button class="bloquear"><ion-icon name="flag"></ion-icon> Bloquear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>