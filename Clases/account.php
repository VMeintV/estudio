<?php

require "conexion_db.php";

class CrearCuenta extends BD
{

    public function __construct()
    {
        parent::__construct();
    }


    public function ingresarDatosYCrearCuenta($usuario, $edad, $correo, $nombre, $codigo, $contra)
    {

        try {
            $sql = "INSERT INTO Usuarios (usuario, edad, correo, nombre, codigo, contra ,deposito )
            VALUES ('$usuario','$edad', '$correo', '$nombre', '$codigo', '$contra', '0')";

            $sentencia = $this->conexion_bd->prepare($sql);

            $sentencia->execute();

            $sentencia->closeCursor();
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }
}

