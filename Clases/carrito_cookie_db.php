<?php
//
for ($i = 1; $i <= 38; $i++) {
    if (!isset($_COOKIE["$i"])) {
        setcookie($i, "0", time() + 2592000);
    }
}
//*/
/*
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
//*/
/*
foreach ($_COOKIE as $name => $value) {
    $name = htmlspecialchars($name);
    $value = htmlspecialchars($value);

    echo "$name : $value <br>";
}
//*/
class Cookies
{

    public function LeerCookies($leerValorCookie)
    {
        $cookieV = $_COOKIE["$leerValorCookie"];
        return $cookieV;
    }
}

$cookies = new Cookies();

//Juegos
if (isset($_POST["comprarTLOU2"])) {
    $cookie = $_POST["plataformaTLOU2"];
    $cantidadAC = $_POST["TLOU2CantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php

}

if (isset($_POST["comprarRE3"])) {
    $cookie = $_POST["plataformaRE3"];
    $cantidadAC = $_POST["RE3CantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarFF7"])) {
    $cookie = $_POST["plataformaFF7"];
    $cantidadAC = $_POST["FF7CantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarFS"])) {
    $cookie = $_POST["plataformaFS"];
    $cantidadAC = $_POST["FSCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarMD"])) {
    $cookie = $_POST["plataformaMD"];
    $cantidadAC = $_POST["MDCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarHI"])) {
    $cookie = $_POST["plataformaHI"];
    $cantidadAC = $_POST["HICantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

//Figuras
if (isset($_POST["comprarFCS"])) {
    $cookie = $_POST["tamañoFCS"];
    $cantidadAC = $_POST["FCSCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarFBW"])) {
    $cookie = $_POST["tamañoFBW"];
    $cantidadAC = $_POST["FBWCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarFW"])) {
    $cookie = $_POST["tamañoFW"];
    $cantidadAC = $_POST["FWCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

//Playeras
if (isset($_POST["comprarPCODMW3"])) {
    $cookie = $_POST["tamañoPCODMW3"];
    $cantidadAC = $_POST["PCODMW3CantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarPO"])) {
    $cookie = $_POST["tamañoPO"];
    $cantidadAC = $_POST["POCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}

if (isset($_POST["comprarPMK"])) {
    $cookie = $_POST["tamañoPMK"];
    $cantidadAC = $_POST["PMKCantidadC"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + $cantidadAC;
    setcookie($cookie, $cookieV, time() + 2592000);
?>
    <script language="javascript">
        window.onload = setTimeout(crearSweet, 1500);

        function crearSweet() {
            swal({
                title: "¡Articulo agregado exitosamente!",
                icon: "success",
                button: "Aceptar",
            });
        }
    </script>
<?php
}
//Carrito-Tabla
