<?php include("templates_admin/encabezado.php");?>
<?php include("templates_admin/perfil.php");?>
            <div class="col-8">
                <div class="negocios">
                    <div class="description-neg">
                        <form action="form.php" method="post">
                            <h1>Añadir negocios</h1>
                            <div class="form-neg">
                                <label for="RUC">RUC del negocio</label>
                                <input type="text" name="RUC" class="neg-control" placeholder="Ingrese el RUC del negocio" required>
                            </div>
                            <div class="form-neg">
                                <label for="nombres">Nombre del negocio</label>
                                <input type="text" name="nombres" class="neg-control" placeholder="Ingrese el nombre del negocio" required>
                            </div>
                            <div class="form-neg">
                                <label for="descripcion-esp">Descripción específica</label>
                                <input type="text" name="descripcion-esp" class="neg-control" placeholder="Ingrese una pequeña descripción" required>
                            </div>
                            <div class="form-neg">
                                <label for="descripcion-det">Descripción detallada</label>
                                <textarea name="descripcion-det" id="textarea" class="neg-control" cols="30" rows="10" required placeholder="Ingrese una descripción más detallada"></textarea>
                            </div>
                            <div class="form-neg">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" class="neg-control" placeholder="Ingrese la dirección" required>
                            </div>
                            <div class="form-neg">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" class="neg-control" placeholder="Ingrese el teléfono del negocio" required>
                            </div>
                            <div class="form-neg">
                                <label for="precio">Precio promedio</label>
                                <input type="number" name="precio" class="neg-control" placeholder="Ingrese el precio promedio" required>
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen de carta</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen de portada</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen del negocio</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen de los detalles</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen 1 de galería</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen 2 de galería</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen 3 de galería</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen 4 de galería</label>
                                <input type="file" accept="image/*">
                            </div>

                            <div class="neg-img">
                                <label for="img">Insertar imagen 5 de galería</label>
                                <input type="file" accept="image/*">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>
<?php include("templates_admin/pie.php");?>