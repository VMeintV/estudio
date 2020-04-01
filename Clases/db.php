<?php

$servidor = "localhost";
$usuario = "Meint"; //Aquí va root para ti querida; a menos que le hayas cambiado o te hayas creado un usuario
$contraseña = "XC7jlFQSGZAsrEhm"; //Si tu usuario es root tu contraseña debería ser "", vacío, a menos de que la hayas cambiado
//Esto es después:
$db = "TiendaMeint";//Esto va despues de que crees la base de datos con $sql

$conexion = new mysqli($servidor, $usuario, $contraseña, $db);


if ($contraseña === false) {
    die("conexión fallida " . $conexion->connect_errno);
}

//Crear Base de Datos
/*
$sql = "CREATE DATABASE  TiendaMeint";

if($conexion->query($sql) === true){
echo "Base de datos creada correctamente";
} else {
    die("Error " . $conexion->error);
}
*/

//Crear Tabla de Usuarios
/*
$sql1 = "CREATE TABLE Usuarios(
    id_cliente INT (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR (12) NOT NULL,
    edad INT(2) NOT NULL,
    correo VARCHAR (30) NOT NULL,
    nombre VARCHAR (25) NOT NULL,
    codigo INT (10) NOT NULL,
    contra VARCHAR (20) NOT NULL,
    deposito INT (6)
    )"; //No pude poner contraseña porque marca error :O


if ($conexion->query($sql1) === true) {
    echo "Tabla creada correctamente";
} else {    
    die("Error " . $conexion->error);
}
*/

//Crear tabla de productos

$sql2 = "CREATE TABLE Productos(

)";