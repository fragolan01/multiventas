<?php

$usuario = $_POST['usuario'];
$password_user = $_POST['password_user'];
// echo $usuario. " - ".$password_user;

if($usuario == "systemas@gmail.com"){
    
    ?>
        <div class="alert alert-success" role="alert">
            Usuario correcto
        </div>

    <?php
}else{
        ?>
        <div class="alert alert-danger" role="alert">
            Usuario Incorrecto
        </div>
        
    <?php

}