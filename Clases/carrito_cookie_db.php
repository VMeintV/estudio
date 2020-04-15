<?php
//

for ($i = 1; $i <= 38; $i++) {
    if (!isset($_COOKIE["$i"])) {
        setcookie($i, "0", time() + 2592000);
    }
}


//*/
/*
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
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarRE3"])) {
    $cookie = $_POST["plataformaRE3"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarFF7"])) {
    $cookie = $_POST["plataformaFF7"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarFS"])) {
    $cookie = $_POST["plataformaFS"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarMD"])) {
    $cookie = $_POST["plataformaMD"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarHI"])) {
    $cookie = $_POST["plataformaHI"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

//Figuras
if (isset($_POST["comprarFCS"])) {
    $cookie = $_POST["tamañoFCS"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarFBW"])) {
    $cookie = $_POST["tamañoFBW"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarFW"])) {
    $cookie = $_POST["tamañoFW"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

//Playeras
if (isset($_POST["comprarPCODMW3"])) {
    $cookie = $_POST["tamañoPCODMW3"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarPO"])) {
    $cookie = $_POST["tamañoPO"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}

if (isset($_POST["comprarPMK"])) {
    $cookie = $_POST["tamañoPMK"];
    $cookieV = $cookies->LeerCookies($cookie);
    $cookieV = $cookieV + 1;
    setcookie($cookie, $cookieV, time() + 2592000);
}


//Carrito-Tabla
