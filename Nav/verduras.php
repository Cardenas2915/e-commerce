<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/verduras.css">
    <link rel="stylesheet" href="../css/stylo.css">
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

<section class="container_filtros">
<div class="filtros">
    <div class="filtro_marca">
        <h2 class="filtro_titulo">Filtrar por:</h2>
    </div>
    <div class="buscar_filtro">
    <h2>Frutas Y Verduras</h2>
    <input type="search" name="busquedor" placeholder="Que estas buscando?" >
    </div>
    <div class="total_filtro">
        <p>Total productos</p>
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
    <div class="check">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">Verduras</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">Frutas</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">Pulpa de fruta</label>
        </div>
    </div>
</div>
</section>


<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/carrito.js"></script>
<script src="../js/menuinicio.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>