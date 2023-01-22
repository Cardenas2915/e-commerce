<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-danger position-absolute d-inline-flex p-2" role="alert">
  <p>La sesion expira en:&nbsp</p><div id="number" class="text-danger"></div>
    </div>

    <!-- esto es hacer el conteo para cerrar sesion despues de un tiempo de inactividad -->

    <script type="text/javascript">
        var n = 30;
        var l = document.getElementById("number");
        var id = window.setInterval(function(){
            document.onmousemove = function(){
                n = 30
            };

            l.innerText = n;
            n--;

            if(n <= -1){
                alert("La sesion expiró");
                location.href = "../php/cerrar_sesion.php";
            }

        },1200);

    </script>

</body>
</html>