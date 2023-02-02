<?php
include("c.php");

$id = $_POST['id_eli'];
$usuario = $_POST['u_eli'];


$eliminar = "DELETE FROM usuarios WHERE id_cliente = $id and usuario = '$usuario'";

$resultado = mysqli_query($conexion, $eliminar);

?>