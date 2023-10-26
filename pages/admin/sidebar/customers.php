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
    <title>Clientes</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Administrador de Clientes</h1>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Fecha de Registro</th>
                    <th>Plan Activo</th>
                    <th>Saldo Pendiente</th>
                    <th>Opciones</th>
                </tr>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>johndoe@email.com</td>
                    <td>123-456-7890</td>
                    <td>2023-10-15</td>
                    <td>Mensual</td>
                    <td>$20.00</td>
                    <td>Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Alice</td>
                    <td>Smith</td>
                    <td>alice@email.com</td>
                    <td>987-654-3210</td>
                    <td>2023-09-20</td>
                    <td>Anual</td>
                    <td>$0.00</td>
                    <td>Bloquear | Eliminar</td>
                </tr>
                <tr>
                    <td>Bob</td>
                    <td>Johnson</td>
                    <td>bob@email.com</td>
                    <td>555-123-4567</td>
                    <td>2023-10-05</td>
                    <td>Trimestral</td>
                    <td>$10.50</td>
                    <td>Bloquear | Eliminar</td>
                </tr>
            </table>

            <!-- Button Agregar -->
            <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#agregar">
                Agregar Cliente
            </button>

            <div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../../../routes/customers.routes.php" method="POST" class="row g-3 justify-content-center was-validated" enctype="multipart/form-data">
                                <div class="col-md-5">
                                    <label for="inputRUT" class="form-label">RUT (Identificación única)</label>
                                    <input type="text" class="form-control" id="inputRUT" name="txtRUT" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputNombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="inputNombre" name="txtNombre" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputApellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="inputApellido" name="txtApellido" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="txtEmail" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputTelefono" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="inputTelefono" name="txtTelefono" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputFechaRegistro" class="form-label">Fecha de Registro</label>
                                    <input type="date" class="form-control" id="inputFechaRegistro" name="txtFechaRegistro" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputPlanActivo" class="form-label">Plan Activo</label>
                                    <select class="form-select" id="inputPlanActivo" name="selPlanActivo" required>
                                        <option value="Mensual">Mensual</option>
                                        <option value="Anual">Anual</option>
                                        <option value="Trimestral">Trimestral</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputSaldoPendiente" class="form-label">Saldo Pendiente</label>
                                    <input type="number" class="form-control" id="inputSaldoPendiente" name="txtSaldoPendiente" required step="0.01">
                                </div>
                                <div class="col-md-10">
                                    <label for="inputPassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="inputPassword" name="txtPassword" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <input type="submit" value="Agregar" class="btn btn-primary btnAgregar" name="btnCrearCliente" id="btnForm">
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