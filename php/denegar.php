<?php

include('../php/c.php');
session_start();

$sesion = $_SESSION['cliente'];

$datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$sesion'");

while ($consulta = mysqli_fetch_array($datos)){
    $rol = $consulta['rol'];

}
if($rol == "cliente"){
    echo'
    <script>
    alert("No tienes acceso");
    location.href = "perfil.php"
    </script>
    ';
}

?>