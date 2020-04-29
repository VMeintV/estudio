<?php
if (isset($_POST)) {
    $id = $_POST["id"];
    

    try {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

        $sqlRe = "SELECT * FROM Productos WHERE id_producto ='" .  $id . "'";

        $sen = $conexion_bd->query($sqlRe);

        while ($resultadoRe = $sen->fetch_assoc()) {
            $unidades = $resultadoRe["unidades"];
        }

        echo $unidades;


    } catch (Exception $e) {
        echo "Error";
    }



}
