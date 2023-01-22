<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <a href="" class="nav_links"><i class='bx bxs-cheese bx-sm' ></i> Viveres</a>
            </li>
            <li class="nav_items">
                <a href="verduras.php" class="nav_links"><i class='bx bxs-pear bx-sm'></i> Verduras</a>
            </li>
            <li class="nav_items">
                <a href="Login-registro.php" class="nav_links"><i class='bx bxs-user-plus bx-sm' ></i> Registrate</a>
            </li>
            <li class="nav_items">
                <a href="Login.php" class="nav_links"><i class='bx bxs-user-rectangle bx-sm' ></i>Iniciar Sesion</a>
            </li>
            <img src="../images/bxl-xing.svg" alt="" class="nav_close">
        </ul>
         <div class="nav_menu">
         <img src="../images/bxs-chevrons-left.svg" alt="" class="nav_img">
         </div>

         <div class="container-icon">
            <i class='bx bx-cart bx-md bx-tada'></i>
         </div>
         <div class="count-products">
            <span id="contador-productos">0</span>
        </div>
        <div class="container-cart-products hidden-cart">
            <div class="row-product">
                <div class="cart-product">
                    <div class="info-cart-product">
                        <span class="cantidad-product-carrito">1</span>
                        <p class="titulo-producto-carrito">Promocion Shampoo y PH</p>
                        <span class="precio-product-carito">$100</span>
                    </div>
                    <img src="../images/bx-trash.svg" alt="" class="icon-close">
                    </div>
            </div>
           
            <div class="cart-total hidden">
                <h4>Total:</h4>
                <span class="total-pagar">$120</span>
            </div>
               <div>
               <p class="cart-empty">El carrito esta vacio</p>
               </div>
        </div>
        </div>
    </section>
</header>


</body>
</html>