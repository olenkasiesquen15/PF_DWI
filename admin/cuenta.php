<?php include("templates_admin/encabezado.php"); ?>
<?php include("templates_admin/perfil.php"); ?>
    <div class="col-8">
        <div class="datos-personales">
            <div class="description">
                <form action="form.php" method="post">
                    <h1>Datos personales</h1>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" class="form-control" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" placeholder="Ingrese sus apellidos"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo electrónico"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="documento">Documento de identidad</label>
                        <input type="text" name="documento" class="form-control"
                            placeholder="Ingrese su documento de identidad" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" class="form-control" placeholder="Ingrese su celular" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar perfil</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
</main>
<?php include("templates_admin/pie.php"); ?>