<?php include("templates/encabezado.php");?>
<?php include("templates/filtros.php");?>
            <div class="col-8">
                <div class="service">
                    <h4>SERVICIOS</h4>
                    <div class="serviceOptions">
                        <div class="seccion2">
                            <div class="circle3"><iconify-icon icon="ion:restaurant-outline" width="24" height="24"></iconify-icon></div>
                            <p>Restaurante</p>
                        </div>

                        <div class="seccion2">
                            <div class="circle4"><iconify-icon icon="map:beauty-salon" width="24" height="24"></iconify-icon></div>
                            <p>Salones de belleza</p>
                        </div>

                        <div class="seccion2">
                            <div class="circle5"><iconify-icon icon="iconoir:gym" width="24" height="24"></iconify-icon></div>
                            <p>Gimnasios</p>
                        </div>
                        <iconify-icon icon="icons8:right-round" style="color: #d99bff;" width="32" height="32"></iconify-icon>
                    </div>
                    <br>
                    <h4>Tenemos ### restaurante(s) disponible(s)</h4>   
                    
                    <div class="carta">
                        <img src="img/restaurante-nikko.webp" alt="nikko">

                        <div class="description">
                            <h2><a href="negocios/rest-nikko.php">Nikko - La Molina</a></h2>
                            <p>Pescados y mariscos | La Molina</p>
                            <span>
                                <iconify-icon icon="bx:map" style="color: black;" width="17" height="17"></iconify-icon>
                                <p>Av. la Fontana 1137</p>
                            </span>
                            <span>
                                <iconify-icon icon="solar:map-outline" style="color: #4d49f5;" width="17" height="17"></iconify-icon>
                                <a href="negocios/rest-nikko.php">Ver mapa</a>
                            </span>
                            <div class="horas">
                                <p>12:30 PM</p>
                                <p>10:30 PM</p>
                            </div>
                        </div>

                        <div class="valoracion">
                            <div class="puntaje">
                                <p>4.8</p>
                                <iconify-icon icon="solar:star-bold-duotone" style="color: #f68326;" width="24" height="24"></iconify-icon>
                            </div>
                            <span class="visitas">
                                <iconify-icon icon="tabler:message" style="color: #73b2f1;" width="24" height="24"></iconify-icon>
                                <p>82 Reviews</p>                                
                            </span>
                            <p class="conPrecio">Precio promedio <br> por persona</p>
                            <p class="precio">S/. 51</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>

<?php include("templates/pie.php");?>