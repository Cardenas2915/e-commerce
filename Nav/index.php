<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/stylo.css">
    <title>La granja</title>
</head>
<body>

<?php

include("../php/sesion.php");

?>
    
    <section id="banner">
        <div class="hero_container">
            <h1 class="hero_tittle">Compra tus Viveres y verduras al mejor precio</h1>
            <p class="hero_paragraph">Aqui podras encontar los mejores productos para tu canasta familiar </p>
            <a href="#promos" class="cta">Comprar ahora</a>
        </div>
    </section>

    <section class="slider_auto">
        <div class="slider_container">
        <div class="slider">
        <a href=""> <img src="../images/slider1.png" alt="Imagen Slider"></a>
        </div>
        <div class="slider">
            <a href=""> <img src="../images/slider2.png" alt="Imagen Slider"></a>
            </div>
            <div class="slider">
            <a href=""> <img src="../images/slider4.png" alt="Imagen Slider"></a>
            </div>
            <div class="slider">
            <a href=""> <img src="../images/slider3.png" alt="Imagen Slider"></a>
            </div>
        <div class="prev-button" onclick="plusSlide(-1)">&#10094;</div>
        <div class="next-button" onclick="plusSlide(1)"> &#10095;</div>

        <div class="lines">
            <div class="line" onclick="currentSlide(1)"><img src="../images/bxs-circle.svg" alt=""></div>
            <div class="line" onclick="currentSlide(2)"><img src="../images/bxs-circle.svg" alt=""> </div>
            <div class="line" onclick="currentSlide(3)"><img src="../images/bxs-circle.svg" alt=""> </div>
            <div class="line" onclick="currentSlide(4)"><img src="../images/bxs-circle.svg" alt=""> </div>
        </div>

    </div>
    </section>

    <section class="about" id="promos">
        <h2 class="subtitle">Quieres ver nuestras mejores ofertas</h2>
        <p class="about_paragraph">Las mejores promociones al mejor precio siempre pensando en tu comodidad y el de tu bolsillo</p>

        <div class="about_main">
            <article class="about_icons">
                <img src="../images/oferta_1.jpg" alt="" class="about_icon">
                <h3 class="about_tittle">Promocion shampoo y PH</h3>
                <p class="about_paragraph">$25000</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button> 
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/oferta_2.jpg" alt="" class="about_icon">
                <h3 class="about_tittle">Spaguetti y Manteca</h3>
                <p class="about_paragraph">$15000</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button>
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/Oferta_3.png" alt="" class="about_icon">
                <h3 class="about_tittle">Oferta aceite 2 x 1</h3>
                <p class="about_paragraph">$35000</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button>
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/oferta_4.png" alt="" class="about_icon">
                <h3 class="about_tittle">Arroz + vaso de regalo</h3>
                <p class="about_paragraph">$2500</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button>
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/oferta_5.png" alt="" class="about_icon">
                <h3 class="about_tittle">Huevos pague 30 lleve 12</h3>
                <p class="about_paragraph">$16000</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button> 
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/oferta_6.png" alt="" class="about_icon">
                <h3 class="about_tittle">Pi??a y papaya</h3>
                <p class="about_paragraph">$4000</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button>
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

            <article class="about_icons">
                <img src="../images/oferta_7.png" alt="" class="about_icon">
                <h3 class="about_tittle">Spaguetti al mejor precio</h3>
                <p class="about_paragraph">$1890</p>
                    <button class="carrito"><img src="../images/bxs-cart-add.svg" alt="" class="image-carrito">A??adir</button>
                <!-- <input type="number" id="anio" name="anio" min="1" max="20" /> -->
            </article>

        </div>


        
    </section>

    <section class="knowledge">
        <div class="knowledge_container container">
            <div class="knowledge_text">
                <h2 class="subtitle">Acomula puntos y redimelos en tus productos favoritos</h2>
                <p class="Knowledge_paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur unde deserunt voluptatibus explicabo optio.</p>
                <a href="" class="cta cta-puntos">consultar puntos</a>
            </div>
    <figure class="knowledge_picture">
        <img src="../images/puntos.png" alt="" class="knowledge_img">
    </figure>

        </div>
    </section>

    <section class="price container">
        <h2 class="subtittle">Deseas comprar un bono especial para regalar</h2>

        <div class="price_table">
            <div class="price_element">
                <p class="price_name">Basico</p>
                <h3 class="price_price">$50.000</h3>
                
                <div class="price_items">
                    <p class="price_features"></p>
                    <p class="price_features">Viveres</p>
                    <p class="price_features">Verduras</p>
                </div>
                <a href="" class="price_cta"><span> Comprar ahora </span></a>
            </div>

            <div class="price_element price_element--best">
                <p class="price_name">recomendado</p>
                <h3 class="price_price">$100.000</h3>
                
                <div class="price_items">
                    <p class="price_features">Aseo</p>
                    <p class="price_features">Verduras</p>
                    <p class="price_features">Viveres</p>
                    <p class="price_features">Carnes</p>
                </div>
                <a href="" class="price_cta"><span> Comprar ahora </span></a>
            </div>

            <div class="price_element">
                <p class="price_name">Normal</p>
                <h3 class="price_price">$70.000</h3>
                
                <div class="price_items">
                    <p class="price_features">Aseo</p>
                    <p class="price_features">Viveres</p>
                    <p class="price_features">Verduras</p>
                </div>
                <a href="" class="price_cta"><span> Comprar ahora </span></a>
            </div>
        </div>
    </section>

    <section class="questions container">
        <h2 class="subtitle">Preguntas Frecuentes</h2>
        <p class="questions_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex rem eum molestias recusandae dicta provident</p>

        <section class="questions_container">
            <article class="questions_padding">
                <div class="questions_answer">
                    <h3 class="questions_title"> Que es supermercados la granja?
                        <span class="questions_arrow">
                            <img src="../images/bx-chevron-up.svg" alt="" class="questions_img">
                        </span>
                    </h3>
                    <p class="questions_show">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                    </p>
                </div>
            </article>

            <article class="questions_padding">
                <div class="questions_answer">
                    <h3 class="questions_title"> Porque comprar en supermercados la granja?
                        <span class="questions_arrow">
                            <img src="../images/bx-chevron-up.svg" alt="" class="questions_img">
                        </span>
                    </h3>
                    <p class="questions_show">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                    </p>
                </div>
            </article>

            <article class="questions_padding">
                <div class="questions_answer">
                    <h3 class="questions_title"> Siempre estamos contigo?
                        <span class="questions_arrow">
                            <img src="../images/bx-chevron-up.svg" alt="" class="questions_img">
                        </span>
                    </h3>
                    <p class="questions_show">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod praesentium minus quis veniam eaque.
                    </p>
                </div>
            </article>
        </section>
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
    <script src="../js/sliderindex.js"></script>
    <script src="../js/questions.js"></script>


    
</body>
</html>