<?php
// Esto es para borrar las cuentas del formulario del perfil

include("c.php");
session_start();

$contra = "";
$nueva = $_POST['eli_c'];
$nueva_pw = $_POST['eli_cd'];

$cliente = $_SESSION['cliente'];

    $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

    while($consulta = mysqli_fetch_array($data)){
        $contra = $consulta['contraseña'];
        $user = $consulta['usuario'];
        $id = $consulta['id_cliente'];

    }
    if ($nueva == $nueva_pw) {


        if ($nueva == $contra ){

            $eliminar = "DELETE FROM usuarios WHERE id_cliente = $id and usuario = '$user'";
            $resultado = mysqli_query($conexion, $eliminar);
            
            echo'
            <script>
            alert("La cuenta se ha borrado correctamente");
            location.href = "cerrar_sesion.php";
            </script>
        ';

        }else{

            echo'
            <script>
            alert("contraseña incorrecta");
            location.href = "../Nav/usuarios.php";
            </script>
        ';
        }
        

    }else{
        echo'
            <script>
            alert("Las contraseñas no coinciden");
            location.href = "../Nav/usuarios.php";
            </script>
        ';
    }


mysqli_close($conexion);

?>