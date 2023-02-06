<?php
//este php es para editar los usuarios con la sesion admin
include("c.php");

$usuario = $_POST['usuario_'];
$correo = $_POST['correo_'];
$telefono = $_POST['telefono_'];
$rol = $_POST['rol_'];
$id = $_POST['id_'];

$cambiar = "UPDATE usuarios SET usuario = '$usuario',
correo = '$correo',
telefono = '$telefono',
rol = '$rol' WHERE id_cliente = $id ";


$resultado = mysqli_query($conexion, $cambiar);

mysqli_close($conexion);


?>