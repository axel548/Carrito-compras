</div>
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="text-center">
            <a href="#" class="btn btn-danger btn-circle btn-lg">
            <ion-icon name="logo-html5"></ion-icon>
            </a>
            <a href="#" class="btn btn-primary btn-circle btn-lg">
            <ion-icon name="logo-css3"></ion-icon>
            </a>
            <a href="#" class="btn btn-warning btn-circle btn-lg">
            <ion-icon name="logo-javascript"></ion-icon>
            </a>
            <a href="#" class="btn btn-secondary btn-circle btn-lg">
            <ion-icon name="logo-npm"></ion-icon>
            </a>        
        </div>
        <br>
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; AXL 2020</span>
        </div>
    </div>
</footer>

</div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo RUTAPUBLIC; ?>/usuarios/salir">Logout</a>
            </div>
        </div>
    </div>
</div>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>