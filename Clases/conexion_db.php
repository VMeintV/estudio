<?php


class BD
{
    private $servidor;
    private $usuario;
    private $contraseña;
    private $bd;

    protected $conexion_bd;

    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "Meint";
        $this->contraseña = "XC7jlFQSGZAsrEhm";
        $this->bd = "TiendaMeint";

        try {
            $this->conexion_bd = new PDO("mysql:host=$this->servidor; dbname=$this->bd", "$this->usuario", "$this->contraseña");
            $this->conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_bd->exec("SET CHARACTER SET utf8");
            return $this->conexion_bd;
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }
}
