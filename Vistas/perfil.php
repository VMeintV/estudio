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


    <title>Perfil</title>
</head>

<body>

    <script language="JavaScript">
        function redireccionar() {
            setTimeout("location.href='perfil.php'", 5000);
        }
    </script>


    <?php

    include_once "../Clases/login_db.php";

    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location: ../index.php");
    }
    ?>

    <div class="container" style="margin-top: 50px">


        <header>
            <div class="row">
                <div class="col-6 d-flex justify-content-start">
                    <button type="button" id="regresarPP" class="btn btn-danger">Salir del perfil</button>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="carrito.php"><img src="https://www.cscorporation.com.mx/cs/assets/img/home/carrito_de_compras_paso_1.png" width="30rem"></a>
                </div>
            </div>
        </header>

        <div class="row justify-content-center" style="margin-top: 50px">
            <h1>Bienvenido a tu perfil <?php echo $_SESSION["usuario"]; ?></h1>
        </div>


        <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 150px;">
            <div class="card" style="width: 22rem;">
                <img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" class="card-img-top img-responsive">
                <div class="card-body">
                    <h5 class="card-title"><?php   ?></h5>
                    <p class="card-text" name="descripcion">Datos</p>
                    <button type="submit" class="btn btn-info" name="editarPerfil">Editar perfil</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="abonado1">
            <h6>Tu cuenta cuenta con un credito de:</h6>
        </div>

        <div class="row justify-content-center" id="abonado" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col"></div>
            <?php

            MostrarDesposito();

            function MostrarDesposito()
            {
                try {
                    $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                    $sqlD = "SELECT * FROM Usuarios WHERE usuario ='" .  $_SESSION["usuario"] . "'";

                    $sentencia1 = $conexion_bd->query($sqlD);

                    while ($resultado = $sentencia1->fetch_assoc()) {
                        echo "<input type='number' style='width: 200px;' value= '" . $resultado["deposito"] . "'' disabled name='desposito' class='form-control'>";
                    }
                } catch (Exception $e) {
                    echo "Error: " . $e->getLine();
                }
            }

            ?>
            <div class="col"></div>
        </div>

        <div class="row justify-content-center" id="abonar1" style="margin-bottom: 50px;">
            <button type="button" class="btn btn-primary" id="abonar">Abonar</button>
        </div>


        <form method="POST" id="abono1">

            <div class="row justify-content-center">
                <h6>Introduce la cantidad que deseas abonar (Monto no mayor a $50,000.00):</h6>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 50px;">

                <div class="row justify-content-center" style="margin-top: 20px;">
                    <input type="number" style="width: 200px;" name="abono" class="form-control">
                </div>

            </div>

            <div class="row justify-content-center">
                <h6>Introduce tu código:</h6>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 50px;">

                <div class="row justify-content-center" style="margin-top: 20px;">
                    <input type="password" style="width: 200px;" name="codigo" class="form-control">
                </div>

            </div>

            <div class="row justify-content-center">
                <h6>Introduce tu contraseña:</h6>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 50px;">

                <div class="row justify-content-center" style="margin-top: 20px;">
                    <input type="password" style="width: 200px;" name="contraseña" class="form-control">
                </div>

            </div>

            <div class="row justify-content-center" style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success" name="aceptar">Aceptar</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>





        <?php

        if (isset($_POST["aceptar"])) {

            $codigo = $_POST["codigo"];
            $contraseña = $_POST["contraseña"];
            $monto = $_POST["abono"];

            if ($monto > 0 && $monto <= 50000) {
                try {
                    $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                    $sqlA = "SELECT * FROM Usuarios WHERE usuario ='" .  $_SESSION["usuario"] . "'AND codigo= '" . $codigo . "'
                    AND contra= '" . $contraseña . "'";

                    $sentencia2 = $conexion_bd->query($sqlA);

                    if ($sentencia2 == true) {

                        while ($resultado1 = $sentencia2->fetch_assoc()) {
                            $deposito = $resultado1["deposito"];
                            $id = $resultado1["id_cliente"];
                        }

                        $deposito = $deposito + $monto;

                        try {
                            $sqlD1 = "UPDATE Usuarios SET deposito='" . $deposito . "' WHERE id_cliente='" .  $id . "'";

                            $sentencia3 = $conexion_bd->query($sqlD1);

                            if ($sentencia3 == true) {
        ?>
                                <div class="row justify-content-center" id="depositado">
                                    <div class="alert alert-success" role="alert">
                                        Se a añadido correctamente tu deposito <br>
                                        Recargando pagina en 5 segundos
                                    </div>;
                                </div>

                                <script language="JavaScript">
                                    redireccionar();
                                </script>

        <?php
                            } else {
                                echo "Error al introducir los datos en la tabla";
                            }
                        } catch (Exception $e) {
                            echo "Error: " . $e->getLine();
                        }
                    } else {
                        echo "Error: Contraseña o codigo incorrecto.";
                    }
                } catch (Exception $e) {
                    echo "Error: " . $e->getLine();
                }
            } else {
                echo "Error: monto superado o inferior";
            }
        }

        ?>


        <div class="row justify-content-center" style="margin-bottom: 20px; margin-top: 50px;">
            <form method="POST">
                <button name="cerrarSesion" type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        </div>


        <?php
        if (isset($_POST["cerrarSesion"])) {
            $cerrarSesion = new IniciarSesion();

            $cerrarSesion->CerrarSesion();

            header("Location: ../index.php");
        }




        ?>




    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../acciones1.js"></script>
    <script src="../acciones2.js"></script>

</body>

</html>