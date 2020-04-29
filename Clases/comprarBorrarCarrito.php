<?php

if (isset($_POST)) {

    session_start();
    $total = $_POST["total"];
    ComprarTodo($total);
}

class ComprarCarrito
{

    public function Comprobar($total2)
    {
        try {
            $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

            $sqlD = "SELECT * FROM Usuarios WHERE usuario ='" .  $_SESSION["usuario"] . "'";

            $sentencia1 = $conexion_bd->query($sqlD);

            while ($resultado = $sentencia1->fetch_assoc()) {
                $dinero = $resultado["deposito"];
            }

            if ($dinero >= $total2) {
                for ($i = 1; $i >= 1 && $i <= 38; $i++) {
                    setcookie($i, "0", time() + +2592000, "/tiendaMeint", "localhost");
                }
                return $dinero;
            } else {
                $respuesta = "0";
                return $respuesta;
            }
        } catch (Exception $e) {
            $respuesta = "0";
            return $respuesta;
        }
    }

    public function RevisarCantidad()
    {
        try {
            function comprobar1()
            {
                $respuesta = "1";
                for ($ia = 1; $ia >= 1 && $ia <= 38; $ia++) {

                    if ($_COOKIE["$ia"] >= 1) {
                        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                        $unidadesCa = $_COOKIE["$ia"];

                        $sqlCa = "SELECT * FROM Productos WHERE id_producto ='" .  $ia . "'";

                        $sentenciaCa = $conexion_bd->query($sqlCa);

                        while ($resultadoCa = $sentenciaCa->fetch_assoc()) {
                            $cantidadCa = $resultadoCa["unidades"];
                        }

                        if ($unidadesCa > $cantidadCa) {
                            setcookie($ia, $cantidadCa, time() + +2592000, "/tiendaMeint", "localhost");
                            $respuesta = "3";
                        } else {
                            setcookie($ia, $unidadesCa, time() + +2592000, "/tiendaMeint", "localhost");
                        }
                    }
                }
                return $respuesta;
            }
            $respuesta = comprobar1();

            return $respuesta;
        } catch (Exception $e) {
            $respuesta = "2";
            return $respuesta;
        }
    }


    public function AñadirAPedidos($respuesta1, $totalP, $respuesta2)
    {
        if (!$respuesta1 == "0") {
            if (!$respuesta2 == "3") {
                try {
                    $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                    $usuario = $_SESSION["usuario"];
                    $id = $_SESSION["id"];

                    $liquidado = $respuesta1 - $totalP;

                    for ($i = 1; $i >= 1 && $i <= 38; $i++) {
                        if ($_COOKIE["$i"] >= 1) {

                            $unidades = $_COOKIE["$i"];

                            $sqlD = "INSERT INTO Pedidos (cliente, id_articulo, unidades) VAlUES 
                    ('$usuario', '$i', '$unidades')";

                            $sentencia1 = $conexion_bd->query($sqlD);
                        }
                    }
                } catch (Exception $e) {
                    $respuesta = "2";
                    return $respuesta;
                }


                try {

                    $sqlPA = "UPDATE Usuarios SET deposito = '" . $liquidado . "' WHERE id_cliente ='" . $id . "'";

                    $sentencia1 = $conexion_bd->query($sqlPA);
                } catch (Exception $e) {
                    $respuesta = "2";
                    return $respuesta;
                }

                try {
                    for ($iii = 1; $iii >= 1 && $iii <= 38; $iii++) {
                        if ($_COOKIE["$iii"] >= 1) {
                            $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                            $unidades1 = $_COOKIE["$iii"];

                            $sqlID = "SELECT * FROM Productos WHERE id_producto ='" .  $iii . "'";

                            $sentenciaID = $conexion_bd->query($sqlID);

                            while ($resultadoID = $sentenciaID->fetch_assoc()) {
                                $cantidad1 = $resultadoID["unidades"];
                            }

                            $totalQ = $cantidad1 - $unidades1;

                            try {

                                $sqlPA = "UPDATE Productos SET unidades = '" . $totalQ . "' WHERE id_producto ='" . $iii . "'";

                                $sentencia1 = $conexion_bd->query($sqlPA);
                            } catch (Exception $e) {
                                $respuesta = "2";
                                return $respuesta;
                            }
                        }
                    }
                    $respuesta = "1";
                    return $respuesta;
                } catch (Exception $e) {
                    $respuesta = "2";
                    return $respuesta;
                }
            } else {
                $respuesta = "3";
                return $respuesta;
            }
        } else {
            $respuesta = "0";
            return $respuesta;
        }
    }
}

function ComprarTodo($total1)
{

    $vender = new ComprarCarrito();

    $respuesta1 = $vender->Comprobar($total1);
    $respuesta2 = $vender->RevisarCantidad();
    $respuesta = $vender->AñadirAPedidos($respuesta1, $total1, $respuesta2);

    echo $respuesta;
}
