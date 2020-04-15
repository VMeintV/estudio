<?php

require "conexion_db.php";


class Datos
{


    public function ObtenerDatosJuegos($cookie, $cantidad)
    {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");
        try {
            $sqlTJ = "SELECT * FROM Productos WHERE id_producto = '$cookie'";

            $sentencia1 = $conexion_bd->query($sqlTJ);

            while ($resultado = $sentencia1->fetch_assoc()) {
                if ($resultado["unidades"] >= $cantidad) {
                    $cantidad1 = $cantidad * $resultado["precio"];
                    echo "<td>" . $resultado["nombre_articulo"] . "</td>" . "<td>" . $resultado["plataforma"] . "</td>"
                        . "<td>$" . $cantidad1 . "</td>" . "<td>
                        <button type='submit' name='" . $cookie . "' class='close'  aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button></td>";
                    return $cantidad1;
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }


    public function ObtenerDatosFiguras($cookie, $cantidad)
    {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");
        try {
            $sqlTF = "SELECT * FROM Productos WHERE id_producto ='" . $cookie . "'";

            $sentencia1 = $conexion_bd->query($sqlTF);

            while ($resultado = $sentencia1->fetch_assoc()) {
                if ($resultado["unidades"] >= $cantidad) {
                    $cantidad1 = $cantidad * $resultado["precio"];
                    echo "<td>" . $resultado["nombre_articulo"] . "</td>" . "<td>" . $resultado["tamano"] . "</td>"
                        . "<td>$" . $cantidad1 . "</td>" . "<td>
                        <button type='submit' name='" . $cookie . "' class='close'  aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button></td>";
                    return $cantidad1;
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }


    public function ObtenerDatosPlayeras($cookie, $cantidad)
    {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");
        try {
            $sqlTP = "SELECT * FROM Productos WHERE id_producto ='" . $cookie . "'";

            $sentencia1 = $conexion_bd->query($sqlTP);

            while ($resultado = $sentencia1->fetch_assoc()) {
                if ($resultado["unidades"] >= $cantidad) {
                    $cantidad1 = $cantidad * $resultado["precio"];
                    if ($resultado["tipo_manga"] == "L") {
                        $resultado["tipo_manga"] = "Manga larga";
                    }
                    if ($resultado["tipo_manga"] == "C") {
                        $resultado["tipo_manga"] = "Manga corta";
                    }
                    echo "<td>" . $resultado["nombre_articulo"] . "</td>" . "<td>" . $resultado["tamano"] . " - " .
                        $resultado["tipo_manga"] . "</td>" . "<td>$" . $cantidad1 . "</td>" . "<td>
                        <button type='submit' name='" . $cookie . "' class='close'  aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button></td>";
                    return $cantidad1;
                }
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }
    }
}
