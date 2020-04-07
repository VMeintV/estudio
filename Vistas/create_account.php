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

<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 20px;">
            <h1>Introduzca sus datos</h1>
        </div>

        <div class="row justify-content-center" style="margin-top: 65px;">
            <form method="POST">
                <div class="card" style="width: 30rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="usr">Usuario:</label>
                                <input type="text" name="usr" class="form-control" id="usr">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="ed">Edad (Debes de ser mayor de edad):</label>
                                <input type="number" name="ed" class="form-control" id="ed">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="cor">Correo:</label>
                                <input type="email" name="cor" class="form-control" id="cor">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="nom">Nombre (Completo*):</label>
                                <input type="text" name="nom" class="form-control" id="nom">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="cod">Código:</label>
                                <input type="password" name="cod" class="form-control" id="cod">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <label for="pass">Contraseña:</label>
                                <input type="password" name="pass" class="form-control" id="pass">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-group">
                                <button class="btn btn-primary" name="crearCuenta">Crear cuenta</button>
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

        $usuario = $_POST["usr"];
        $edad = $_POST["ed"];
        $correo = $_POST["cor"];
        $nombre = $_POST["nom"];
        $codigo = $_POST["cod"];
        $contra = $_POST["pass"];


        $conectar->ingresarDatosYCrearCuenta($usuario, $edad, $correo, $nombre, $codigo, $contra);
    }

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>