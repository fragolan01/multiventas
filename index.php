<?php include('app/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('public/img/imagenPortada.jpg');
    background-repeat: no-repeat;
    z-index: -3;
    background-size: 100vw 100vh">

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container-fluid">
        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Link</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu active">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ingresar
            </button>
        </div>
    </div>
</nav>

</body>
</html>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Inicio de sesion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class = "row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Usuario/Email</label>
                            <input type="email" id="usuario" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div id="respuesta">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_cancelar">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_ingresar">Ingresar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Asignamos la función de login a una variable para evitar duplicar código.
        function login() {
            var usuario = $('#usuario').val();
            var password_user = $('#password').val();

            // Verificamos que los campos no estén vacíos antes de hacer la llamada.
            if (usuario.length === 0 || password_user.length === 0) {
                $('#respuesta').html('<div class="alert alert-danger" role="alert">Usuario y/o contraseña no pueden estar vacíos.</div>');
                return; // Detenemos la función si los campos están vacíos.
            }

            var url = 'login/controller_login.php';
            $.post(url, { usuario: usuario, password_user: password_user }, function(datos) {
                // El servidor debe devolver una respuesta clara (ej: un JSON).
                // Si la respuesta es una redirección, el navegador la procesa automáticamente.
                // Si el servidor envía un mensaje de error, lo mostramos.
                $('#respuesta').html(datos);
            });
        }

        // 1. Escuchar el evento 'click' del botón de ingresar.
        $('#btn_ingresar').click(function(){
            login();
        });

        // 2. Escuchar el evento 'keypress' del campo de contraseña.
        $('#password').keypress(function(e) {
            // El código 13 corresponde a la tecla 'Enter'.
            if (e.which === 13) {
                login();
            }
        });
    });
</script>