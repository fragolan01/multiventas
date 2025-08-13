<?php
    include('../app/config.php');
    include('../layout/admin/datosUsuarioSesion.php');


    // session_start();
    // if(isset($_SESSION['usuario_session']))
    // {
    //     // echo "Existe una sesion iniciada";
    // }else{
    //     // echo "No has iniciado sesion";
    // }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include('../layout/admin/head.php'); ?>
    </head>
    <body class="hold-transition sidebar-mini">

        <div class="wrapper">

            <?php include('../layout/admin/menu.php'); ?>

            <div class="content-wrapper">

            <div class="container">
           
                <h2>Ingresa un nuevo Usuario</h2>

            </div>            

            </div>
            <?php include('../layout/admin/footer.php'); ?>

        </div>
    </body>
</html>