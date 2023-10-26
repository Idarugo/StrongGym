<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/main.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/schedule.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/sidebar.css">
    <link rel="stylesheet" href="../../../assets/styles/components/sidebar.css">
    <title>Horario</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Administrador de Horario</h1>
            <table>
                <tr>
                    <th>Día de la Semana</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Finalización</th>
                    <th>Tipo de Clase</th>
                    <th>Opciones</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td>08:00 AM</td>
                    <td>09:00 AM</td>
                    <td>Yoga</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Miércoles</td>
                    <td>17:30 PM</td>
                    <td>18:30 PM</td>
                    <td>Pilates</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>19:00 PM</td>
                    <td>20:00 PM</td>
                    <td>Zumba</td>
                    <td>Editar | Bloquear | Eliminar</td>
                </tr>
            </table>

            <div class="modal fade" id="modificar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Horario</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../../../routes/schedule.routes.php" method="POST" class="row g-3 justify-content-center was-validated" enctype="multipart/form-data">
                                <div class="col-md-5">
                                    <label for="inputDiaSemana" class="form-label">Día de la Semana</label>
                                    <input type="text" class="form-control" id="inputDiaSemana" name="txtDiaSemana" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputHoraInicio" class="form-label">Hora de Inicio</label>
                                    <input type="time" class="form-control" id="inputHoraInicio" name="txtHoraInicio" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputHoraFinalizacion" class="form-label">Hora de Finalización</label>
                                    <input type="time" class="form-control" id="inputHoraFinalizacion" name="txtHoraFinalizacion" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputTipoClase" class="form-label">Tipo de Clase</label>
                                    <input type="text" class="form-control" id="inputTipoClase" name="txtTipoClase" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Modificar" class="btn btn-primary btnModificar" name="btnModificarHorario" id="btnForm">
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