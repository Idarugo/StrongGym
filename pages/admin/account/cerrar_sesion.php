<?php
session_start();
unset($_SESSION['trab']);
$_SESSION['Msj'] = "CerrarSesion";
header("Location: /../StrongGym/index.php");
exit;
