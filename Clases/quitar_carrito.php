<?php

if (isset($_POST)) {
    $name = $_POST["name"];
    ejecutar($name);
}

class QuitarCookies
{

    public function BorrarCookies($cookie)
    {
        setcookie($cookie, "0", time() + +2592000, "/tiendaMeint", "localhost");
    }

    public function ObtenerDatos($cookie)
    {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");
        try {
            $sqlQ = "SELECT * FROM Productos WHERE id_producto = '$cookie'";

            $sentencia4 = $conexion_bd->query($sqlQ);

            while ($resultado = $sentencia4->fetch_assoc()) {
                $cantidad2 =  $resultado["precio"];
                return $cantidad2;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }
    public function NumeroDeCookie($valor)
    {
        $numero = $_COOKIE["$valor"];
        return $numero;
    }
}

function ejecutar($name)
{
    $quitarCookies = new QuitarCookies();

    $restar = $quitarCookies->ObtenerDatos($name);

    $numero = $quitarCookies->NumeroDeCookie($name);

    $quitarCookies->BorrarCookies($name);

    $restar1 = $numero * $restar;

    echo $restar1;
}
