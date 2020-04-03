<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css" media="all">
        @import"http://localhost/tiendaMeint/Estilos/estilos.css";
    </style>


    <title>Perfil</title>
</head>

<body>
    <?php

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
            <h1>Bienvenido a tu perfil <?php  ?></h1>
        </div>


        <div class="row justify-content-center" style="margin-top: 100px; margin-bottom: 200px;">
            <div class="card" style="width: 22rem;">
                <img src="https://www.softzone.es/app/uploads-softzone.es/2018/04/guest.png" class="card-img-top img-responsive">
                <div class="card-body">
                    <h5 class="card-title"><?php   ?></h5>
                    <p class="card-text" name="descripcion">Datos</p>
                    <button type="submit" class="btn btn-info" name="editarPerfil">Editar perfil</button>
                </div>
            </div>
        </div>






    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../acciones.js"></script>

</body>

</html>