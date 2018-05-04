<?php

$servidor = 'localhost';
$baseDatos = 'takuchos';
$usuarioBd = 'root';
$passwordBd = '';

$conexion = mysqli_connect($servidor,$usuarioBd,$passwordBd,$baseDatos) or trigger_error(mysqli_error(),E_USER_ERROR);

mysqli_select_db($conexion,$baseDatos);
?>