<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/verduras.css">
    <script src="../js/jquery-3.2.1.js"></script>
    <title>La granja Verduras</title>
</head>
<body>
<?php
include("../php/sesion.php");
?>

<banner id="banner"></banner>

<section id="publicidad">
    <p class="texto_publi">Frutas Y verduras</p>
</section>

<!-- slider copeado y pegado de boostrap -->
<div id="carouselExampleInterval" class="carousel slide cta_sli" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
        <img src="../images/sliderbo3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
        <img src="../images/sliderbo1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
        <img src="../images/sliderbo2.png" class="d-block w-100" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section id="container_filtros">
<div class="cont_filtro">
<div class="filtro">
    <div class="filtro_marca">
        <h2 class="filtro_titulo">Filtrar por:</h2>
    </div>
    <div class="check">
        <div class="category_lista">
            <p href="#" class="category_item" category="all">Todos</p>
            <p href="#" class="category_item" category="frutas">Frutas</p>
            <p href="#" class="category_item" category="verduras">Verduras</p>
            <p href="#" class="category_item" category="pulpas">pulpas</p>
        </div>
    </div>
</div>
    <div class="filtro1">
    <div class="encabezado_filtros">

        <div class="buscar_filtro">
            <h2>Frutas Y Verduras</h2>
        </div>
        <div class="buscador_cont">
            <input type="search" name="buscador" class="buscador" id="buscador" placeholder="Que estas buscando?" >
        </div>
        <div class="total_filtro">
            <p>100 Productos</p>
        </div>
        <div class="ordenar_filtro">
        <p>Ordenar por:</p>
        <div class="selector">
            <select name="formato" id="formato">
                <option value="ordenar">Mas Nuevo</option >
                <option value="ordenar">Mayor precio</option >
                <option value="ordenar">Menor precio</option >
                <option value="ordenar">A-z</option >
                <option value="ordenar">Z-A</option >
            </select>
        </div>
        </div>
    </div>
        <div class="productos">
        
            <article class="card" category="frutas">
                    <img src="../images/banano.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Bananos x kg</h3>
                    <p class="card_precio">$2000</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="frutas">
                    <img src="../images/mango.png" alt="" class="icon_card">
                    <h3 class="card_nombre">Mango x kg</h3>
                    <p class="card_precio">$2000</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>

            <article class="card" category="verduras">
                    <img src="../images/zanahoria.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">zanahoria x kg</h3>
                    <p class="card_precio">$2150</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="verduras" >
                    <img src="../images/papa_lav.png" alt="" class="icon_card">
                    <h3 class="card_nombre">Papa lavada x kg</h3>
                    <p class="card_precio">$1150</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="verduras" >
                    <img src="../images/arveja.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Arveja x kg</h3>
                    <p class="card_precio">$1150</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="pulpas">
                    <img src="../images/pulpa_piña.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Pulpa de piña</h3>
                    <p class="card_precio">$2850</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="frutas" >
                    <img src="../images/manzana.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Manzana Roja Und</h3>
                    <p class="card_precio">$1800</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="pulpas">
                    <img src="../images/pulpa_mango.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Pulpa de mango</h3>
                    <p class="card_precio">$2850</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="pulpas">
                    <img src="../images/pulpa_mora.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Pulpa de mora</h3>
                    <p class="card_precio">$2850</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="frutas">
                    <img src="../images/tomate_arbol.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Tomate de arbol x kg</h3>
                    <p class="card_precio">$2000</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="verduras" >
                    <img src="../images/cabezona.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Cebolla Cabezona x kg</h3>
                    <p class="card_precio">$1150</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            <article class="card" category="pulpas">
                    <img src="../images/pulpa_fresa.jpg" alt="" class="icon_card">
                    <h3 class="card_nombre">Pulpa de fresa</h3>
                    <p class="card_precio">$2850</p>
                    <button class="card_carrito">Añadir al carrito</button>
            </article>
            
            
        </div>
    </div>

        
</div>
</section>
<script src="../js/busqueda.js"></script>
<script src="../js/filtrar.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>