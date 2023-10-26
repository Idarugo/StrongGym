<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/main.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/services.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/sidebar.css">
    <link rel="stylesheet" href="../../../assets/styles/components/sidebar.css">
    <title>Servicios</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Administrador de Servicios</h1>
            <table>
                <tr>
                    <th>Nombre del Servicio</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
                <tr>
                    <td>Clases de Yoga</td>
                    <td>Clases de yoga dos veces a la semana.</td>
                    <td>$50.00</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Entrenamiento Personalizado</td>
                    <td>Entrenamiento personalizado con un entrenador.</td>
                    <td>$80.00</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Clases de Zumba</td>
                    <td>Clases de Zumba tres veces a la semana.</td>
                    <td>$40.00</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
            </table>
            <!-- Button Agregar -->
            <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#agregar">
                Agregar Plan
            </button>

            <div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Plan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../../../routes/services.routes.php" method="POST" class="row g-3 justify-content-center was-validated" enctype="multipart/form-data">
                                <div class="col-md-10">
                                    <label for="inputNombreServicio" class="form-label">Nombre del Servicio</label>
                                    <input type="text" class="form-control" id="inputNombreServicio" name="txtNombreServicio" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputDescripcion" class="form-label">Descripción del Servicio</label>
                                    <textarea class="form-control" id="inputDescripcion" name="txtDescripcion" required></textarea>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputPrecio" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="inputPrecio" name="txtPrecio" required step="0.01">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Agregar" class="btn btn-primary btnAgregar" name="btnCrearServicio" id="btnForm">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../../assets/js/functions.js"></script>
    <script src="../../../assets/js/admin/sidebar.js"></script>
    <script src="../../../assets/js/admin/otros.js"></script>
    <script src="../../../assets/js/admin/buscar.js"></script>
</body>

</html>