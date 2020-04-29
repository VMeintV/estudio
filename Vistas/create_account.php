<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="c:/xampp/htdocs/tiendaMeint/Estilos/estilos.css" rel="stylesheet">

    <?php
    echo "<style>";
    include_once "../Estilos/estilos.css";
    echo "</style>";
    ?>

    <title>Creacion de Cuenta</title>
</head>

<body class="creandoCuenta">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="container">
        <div class="row justify-content-center" style="margin-top: 20px;">
            <h1 style="color: white;">Introduzca sus datos</h1>
        </div>

        <div class="row justify-content-center" style="margin-top: 65px; margin-bottom: 50px;">
            <form method="POST">
                <div class="card" style="width: 30rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="usr">Usuario:</label>
                                <input required type="text" minlength="3" maxlength="15" name="usr" class="form-control" id="usr">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="usuario" role="alert">
                                Nombre de usuario no disponible
                            </div>
                            <div class="alert alert-danger" id="usuario1" role="alert">
                                Numero de caracteres invalido
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="ed">Edad (Debes de ser mayor de edad):</label>
                                <input required type="number" min="18" max="70" name="ed" class="form-control" id="ed">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="edad" role="alert">
                                Debes de ser mayor de 18 años
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="cor">Correo:</label>
                                <input required type="email" name="cor" class="form-control" id="cor">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="correo" role="alert">
                                Correo electrónico invalido
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="nom">Nombre (Completo*):</label>
                                <input required type="text" minlength="3" maxlength="35" name="nom" class="form-control" id="nom">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="nombre" role="alert">
                                El nombre no debe de contener numeros o caracteres especiales <br>
                                Nombre no menor o mayor a 3 o 35 carácteres respectivamente
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="cod">Código:</label>
                                <input required type="password" minlength="10" maxlength="10" name="cod" class="form-control" id="cod">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="codigo" role="alert">
                                Codigo invalido
                            </div>
                        </li>
                        <li class="list-group-item">
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label id="explicacion" for="pass">Contraseña:</label>
                                <input required type="password" minlength="5" maxlength="15" name="pass" class="form-control" id="pass">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-danger" id="contraseña" role="alert">
                                Contraseña no valida
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <button required class="btn btn-success" name="crearCuenta">Crear cuenta</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
        </div>

    </div>


    <?php

    include_once "../Clases/account.php";

    $conectar = new CrearCuenta();

    $conectar->__construct();

    if (isset($_POST["crearCuenta"])) {

        $usu = $_POST["usr"];
        try {
            $conexion_bd1 = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

            $usu = $_POST["usr"];

            $sqlN = "SELECT * FROM Usuarios WHERE usuario ='" . $usu . "'";

            $sentencia3 = $conexion_bd1->query($sqlN);

            while ($resultado = $sentencia3->fetch_assoc()) {
                $ver = $resultado["usuario"];
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getLine();
        }



        if (!isset($ver)) {
            $usua = strlen($usu);
            if ($usua >= 3 && $usua <= 15) {
                $usuario = $usu;
    ?>
                <script type="text/javascript">
                    document.getElementById("usuario").style.display = "none";
                    document.getElementById("usuario1").style.display = "none";
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    document.getElementById("usuario1").style.display = "block";
                </script>
            <?php
            }
        } else {
            echo $ver;
            ?>
            <script type="text/javascript">
                document.getElementById("usuario").style.display = "block";
            </script>
        <?php
        }



        $ed = $_POST["ed"];

        if ($ed >= 18) {
            $edad = $ed;
        ?>
            <script languague="Javascript">
                document.getElementById("edad").style.display = "none";
            </script>
        <?php
        } else {
        ?>
            <script languague="Javascript">
                document.getElementById("edad").style.display = "block";
            </script>
        <?php
        }

        $cor = $_POST["cor"];

        if (filter_var($cor, FILTER_VALIDATE_EMAIL)) {
            $correo = $cor;
        ?>
            <script type="text/javascript">
                document.getElementById("correo").style.display = "none";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                document.getElementById("correo").style.display = "block";
            </script>
            <?php
        }

        $nom = $_POST["nom"];

        if (is_string($nom)) {
            $nomb = strlen($nom);
            if ($nomb >= 3 && $nomb <= 35) {
                $nombre = $nom;
            ?>
                <script languague="Javascript">
                    document.getElementById("nombre").style.display = "none";
                </script>
            <?php
            } else {
            ?>
                <script languague="Javascript">
                    document.getElementById("nombre").style.display = "block";
                </script>
            <?php
            }
        } else {
            ?>
            <script languague="Javascript">
                document.getElementById("nombre").style.display = "block";
            </script>
        <?php
        }

        $cod = $_POST["cod"];
        $codi = strlen($cod);

        if ($codi == 10) {
            $codigo = $cod;
        ?>
            <script type="text/javascript">
                document.getElementById("codigo").style.display = "none";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                document.getElementById("codigo").style.display = "block";
            </script>
        <?php
        }

        $con = $_POST["pass"];
        $cont = strlen($con);
        if ($cont >= 5 && $cont <= 15) {
            $contra = $con;
        ?>
            <script type="text/javascript">
                document.getElementById("contraseña").style.display = "none";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                document.getElementById("contraseña").style.display = "block";
            </script>
    <?php
        }

        if (isset($usuario) && isset($edad) && isset($correo) && isset($nombre) && isset($codigo) && isset($contra)) {
            $conectar->ingresarDatosYCrearCuenta($usuario, $edad, $correo, $nombre, $codigo, $contra);
        }
    }

    ?>


    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>