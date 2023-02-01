<?php
// esto es para restringir la entrada a algunas paginas mienstras la sesion no este iniciada
session_start();
error_reporting(0);
$sesion_i = $_SESSION['cliente'];

if($sesion_i != ""){
    header("location:usuarios.php");
}

?>