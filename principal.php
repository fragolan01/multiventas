<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Pagina de bienbenida</h1>
    
    <?php
        include('app/config.php');

        session_start(); 
        if(isset($_SESSION['usuario_session']))
        {
            echo "Existe una sesion iniciada";
            ?>
            <a href = "<?php echo $URL; ?>/login/cerrar_sesion.php"> cerrar sesion</a>
            <?php

        }else{
            echo "No has iniciado sesion";
        }
    ?>

</body>
</html>