<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>

  <h3>Subir archivp con Php</h3>

  <form action="formulario.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fichero">
    <br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>