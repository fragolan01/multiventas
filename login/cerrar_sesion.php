<?php

include('../app/config.php');

session_start();
if(isset($_SESSION['usuario_session']))
{
    session_destroy();
    header("Location:".$URL."/");

}

?>