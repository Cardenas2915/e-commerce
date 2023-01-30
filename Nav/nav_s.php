<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
<header>
    <section class="hero">
        <div class="nav">
        <div class="nav_logo">
            <img src="../images/logo.png" alt="" class="nav_title">
        </div>
        <div class="nav_nombre">
            <a href="index.php" class="nombre">LA GRANJA EXPRESS S.A.S</a>
            <p class="subnombre ">Supermercado </p>
        </div>
        <div id="back_menu"></div>
        <ul class="nav_link  nav_link-menu">
            <li class="nav_items">
                <a href="index.php" class="nav_links"><i class='bx bxs-home bx-sm' ></i> Inicio</a>
            </li>
            <li class="nav_items">
                <a class="nav_links"><i class='bx bx-user-check bx-flashing bx-sm' ></i> HOLA! <?php echo $_SESSION['cliente']; ?> </a>
                <ul>
                    <li><a class="menu_des" href="usuarios.php">Perfil </a></li>
                    <li><a class="menu_des" href="#">Mis pedidos</a></li>
                    <li><a class="menu_des" href="../php/cerrar_sesion.php">Cerrar sesion</a></li>
                </ul>
            </li>
            <li class="nav_items">
                <a href="" class="nav_links"><i class='bx bxs-cheese bx-sm' ></i> Viveres</a>
            </li>
            <li class="nav_items">
                <a href="verduras.php" class="nav_links"><i class='bx bxs-pear bx-sm'></i> Verduras</a>
            </li>
            
            
            <img src="../images/bxl-xing.svg" alt="" class="nav_close">
        </ul>
        <div class="nav_menu">
        <img src="../images/bxs-chevrons-left.svg" alt="" class="nav_img">
        </div>
        </div>
    </section>
</header>


<script src="../js/menuinicio.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>