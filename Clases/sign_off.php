<?php
if (isset($_POST)) {
    session_start();
    if(isset($_SESSION["id"])){
        $id0 = $_SESSION["id"];
        global $id0;
    }

    $miArray = array();

    for ($i = 1; $i <= 38; $i++) {
        if (!isset($_COOKIE["$i"])) {
            setcookie($i, "0", time() + 2592000, "/tiendaMeint", "localhost");
        }
    }

    for ($ii = 1; $ii >= 1 && $ii <= 38; $ii++) {
        $miArray["$ii"] = $_COOKIE["$ii"];
    }

    $json = json_encode($miArray);
    global $json;

    function Verfificar()
    {
        try {
            $id0 = $GLOBALS['id0'];
            $json = $GLOBALS['json'];
            $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

            $sqlCa = "INSERT INTO Carrito (id_cliente, carrito) VALUES ('$id0', '$json') ";

            $conectado = $conexion_bd->query($sqlCa);

            echo "1";
        } catch (Exception $e) {
            echo "Error";
        }
    }

    function Verfificar1()
    {
        try {
            $id0 = $GLOBALS['id0'];
            $json = $GLOBALS['json'];
            $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

            $sqlCAU = "UPDATE Carrito SET carrito= '" . $json . "' WHERE id_cliente='" .  $id0 . "'";

            $conectado = $conexion_bd->query($sqlCAU);

            echo "1";
        } catch (Exception $e) {
            echo "Error";
        }
    }

    function Revisar()
    {
        try {
            $id0 = $GLOBALS['id0'];
            $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

            $sqlCaR = "SELECT * FROM Carrito WHERE id_cliente='" . $id0 . "' ";

            $sentenciaCaR = $conexion_bd->query($sqlCaR);

            while ($resultadoCaR = $sentenciaCaR->fetch_assoc()) {
                $idO = $resultadoCaR["id_cliente"];
            }
            if (!isset($idO)) {
                Verfificar();
            } else if (isset($idO)) {
                Verfificar1();
            }
        } catch (Exception $e) {
            echo "Error";
        }
    }

    Revisar();

    for ($i = 1; $i <= 38; $i++) {
        setcookie($i, "0", time() + +2592000, "/tiendaMeint", "localhost");
    }


    session_destroy();
}