<?php include("templates_admin/encabezado.php");?>
<?php include("templates_admin/perfil.php");?>
            <div class="col-8">
                <div class="lista-neg">
                    <div class="description-lista">
                        <h1>Lista de los negocios</h1>
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>RUC</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nombre de ejemplo</td>
                                    <td>Descripción de ejemplo</td>
                                    <td>Dirección de ejemplo</td>
                                    <td>Teléfono de ejemplo</td>
                                    <td>RUC de ejemplo</td>
                                    <td>
                                        <button class="edit-btn">Editar</button>
                                        <button class="delete-btn">Eliminar</button>
                                    </td>
                                </tr>
                                <!-- Puedes añadir más filas con información -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>
<?php include("templates_admin/pie.php");?>