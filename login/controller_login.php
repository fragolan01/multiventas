<?php

// require_once __DIR__ . '../app/config.php'; 
include ('../app/config.php');


$usuario = $_POST['usuario'] ?? '';
$password_user = $_POST['password_user'] ?? '';
// echo $usuario. " - ".$password_user;

// Consulta SQl
$query_login = $conn->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
// Enlazar los parametros tipo. s = string
$query_login->bind_param("ss", $usuario, $password_user); // "ss" indica que ambos parámetros son de tipo string
// Ejecuta consulta
$query_login->execute();
// Resultados consulta
$result_login = $query_login->get_result();

// Verificar si se encontro el usuario
if($result_login->num_rows > 0 )
{
    // si se encontro el usuario obtener la finla como array asociativo
    $usuarioEncontrado = $result_login->fetch_assoc();

    // Acceder al id del usuario
    $id = $usuarioEncontrado['id']; 


    ?>
    <div class="alert alert-success" role="alert">
        Usuario correcto!
    </div>



    <?php
    

    // Rediregir rl usuario a otra pagina de inicio
}else{
    // Si no sr rncontro
    // echo "Usuario o contrase;a incorrectos";
    ?>
        <div class="alert alert-danger" role="alert">
            Usuario o Password incorrecto!
        </div>
        <script>
            $('#password').val("");$('#contrasena').focus();
            $('#usuario').val("");$('#correo').focus();

        </script>

    <?php
}

// cerrar conexion
$conn->close();
