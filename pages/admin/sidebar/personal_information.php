<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../../components/head.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/main.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/personal_information.css">
    <link rel="stylesheet" href="../../../assets/styles/pages/admin/sidebar/sidebar.css">
    <link rel="stylesheet" href="../../../assets/styles/components/sidebar.css">
    <title>Información personal</title>
</head>

<body>
    <?php include "../../../components/sidebar.php" ?>
    <main>
        <div class="container">
            <h1>Informacion Personal</h1>
            <form action="../../../routes/worker.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
                <h4 class="col-md-10">Información básica</h4>

                <div class="col-md-10">
                    <label for="inputName" class="form-label">Rut</label>
                    <input type="text" name="txt_rut" id="rut" class="form-control" value="">
                </div>
                <div class="col-md-5">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="name" class="form-control" id="inputName" name="txt_nombre" value="">
                </div>
                <div class="col-md-5">
                    <label for="inputName" class="form-label">Apellido</label>
                    <input type="name" class="form-control" id="inputName" name="txt_apellido" value="">
                </div>
                <h4 class="col-md-10">Información de contacto</h4>
                <div class="col-md-10">
                    <label for="inputName" class="form-label">Correo</label>
                    <input type="name" class="form-control" id="inputName" name="txt_correo" value="">
                </div>

                <div class="col-md-10">
                    <label for="inputName" class="form-label">Desea Cambiar la Contraseña?</label>
                    <input class="form-check-input" type="radio" name="change_pass" id="change_pass1" value="1"><label for="change_pass1">Si</label>
                    <input class="form-check-input" type="radio" name="change_pass" id="change_pass2" value="2" checked><label for="change_pass2">No</label>
                </div>

                <div id="change_pass_container" class="col-md-10 mb-3" style="display: none;">
                    <label for="inputName" class="form-label">Contraseña</label>
                    <input type="password" name="txt_password" class="form-control" autocomplete="off" placeholder="Inserte su Nueva Contraseña Aqui">
                </div>
                <!-- Se agregó el botón de Guardar aquí -->
                <div class="modal-footer">
                    <input type="submit" value="Guardar" class="btn btn-primary btnAgregar" name="btn_confirm" id="btnForm">
                </div>
            </form>
        </div>
    </main>
    <script src="../../../assets/js/functions.js"></script>
    <script src="../../../assets/js/admin/sidebar.js"></script>
    <script src="../../../assets/js/admin/buscar.js"></script>
    <script src="../../../assets/js/admin/valida_rut.js"></script>
    <script src="../../../assets/js/admin/sing-up.js"></script>

</body>

</html>