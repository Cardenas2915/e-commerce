<?php
// esto es para restringir la entrada a algunas paginas mienstras la sesion no este iniciada
error_reporting(0);
session_start();

$sesion_i = $_SESSION['cliente'];

if($sesion_i == null || $sesion_i = ""){
    echo'

    <script>

    alert("No tienes sesion activa");
    location.href = "login.php";
    </script>
    ';
}