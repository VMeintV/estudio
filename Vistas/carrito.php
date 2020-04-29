<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php
    echo "<style>";
    include_once "../Estilos/estilos.css";
    echo "</style>";
    session_start();
    ?>

    <title>Carrito</title>

</head>

<body class="carrito">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php

    /*
    foreach ($_COOKIE as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);

        echo "$name : $value <br>";
    }
    //*/

    for ($i = 1; $i <= 38; $i++) {
        if (!isset($_COOKIE["$i"])) {
            require "../Clases/carrito_cookie_db.php";
        }
    }

    ?>

    <script lenguauge="Javascript">
        function borrarCarrito(comp) {

            let name = comp.name;

            var objeto = new XMLHttpRequest();

            var saltar = document.getElementById("dinero").innerHTML;
            var saltar0 = saltar.slice(1);
            var saltar1 = parseInt(saltar0);

            console.log(saltar1);

            objeto.open("POST", "../Clases/quitar_carrito.php", true);
            objeto.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            objeto.onreadystatechange = function Borrar() {
                $("#" + name).remove();
                var restando = saltar1 - objeto.responseText;
                document.getElementById("dinero").innerHTML = "$" + restando;
            }
            objeto.send("name" + "=" + name);

        }
    </script>

    <div class="container">

        <header>
            <div class="row" style="margin-top: 50px">
                <?php

                if (isset($_SESSION["usuario"])) {
                ?>
                    <div class="col-6 d-flex justify-content-start">
                        <button type="button" id="regresarT" class="btn btn-dark">Regresar a la tienda</button>
                    </div>

                    <div class="col-6 d-flex justify-content-end">
                        <button type="button" id="regresarP" class="btn btn-primary">Ir al perfil</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </header>


        <div class="row justify-content-center" style="margin-top: 50px">
            <h1>Tu carrito</h1>
        </div>


        <?php

        $totalDinero = 0;


        echo "<table class='table'>";

        require "../Clases/carrito_tabla.php";

        $enviar = new Datos();

        echo "<tr id='titulos'>";
        echo "<th>Nombre del artículo</th>
        <th>Características del producto</th> 
        <th>Precio Total</th>
        <th></th>";
        echo "</tr>";
        for ($i = 1; $i <= 38; $i++) {
            if (is_numeric($_COOKIE["$i"])) {
                if ($_COOKIE["$i"] >= 1) {
                    $cantidad = $_COOKIE["$i"];

                    if ($i >= 1 && $i <= 14) {
                        $cantidad = $enviar->ObtenerDatosJuegos($i, $cantidad);
                        $totalDinero = $totalDinero + $cantidad;
                    }
                    if ($i >= 15 && $i <= 20) {
                        $cantidad = $enviar->ObtenerDatosFiguras($i, $cantidad);
                        $totalDinero = $totalDinero + $cantidad;
                    }
                    if ($i >= 21 && $i <= 38) {
                        $cantidad = $enviar->ObtenerDatosPlayeras($i, $cantidad);
                        $totalDinero = $totalDinero + $cantidad;
                    }
                }
            }
        }


        echo "<tr><th></th>
        <th></th> 
        <th>Total</th><th></th></tr>";
        echo "<tr>";
        echo "<td></td> <td></td>";
        echo "<td id='dinero'>$" . $totalDinero . "</td>";
        echo "<td></td></tr>";

        echo "</table>";



        if (isset($_SESSION["usuario"])) {

        ?>



            <div class="row justify-content-center" style="margin-top: 150px">
                <h6 id="explicacion">Tu cuenta cuenta con un credito de:</h6>
            </div>

            <div class="row justify-content-center" style="margin-top: 10px">
                <div class="col-3">
                    <?php

                    try {
                        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                        $sqlD = "SELECT * FROM Usuarios WHERE usuario ='" .  $_SESSION["usuario"] . "'";

                        $sentencia1 = $conexion_bd->query($sqlD);

                        while ($resultado = $sentencia1->fetch_assoc()) {
                            echo "<input type='number' value= '" . $resultado["deposito"] . "'' disabled id='deposito' class='form-control'>";
                        }
                    } catch (Exception $e) {
                        echo "Error: " . $e->getLine();
                    }


                    ?>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="row">
                    <div class="col">
                        <button style="width: 140px;" type="button" onclick="borrarCarrito2()" class="btn btn-danger">Vaciar carrito</button>
                    </div>
                    <div class="col">
                        <button style="width: 140px;" type="button" onclick="comprarCarrito()" class="btn btn-success">Comprar carrito</button>
                    </div>
                </div>
            </div>

            <script lenguauge="Javascript">
                function borrarCarrito2() {

                    var total = document.getElementById("dinero").innerHTML;
                    var total0 = total.slice(1);
                    var total1 = parseInt(total0);

                    if (total1 > 0) {
                        for (name = 1; name >= 1 && name <= 38; name++) {
                            $("#" + name).remove();

                            var objeto1 = new XMLHttpRequest();

                            objeto1.open("POST", "../Clases/quitar_carrito.php", true);
                            objeto1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                            objeto1.onreadystatechange = function Borrar() {
                                document.getElementById("dinero").innerHTML = "$0";
                            }
                            objeto1.send("name" + "=" + name);
                        }
                    }
                }
            </script>


            <script lenguauge="Javascript">
                function comprarCarrito() {

                    var total = document.getElementById("dinero").innerHTML;
                    var total0 = total.slice(1);
                    var total1 = parseInt(total0);


                    var deposito0 = $("#deposito").val();
                    var deposito = parseInt(deposito0);

                    var objeto2 = new XMLHttpRequest();

                    objeto2.open("POST", "../Clases/comprarBorrarCarrito.php", true);

                    objeto2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    objeto2.onreadystatechange = function Borrar() {

                        var comprobar = objeto2.responseText;

                        var cero = "0";
                        var uno = "1";
                        var dos = "2"
                        var tres = "3";

                        if (comprobar == uno) {

                            if (total1 > 0) {
                                var deposito1 = deposito - total1;
                                for (i = 1; i >= 1 && i <= 38; i++) {
                                    $("#" + i).remove();
                                }
                                document.getElementById("dinero").innerHTML = "$0";
                                $("#deposito").val(deposito1);

                                swal({
                                    title: "¡Tu compra se realizo exitosamente!",
                                    icon: "success",
                                    button: "Aceptar",
                                });
                            }


                        } else if (comprobar == cero) {
                            document.getElementById("dinero").innerHTML = "$" + total1;

                            swal({
                                title: "Error: No se ha podido relizar la comprar",
                                text: "Deposito insuficiente",
                                icon: "error",
                                button: "Aceptar",
                            });

                        } else if (comprobar == tres) {

                            swal({
                                title: "Error: Artículo ",
                                text: "Hay algunos artículos que no estan disponibles o se cambio la cantidad de ellos",
                                icon: "error",
                                button: "Aceptar",
                            });

                            setTimeout("location.href='carrito.php'", 4000);
                        }

                    }

                    objeto2.send("total" + "=" + total1);

                }
            </script>
        <?php
        } else {
        ?>
            <div class="row justify-content-center" style="margin-top: 200px;">
                <h6 id="explicacion">Debes de iniciar Sesión para poder realizar tu compra</h6>
            </div>
            <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
                <button type="button" id="regresarT" class="btn btn-dark">Regresar a la tienda</button>
            </div>

        <?php
        }
        ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../acciones5.js"></script>

</body>

</html>