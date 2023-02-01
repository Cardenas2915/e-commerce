<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
<?php

include('../php/c.php');
session_start();

$sesion = $_SESSION['cliente'];

$datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$sesion'");

while ($consulta = mysqli_fetch_array($datos)){
    $rol = $consulta['rol'];

}
if($rol == "admin"){
    include("Admin.php");
}else{
    include("cliente.php");
}

?>
</body>
</html>