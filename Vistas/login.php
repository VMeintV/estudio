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

    <title></title>
</head>

<body>

    <div class="row justify-content-center">

        <div class="col" style="margin-top: 20px;">
            <div class="input-group mb-3" style="width: 300px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input required type="text" id="usuario" class="form-control" placeholder="Nombre de Usuario" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col" style="margin-top: 20px;">
            <div class="input-group mb-3" style="width: 300px;">
                <input required type="password" id="contraseña" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col" style="margin-top: 20px;">
            <button type="submit" onclick="iniciarSesion()" class="btn btn-primary">Iniciar Sesión</button>
        </div>
    </div>

    <script type="text/javascript">
        function iniciarSesion() {

            var usuario = document.getElementById("usuario").value;
            var contraseña = document.getElementById("contraseña").value;

            if (usuario && contraseña) {



                var obj = new XMLHttpRequest();

                obj.open("POST", "Clases/login_db.php", true);
                obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                obj.onreadystatechange = function Borrar() {
                    function IngresarCuenta() {
                        var respuesta = obj.responseText;
                        if (typeof respuesta !== 'undefined') {
                            var probar = "1";
                            var probar1 = parseInt(probar);
                            var respuesta1 = parseInt(respuesta);
                            if (respuesta1 == probar1) {
                                console.log("hola");
                                window.location = "http://localhost/tiendaMeint/Vistas/perfil.php";
                            } else {                                
                                
                                function quitar() {
                                    document.getElementById("errorSesion").style.display = "none";
                                }
                            
                                function poner (){
                                    document.getElementById("errorSesion").style.display = "block";
                                    setTimeout(quitar, 2500);
                                }

                                setTimeout(poner, 2000);

                            }

                        }
                    }
                    IngresarCuenta();
                }
                obj.send("usuario" + "=" + usuario + "&" + "contraseña" + "=" + contraseña);
            }
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>