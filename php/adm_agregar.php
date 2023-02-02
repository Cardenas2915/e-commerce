<?php
//este php es para agregar usuarios con la sesion admin
include("c.php");

$usuario = $_POST['adm_usuario'];
$correo = $_POST['adm_correo'];
$telefono = $_POST['adm_telefono'];
$pass = $_POST['adm_pass'];

$insertar = "INSERT INTO usuarios (usuario,contraseña,correo,telefono,rol) VALUES('$usuario', '$pass', '$correo','$telefono', 'cliente')";

$resultado = mysqli_query($conexion, $insertar);

?>