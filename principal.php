<?php
    include('app/config.php');
    include('layout/admin/datosUsuarioSesion.php');


    session_start();
    if(isset($_SESSION['usuario_session']))
    {
        // echo "Existe una sesion iniciada";
        ?>
            <!DOCTYPE html>
            <html lang="es">
                <head>
                    <?php include('layout/admin/head.php'); ?>
                </head>
                <body class="hold-transition sidebar-mini">

                    <div class="wrapper">

                        <?php include('layout/admin/menu.php'); ?>

                        <div class="content-wrapper">

                        </div>
                        <?php include('layout/admin/footer.php'); ?>

                    </div>
                    <script src="<?php echo $URL;?>/app/templetes/vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
                    <script src="<?php echo $URL;?>/app/templetes/vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="<?php echo $URL;?>/app/templetes/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
                </body>
            </html>
        <?php
    }else{
        echo "Deben iniciar sesion en el sistema";
    }
?>

