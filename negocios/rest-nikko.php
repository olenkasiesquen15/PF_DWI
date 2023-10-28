<?php include("encabezado2.php"); ?>

<main class="restaurant">
    <div class="portada">
        <div class="texto">
            <h1>Nikko - La Molina</h1>
            <span>Pescados y Mariscos | La Molina</span>
        </div>
    </div>

    <div class="info-restaurant">
        <div class="info-general">
            <h2>Nikko - La Molina</h2>
            <span>Pescados y Mariscos | La Molina</span>
            <p>
                La cocina nikkei es una cocina peruana con influencia japonesa, en Nikko rescatamos sabores y
                experiencias, mezclando la riqueza de nuestras culturas y la diversidad de nuestros insumos con
                ingredientes y técnicas japonesas, un homenaje a los maestros. Por eso Nikko no es un sushi bar, Nikko
                es una cebicheria nikkei.
            </p>
            <a href="#" scoped>
                <button id="bottone1"><strong>Reserva ahora</strong></button>
            </a>
        </div>
        <img src="../img/RESTAURANTES-PORTADAS/nikko-cebicheria-nikei.jpg" alt="">
    </div>

    <div class="detalles-restaurant">
        <div class="det">
            <h2>Detalles</h2>
            <hr>
        </div>

        <div class="detalles-grupo1">
            <img src="../img/RESTAURANTES-PORTADAS/suugc-foto-fotonetflix3-nikko-la-molina-1.webp" alt="">
            <div class="detalles-grupo2">
                <div class="detalles-grupo3">
                    <div class="circulo3">
                        <iconify-icon icon="ion:restaurant-outline" width="20" height="20"></iconify-icon>
                    </div>
                    <div class="detalles-info-grupo3">
                        <h3>Tipo de comida</h3>
                        <p>Pescados y mariscos</p>
                    </div>
                </div>

                <div class="detalles-grupo3">
                    <div class="circulo3">
                        <iconify-icon icon="solar:phone-outline" width="20" height="20"></iconify-icon>
                    </div>
                    <div class="detalles-info-grupo3">
                        <h3>Telefono</h3>
                        <p>(01) 348 8095 / 989 098 517 / 989 098 516</p>
                    </div>
                </div>

                <div class="detalles-grupo3">
                    <div class="circulo3">
                        <iconify-icon icon="solar:wallet-outline" width="20" height="20"></iconify-icon>
                    </div>
                    <div class="detalles-info-grupo3">
                        <h3>Precio promedio</h3>
                        <p>S/ 51</p>
                    </div>
                </div>

                <div class="detalles-grupo3">
                    <div class="circulo3">
                        <iconify-icon icon="ion:time-outline" width="20" height="20"></iconify-icon>
                    </div>
                    <div class="detalles-info-grupo3">
                        <h3>Horarios</h3>
                        <p>Martes a Sábado de 12 a 10 pm. Domingos de 12 a 5 pm.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="detalles-restaurant">
        <div class="det">
            <h2>Galería</h2>
            <hr>
        </div>

        <section class="platos">
            <div class="galery">
                <img src="../img/RESTAURANTES-PORTADAS/1.jpg" alt="1" />
                <img src="../img/RESTAURANTES-PORTADAS/2.webp" alt="2" />
                <img src="../img/RESTAURANTES-PORTADAS/3.webp" alt="3" />
                <img src="../img/RESTAURANTES-PORTADAS/4.webp" alt="4" />
                <img src="../img/RESTAURANTES-PORTADAS/5.jpg" alt="5" />
            </div>
        </section>
    </div>

    <div class="detalles-restaurant">
        <div class="det">
            <h2>Ubicación</h2>
            <hr>
        </div>

        <div class="detalles-grupo1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5725743360636!2d-76.94660902504697!3d-12.072902488165921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6e7aae95ffd%3A0xf82c6d20fec1a363!2sAv.%20la%20Fontana%201137%2C%20Lima%2015024!5e0!3m2!1ses!2spe!4v1698343652190!5m2!1ses!2spe"
                width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="detalles-restaurant">
        <div class="det">
            <h2>Reseñas</h2>
            <hr>
        </div>

        <section class="resena">
            <div class="card-valoracion">
                <h3>¡Cuéntanos tu experiencia!</h3>
                <form action="procesar_valoracion.php" method="post">
                    <div class="rating">                        
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5">★</label>
                        
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4">★</label>
                        
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3">★</label>                                            
                        
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2">★</label>

                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1">★</label>
                    </div>
                    <textarea id="comentario" name="comentario" rows="4" placeholder="Déjanos tu comentario..." required></textarea>
                    <br><br>
                    <!-- <input type="submit" value="Enviar Valoración" class="send-btn"> -->
                    <div class="btn-val">
                        <button type="submit" class="send-btn">
                            <span>Agregar comentario</span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-comentarios">
                <div class="coments">
                    <h2>NOMBRE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
                </div>
                <div class="coments">
                    <h2>NOMBRE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
                </div>
                <div class="coments">
                    <h2>NOMBRE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
                </div>
                <div class="coments">
                    <h2>NOMBRE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
                </div>
            </div>            
        </section>
        
    </div>

</main>
<?php include("pie2.php"); ?>