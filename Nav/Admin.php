<?php
    include("../php/c.php");
    include("../php/no_ini.php");
    include("../php/denegar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>

<?php
include("../php/sesion.php");
?>
<h1 class="titulo">lista de usuarios registrados</h1>

<table class="table table-light table-striped" id="adm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Rol</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        </tr>
    </thead>
<?php

$data = mysqli_query($conexion, "SELECT * FROM usuarios");

while($consulta = mysqli_fetch_array($data)){

    $arreglo = $consulta['id_cliente'].','.$consulta['usuario'].','.$consulta['correo'].','.$consulta['telefono'].','.$consulta['rol'];
?>

    <tbody>
        <tr>
        <td> <?php echo $consulta['id_cliente']; ?> </td>
        <td> <?php echo $consulta['usuario']; ?> </td>
        <td> <?php echo $consulta['correo']; ?> </td>
        <td> <?php echo $consulta['telefono']; ?> </td>
        <td> <?php echo $consulta['rol']; ?> </td>
        <td> <button type="button" data-bs-toggle="modal" data-bs-target="#editar" class="btn btn-success" onclick="modificar('<?php echo $arreglo ?>')" >Modificar</button></td>
        <td> <button type="button" data-bs-toggle="modal" data-bs-target="#eliminar" class="btn btn-dark">Eliminar</button></td>
        </tr>
    </tbody>
<?php } ?>
</table>

<button type="button" data-bs-toggle="modal" data-bs-target="#agregar" class="btn btn-primary d-flex mx-auto mb-3">Agregar Usuario</button>

<!-- esta es la ventana modal copiada de boostrap para el boton de agregar usuario -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <form>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">correo:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">telefono:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">contraseña:</label>
                <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Agregar</button>

        </form>
    </div>
    </div>
    </div>
</div>

<!-- esta es la ventana modal copiada de boostrap para el boton de editar usuario -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <form id="form_adm">
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label" >ID:</label>
                <input type="text" class="form-control" id="id_" name="id_">
            
                <label for="recipient-name" class="col-form-label" >Usuario:</label>
                <input type="text" class="form-control" id="usuario_" name="usuario_">
            
                <label for="recipient-name" class="col-form-label" >correo:</label>
                <input type="text" class="form-control" id="correo_" name="correo_">
            
                <label for="recipient-name" class="col-form-label" >telefono:</label>
                <input type="text" class="form-control" id="telefono_" name="telefono_">
            </div>
            <div class="mb-3">
                <label for="form-label">Rol</label>
                <select id="rol_" class="form-select form-control" name="rol_">
                    <option>admin</option>
                    <option selected="">cliente</option>
                </select>
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="modificar_adm">Modificar</button>

        </form>
    </div>
    </div>
    </div>
</div>

<!-- esta es la ventana modal copiada de boostrap para el boton de eliminar usuario -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Estas seguro de eliminar este usuario?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
        <form>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">ID:</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>

        </form>
    </div>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/funciones_admin.js"></script>
</body>
</html>