<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/main.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/routines.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/sidebar.css">
    <link rel="stylesheet" href="../../../assets/styles/components/sidebar.css">
    <title>Rutinas</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Administrador de Rutinas</h1>
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Duracion</td>
                    <td>Precio</td>
                    <td>Descripcion</td>
                    <td>Opciones</td>
                </tr>
                <tr>
                    <td>Mensual</td>
                    <td>30</td>
                    <td>30000</td>
                    <td>Plan de 30 dias</td>
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
                            <form action="../../../routes/plans.routes.php" method="POST" class="row g-3 justify-content-center was-validated" enctype="multipart/form-data">
                                <div class="col-md-10">
                                    <label for="inputName" class="form-label">Nombre del Plan</label>
                                    <input type="text" class="form-control" id="inputName" name="txtNombre" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputDuration" class="form-label">Duración (en días)</label>
                                    <input type="number" class="form-control" id="inputDuration" name="txtDuracion" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputPrice" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="inputPrice" name="txtPrecio" required step="0.01">
                                </div>
                                <div class="col-md-10">
                                    <label for="inputDescription" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="inputDescription" name="txtDescripcion" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Agregar" class="btn btn-primary btnAgregar" name="btnCrearPlan" id="btnForm">
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