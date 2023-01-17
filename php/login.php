<?php

include('c.php');

$usuario = $_POST['nombre'];
$pass = $_POST['contra'];

//esto es para decirle que valide los datos ingresados con los de la base de datos
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$pass'");

$fila = mysqli_num_rows($resultado);


if($fila > 0){
session_start();
//con esta variable le decimos que guarde el usuario ingresado
$_SESSION['cliente'] = $usuario;
//el header sirve para mandarlo a otra localizacion
header("location:../Nav/index.php");

}else{
    echo'
    <script>
    alert("la contraseña o el usurio son invalidos");
    location.href = "../Nav/login.php";
    </script>
    ';
}
// esto es para terminar la validacion
mysqli_free_result($resultado);
mysqli_close($conexion)


?>