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

    <title>Meint's Shop</title>
</head>

<body>
    <header>

        <div class="container">
            <?php

            ?>
            <div class="row justify-content-center iniciarSesion" style="margin-top: 20px;">
                <?php
                include("Vistas/login.php");
                ?>
            </div>
            <div class="row justify-content-center">
                <a href="Vistas/create_account.php">
                    <p>No tienes cuenta?</p>
                </a>
            </div>

            <?php

            ?>
            <div class="row justify-content-end">
                <a href="Vistas/carrito.php"><img src="https://www.cscorporation.com.mx/cs/assets/img/home/carrito_de_compras_paso_1.png" width="30rem"></a>
            </div>
        </div>

    </header>
    <div class="container" style="margin-top: 100px">

        <div class="row justify-content-center">
            <h1>Bienvenido a mi tienda <?php  ?></h1>
        </div>

        <!--Primera parte de juegos-->
        <div class="row justify-content-center" style="margin-top: 100px">
            <h3>Videojuegos:</h3>
        </div>
        <div class="row justify-content-center" style="margin-top: 30px">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://i.blogs.es/2696f8/tlou2/1366_2000.jpeg">
                    <div class="card-body">
                        <h5 class="card-title">The Last Of Us II</h5>
                        <p>Descripción</p>
                        <button id="verMasTLOU2" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://www.eluniverso.com/sites/default/files/fotos/2019/12/hipertextual-se-filtran-primeras-imagenes-remake-resident-evil-3-2019614147-740x740_0.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Resident Evil 3: Remake</h5>
                        <p>Descripción</p>
                        <button id="verMasRE3" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://i.ytimg.com/vi/8IrheLf0Ki0/maxresdefault.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Final Fantasy VII Remake</h5>
                        <p>Descripción</p>
                        <button id="verMasFF7" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Segunda parte de juegos-->
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://i.blogs.es/d08573/screenshot_11/1366_2000.jpeg">
                    <div class="card-body">
                        <h5 class="card-title">Flight Simulator</h5>
                        <p>Descripción</p>
                        <button id="verMasFS" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://media.vandal.net/i/1200x630/3-2020/202033118263724_1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Minecraft Dungeons</h5>
                        <p>Descripción</p>
                        <button id="verMasMD" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://image.halocdn.com/?path=https:%2F%2Fcontent.halocdn.com%2Fmedia%2FDefault%2Fgames%2Fhalo-infinite%2Fhalo_infinite_social_takeover_waypoint-hero-large-1920x675-c0a2b69586014f509881428f25e68afa.png&leftCrop=560&rightCrop=560&hash=cj6ZaRSh3Oj%2B1kgJDyKd7hTHtZi2AdD9OVZ5kn0%2FGX4%3D">
                    <div class="card-body">
                        <h5 class="card-title">Halo Infinite</h5>
                        <p>Descripción</p>
                        <button id="verMasHI" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Figuras-->
        <div class="row justify-content-center" style="margin-top: 100px">
            <h3>Figuras (Coleccionables):</h3>
        </div>
        <div class="row justify-content-center" style="margin-top: 30px">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://statics.vrutal.com/m/b949/b949588f02b2f33973c7f40db63ca590.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Strife: Final Fantasy VII Remake</h5>
                        <p>Descripción</p>
                        <button id="verMasFCSFF7" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://cl.buscafs.com/www.levelup.com/public/uploads/images/621045_670x670.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Barret Wallace: Final Fantasy VII Remake</h5>
                        <p>Descripción</p>
                        <button id="verMasFBWFF7" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://i.pinimg.com/originals/40/7e/20/407e2051c14489120715cd19788b7e4f.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Widowmaker: Overwatch</h5>
                        <p>Descripción</p>
                        <button id="verMasWO" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Playeras-->
        <div class="row justify-content-center" style="margin-top: 100px">
            <h3>Playeras:</h3>
        </div>
        <div class="row justify-content-center" style="margin-top: 30px; margin-bottom: 50px;">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://d26lpennugtm8s.cloudfront.net/stores/114/482/products/m113-e4408ce114ef527cc815132787035620-1024-1024.jpg">
                    <div class="card-body">
                        <h5 class="card-title">COD: Modern Warfare 3</h5>
                        <p>Descripción</p>
                        <button id="verMasPCODMW3" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://gameplanet-53f8.kxcdn.com/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/o/v/overwatch-logo-gris_1.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Overwatch</h5>
                        <p>Descripción</p>
                        <button id="verMasPO" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top img-responsive" src="https://ae01.alicdn.com/kf/HTB1XJKzNFXXXXaeXXXXq6xXFXXXa/Nuevo-juego-Mortal-Kombat-hombres-camiseta-MK-Dragon-Man-Camiseta-cuello-redondo-cl-sico-SUB-ZERO.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Mortal Kombat</h5>
                        <p>Descripción</p>
                        <button id="verMasPMK" class="btn btn-warning">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>