<?php

$Nombre = "";
$Cargo = "";
$Correo = "";
$Contraseña = "";
$servidor = "localhost";
$basededatos = "registrar";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

$ejecutar=mysqli_query($conexion, $sql);
