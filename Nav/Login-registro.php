<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/registro.css">
    <title>Login</title>
</head>
<body>
<header>
    <section class="hero">
        <div class="nav">
        <div class="nav_logo">
            <img src="../images/logo.png" alt="" class="nav_title">
        </div>
        <div class="nav_nombre">
            <h1 class="nombre">LA GRANJA EXPRESS S.A.S</h1>
            <p class="subnombre ">Supermercado</p>
        </div>
        <div id="back_menu"></div>
        <ul class="nav_link  nav_link-menu">
            <li class="nav_items">
                <a href="index.php" class="nav_links"><i class='bx bxs-home bx-sm' ></i> Inicio</a>
            </li>
            <li class="nav_items">
                <a href="" class="nav_links"><i class='bx bxs-cheese bx-sm' ></i> Viveres</a>
            </li>
            <li class="nav_items">
                <a href="" class="nav_links"><i class='bx bxs-pear bx-sm'></i> Verduras</a>
            </li>
            <li class="nav_items">
                <a href="Login.php" class="nav_links"><i class='bx bxs-user-plus bx-sm' ></i>Iniciar Sesion</a>
            </li>
            
            <img src="../images/bxl-xing.svg" alt="" class="nav_close">
        </ul>
         <div class="nav_menu">
         <img src="../images/bxs-chevrons-left.svg" alt="" class="nav_img">
         </div>
        </div>
    </section>
</header>

    <section id="banner">
        <form action="../php/registro.php" method="POST" class="form" id="registro-for">
            <h2 class="form_title">Registrate Aqui</h2>
            <p class="form_paragraph">Ya tienes cuenta <a href="Login.php" class="form_link">Ingresa Aqui</a></p>

            <div class="form_container">
                <div class="form_group">
                    <label for="name" class="form_label">Ingrese Usuario:</label>
                    <input type="text" id="name" class="form_input" name="nombre" placeholder=" ">
                </div>

                <div class="form_group">
                <label for="email" class="form_label">Correo:</label>
                    <input type="email" id="email" class="form_input" name="correo" placeholder="  ">
                </div>

                <div class="form_group">
                    <label for="Tel" class="form_label">Telefono:</label>
                    <input type="tel" id="Tel" name="telefono" class="form_input" placeholder=" ">
                </div>

                <div class="form_group">
                    <label for="password" class="form_label">Contraseña:</label>
                    <input type="password" id="password" class="form_input" name="contra" placeholder="">
                </div>

                <input type="submit" class="form_submit" value="Registrarse">
            </div>
        </form>
    </section>

    
    <footer class="footer">
        <section class="footer_container">
            <a href="" class="footer_paragraph"> Quienes somos</a>
            <a href="" class="footer_paragraph"> Estamos Ubicados</a>
            <a href="" class="footer_paragraph"> Mision</a>
            <a href="" class="footer_paragraph"> Vision</a>
            <a href="" class="footer_paragraph"> Contactanos</a>
            <a href="" class="footer_paragraph"> PQRS</a>
            <a href="" class="footer_paragraph"> Terminos y condiciones</a>
            <div class="footer_social">
                <p class="redes">SIGUENOS EN:</p>
                <a href="" class="footer_icons"><img src="../images/bxl-facebook.svg" alt="" class="footer_img"></a>
                <a href="" class="footer_icons"><img src="../images/bxl-gmail.svg" alt="" class="footer_img"></a>
                <a href="" class="footer_icons"><img src="../images/bxl-instagram.svg" alt="" class="footer_img"></a>
            </div>
        </section>
        <section class="footer_copy">
            <h3 class="footer_copyright">Derechos reservados &copy; Eduar Cruz</h3>
        </section>
    </footer>
    <script src="../js/menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../js/funciones.js"></script>
    

</body>
</html>