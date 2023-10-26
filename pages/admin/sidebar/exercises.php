<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/main.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/customers.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/sidebar.css">
    <link rel="stylesheet" href="../../../assets/styles/components/sidebar.css">
    <title>Ejercicios</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Administrador de Ejercicios</h1>
            <table>
                <tr>
                    <th>Nombre del Ejercicio</th>
                    <th>Descripción</th>
                    <th>Series</th>
                    <th>Repeticiones</th>
                    <th>Instrucciones</th>
                    <th>Opciones</th>
                </tr>
                <tr>
                    <td>Lagartijas</td>
                    <td>Ejercicio para fortalecer el pecho y los tríceps.</td>
                    <td>3</td>
                    <td>15</td>
                    <td>Inhala al bajar, exhala al subir.</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Sentadillas</td>
                    <td>Ejercicio para fortalecer las piernas y los glúteos.</td>
                    <td>4</td>
                    <td>12</td>
                    <td>Mantén la espalda recta durante el movimiento.</td>
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
                            <form action="../../../routes/exercises.routes.php" method="POST" class="row g-3 justify-content-center was-validated" enctype="multipart/form-data">
                                <div class="col-md-10">
                                    <label for="inputNombreEjercicio" class="form-label">Nombre del Ejercicio</label>
                                    <input type="text" class="form-control" id="inputNombreEjercicio" name="txtNombreEjercicio" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputDescripcion" class="form-label">Descripción del Ejercicio</label>
                                    <textarea class="form-control" id="inputDescripcion" name="txtDescripcion" required></textarea>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputSeries" class="form-label">Número de Series</label>
                                    <input type="number" class="form-control" id="inputSeries" name="txtSeries" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputRepeticiones" class="form-label">Número de Repeticiones</label>
                                    <input type="number" class="form-control" id="inputRepeticiones" name="txtRepeticiones" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputInstrucciones" class="form-label">Instrucciones del Ejercicio</label>
                                    <textarea class="form-control" id="inputInstrucciones" name="txtInstrucciones" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Agregar" class="btn btn-primary btnAgregar" name="btnCrearEjercicio" id="btnForm">
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