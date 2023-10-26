<?php
session_start();
unset($_SESSION['usua']);
$_SESSION['Msj'] = "CerrarSesion";
header("Location: /../Veterinaria/index.php");
exit;
