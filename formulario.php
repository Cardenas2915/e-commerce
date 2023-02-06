<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">

    <br>

    <label for="asignaturas">asignaturas</label>
    <select name="asignatura[]" id="asignatura" multiple>
        <option value="Ingles">Ingles</option>
        <option value="Matematicas">Matematicas</option>
        <option value="Ciencia">Ciencia</option>
        <option value="Español">Español</option>
    </select>

    <br> <br>
    <label for="opcion-1">
        <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana
    </label>
    <label for="opcion-2">
        <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]">Fresa
    </label>
    <label for="opcion-3">
        <input type="checkbox" value="Pera" id="opcion-3" name="frutas[]">Pera
    </label>

    <br> <br>

    <button type="submit">Enviar</button>

    </form>
</body>
</html>

