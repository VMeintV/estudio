<?php

$servidor = "localhost";
$usuario = "Meint"; //Aquí va root para ti querida; a menos que lo hayas cambiado o te hayas creado un usuario
$contraseña = "XC7jlFQSGZAsrEhm"; //Si tu usuario es root tu contraseña debería ser "", vacío, a menos de que la hayas cambiado
//Esto es después:
$db = "TiendaMeint"; //Esto va despues de que crees la base de datos con $sql

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
    //El error es porque no se puede escribir la ñ


if ($conexion->query($sql1) === true) {
    echo "Tabla creada correctamente";
} else {    
    die("Error " . $conexion->error);
}

$sql0 = "ALTER TABLE Usuarios DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

if ($conexion->query($sql0) === true) {
    echo "Cotejamiento cambiado exitosamente";
} else {    
    die("Error " . $conexion->error);
}

*/

//Crear tabla de productos
/*
$sql2 = "CREATE TABLE Productos(
    id_producto INT (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_articulo VARCHAR (20) NOT NULL,
    plataforma VARCHAR (20),
    tamano VARCHAR (10),
    tipo_manga VARCHAR (10),
    unidades INT (10) NOT NULL,
    precio INT (10) NOT NULL 
)";

if ($conexion->query($sql2) === true) {
    echo "Tabla creada correctamente";
} else {    
    die("Error " . $conexion->error);
}

$sql3 = "ALTER TABLE Productos DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

if ($conexion->query($sql3) === true) {
    echo "Cotejamiento cambiado exitosamente";
} else {    
    die("Error " . $conexion->error);
}

*/

//Juegos
/*
$sqlj = "INSERT INTO Productos (nombre_articulo, plataforma, unidades, precio) 
        VALUES ('TLOU2', 'PS4', '50', '1200'),
        ('RE3 Remake', 'Xbox One', '50', '1200'),
        ('RE3 Remake', 'PS4', '50', '1200'),
        ('RE3 Remake', 'PC Windows', '50', '1200'),
        ('FF VII Remake', 'PS4', '50', '1200'),
        ('FS 2020', 'Xbox One', '50', '1200'),
        ('FS 2020', 'PC Windows', '50', '1200'),
        ('Minecraft Dungeons', 'Nintendo Switch', '50', '1200'),
        ('Minecraft Dungeons', 'PS4', '50', '1200'),
        ('Minecraft Dungeons', 'Xbox One', '50', '1200'),
        ('Minecraft Dungeons', 'PC Windows y macOS', '50', '1200'),
        ('Halo Infinite', 'Xbox One', '50', '1200'),
        ('Halo Infinite', 'Xbox Series X', '50', '1200'),
        ('Halo Infinite', 'PC Windows', '50', '1200')";

if ($conexion->query($sqlj) === true) {
    echo "Datos introducidos correctamente";
} else {
    die("Error " . $conexion->error);
}

*/

//Figuras

/*

$sqlf = "INSERT INTO Productos (nombre_articulo, tamano, unidades, precio)
        VALUES ('Figura Cloud Strife', 'Estandar', '10', '1600'),
        ('Figura Cloud Strife', 'Pequena', '10', '1400'),
        ('Figura Barret Wallace', 'Estandar', '30', '1400'),
        ('Figura Barret Wallace', 'Pequena', '30', '1200'),
        ('Figura WidowMaker', 'Estandar', '15', '1500'),
        ('Figura WidowMaker', 'Pequena', '15', '1300')";

if ($conexion->query($sqlf) === true) {
    echo "Datos introducidos correctamente";
} else {
    die("Error " . $conexion->error);
}

*/


//Playeras 

/*
$sqlp = "INSERT INTO Productos (nombre_articulo, tamano, tipo_manga, unidades, precio)
        VALUES ('Playera COD:MW3', 'S', 'L', '50', '500'),
        ('Playera COD:MW3', 'S', 'C', '50', '500'),
        ('Playera COD:MW3', 'M', 'L', '50', '500'),
        ('Playera COD:MW3', 'M', 'C', '50', '500'),
        ('Playera COD:MW3', 'X', 'L', '50', '500'),
        ('Playera COD:MW3', 'X', 'C', '50', '500'),
        ('Playera Overwatch', 'S', 'L', '50', '600'),
        ('Playera Overwatch', 'S', 'C', '50', '600'),
        ('Playera Overwatch', 'M', 'L', '50', '600'),
        ('Playera Overwatch', 'M', 'C', '50', '600'),
        ('Playera Overwatch', 'X', 'L', '50', '600'),
        ('Playera Overwatch', 'X', 'C', '50', '600'),
        ('Playera MK', 'S', 'L', '50', '550'),
        ('Playera MK', 'S', 'C', '50', '550'),
        ('Playera MK', 'M', 'L', '50', '550'),
        ('Playera MK', 'M', 'C', '50', '550'),
        ('Playera MK', 'X', 'L', '50', '550'),
        ('Playera MK', 'X', 'C', '50', '550')";

if ($conexion->query($sqlp) === true) {
    echo "Datos introducidos correctamente";
} else {
    die("Error " . $conexion->error);
}
*/
