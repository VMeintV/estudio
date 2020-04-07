<?php

require "conexion_db.php";
class IniciarSesion extends BD
{

    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerDatosEIniciarSesion($usuario, $contraseña)
    {

        try {
            $sql1 = "SELECT * FROM Usuarios WHERE usuario ='" . $usuario . "' AND contra = '" . $contraseña . "'";

            $sentencia1 = $this->conexion_bd->prepare($sql1);

            //$sentencia1->execute(array());
            $sentencia1->execute();
            //$resultado = $sentencia1->fetchAll(PDO::FETCH_ASSOC)

            $verificar = $sentencia1->rowCount();

            if ($verificar != 0) {
                session_start();

                $_SESSION["usuario"] = "$usuario";

                header("Location: Vistas/perfil.php");
            } else {
                echo "Error";
            }

            $sentencia1->closeCursor();
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }

    public function CerrarSesion()
    {
        session_start();

        session_destroy();
    }
}
