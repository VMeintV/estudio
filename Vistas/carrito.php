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
    ?>

    <title>Carrito</title>

</head>

<body class="carrito">

    <div class="container">

        <header>
            <div class="row" style="margin-top: 50px">
                <?php
                session_start();


                if (isset($_SESSION["usuario"])) {
                ?>
                    <div class="col-6 d-flex justify-content-start">
                        <button type="button" id="regresarT" class="btn btn-ligth">Regresar a la tienda</button>
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

        for ($i = 1; $i <= 38; $i++) {
            if (!isset($_COOKIE["$i"])) {
                setcookie($i, "0", time() + 2592000);
            }
        }

        echo "<table class='table'>";

        for ($i = 1; $i <= 38; $i++) {
            if (is_numeric($_COOKIE["$i"])) {
                if($_COOKIE["$i"] >= 1){
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $_COOKIE["$i"] . "</td>";
                    echo "</tr>";
                }
            }
        }

        echo "</table>";






        if (isset($_SESSION["usuario"])) {

        ?>
            <div class="row justify-content-center" style="margin-top: 150px">
                <div class="col-3">
                    <input type="number" disabled name="desposito" class="form-control">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 100px">
                <form method="POST">
                    <div class="row">
                        <div class="col">
                            <button style="width: 140px;" type="button" name="vaciarC" class="btn btn-danger">Vaciar carrito</button>
                        </div>
                        <div class="col">
                            <button style="width: 140px;" type="button" name="comprarC" class="btn btn-success">Comprar carrito</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php
        } else {
        ?>
            <div class="row justify-content-center" style="margin-top: 200px;">
                <h6>Debes de iniciar Sesión para poder realizar tu compra</h6>
            </div>
            <div class="row justify-content-center" style="margin-top: 50px;">
                <button type="button" id="regresarT" class="btn btn-ligth">Regresar a la tienda</button>
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
    <script src="../acciones1.js"></script>

</body>

</html>