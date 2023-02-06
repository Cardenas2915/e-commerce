<?php
  include("../php/c.php");
  include("../php/no_ini.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cliente.css">
      <!-- este link es de alertify cdn  -->
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    
    <title>Perfil</title>
</head>
<body>

<?php
include("../php/sesion.php");
?>
<div class="alerta">
  <?php// include("../php/alerta.php");?>
</div>
<div id="banner"></div>

<div class="titulo">
    <h1 class="nombre">Bienvenido <?php echo $_SESSION['cliente']; ?> </h1>
</div>

<div class="container-tabla">
    <table class="tabla" id="tabla_user">

    <?php
    $cliente = $_SESSION['cliente'];
    $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

    while ($consulta = mysqli_fetch_array($data)) {

    ?>

    <tr>
        <th class="mt-3">Usuario:</th>
        <td> <?php echo $consulta['usuario']; ?> </td>
    </tr>

    <tr >
        <th>Correo:</th>
        <td> <?php echo $consulta['correo']; ?> </td>
    </tr>
    <tr>
        <th>Telefono:</th>
        <td> <?php echo $consulta['telefono']; ?> </td>
    </tr>
    <tr >
        <th>contraseña:</th>
        <td> <input type="password" class="caja_contra"  value="<?php echo $consulta['contraseña']; ?>" disabled> </td>
    </tr>

    <?php } ?>
    
    </table>

    <div class="cont_boton">
        <input type="button" name="mod" class="btn btn-success botton" value="Modificar Datos" data-bs-toggle="modal" data-bs-target="#mod_per">
        <input type="button" name="El" class="btn btn-danger botton" value="Eliminar cuenta" data-bs-toggle="modal" data-bs-target="#El_per">
    </div>

    <!-- esto es de boostrap de la seccion nodal  -->
    <div class="modal fade" id="mod_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="cambiar">

        <?php
            $cliente = $_SESSION['cliente'];
            $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

            while ($consulta = mysqli_fetch_array($data)) {

        ?>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario" value="<?php echo $consulta['usuario']; ?>" disabled >
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Correo:</label>
            <input type="text" class= "form-control" name="correo" value="<?php echo $consulta['correo']; ?>">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Telefono:</label>
            <input type="text" class= "form-control" name="telefono" value="<?php echo $consulta['telefono']; ?>">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Contraseña actual:</label>
            <input type="password" class= "form-control" name="contra" value="">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nueva Contraseña:</label>
            <input type="password" class= "form-control" name="contra_nueva" id="nueva_" disabled="true" required="false">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Check">
            <label class="form-check-label" for="Check">Cambiar Contraseña</label>
          </div>


        </form>
        <?php } ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- esta parte de boostrap es para eliminar las cuentas se hace conexion al boton con el id -->
<div class="modal fade" id="El_per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar cuenta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../php/eliminar.php" method="POST">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Contraseña de seguridad:</label>
            <input type="password" class="form-control" name="eli_c" id="block_uno" disabled="">
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Confirme contraseña:</label>
            <input type="password" class="form-control" name="eli_cd" id="block_dos" disabled="">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="check_el">
            <label class="form-check-label" for="check_el">Estoy seguro de eliminar mi cuenta</label>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary btn-danger">Eliminar</button>
          </div>

        </form>
      </div>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Advertencia!</strong> Al borrar la cuenta sus datos se eliminaran.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  </div>
</div>

</div>
<!-- este jquery es para validar los checkbox  -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../js/funciones.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/menuinicio.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>