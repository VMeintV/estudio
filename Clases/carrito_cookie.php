<?php

class Cookies
{

    public function CrearCokies($cookie, $plataforma)
    {
        setcookie("$cookie", "$plataforma", time() + (60 * 60 * 24 * 30));
    }
}

//setcookie("carrito", "", time() - (60 * 60 * 24 * 30));


$cookies = new Cookies();

if (isset($_COOKIE)) {
    $phd = "PHPSESSID";
    foreach ($_COOKIE as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        //if (!$name == $phd) {
            echo "$name : $value<br />\n";
        //} else {
           // echo "hola";
        //}
    }
};




//Juegos
if (isset($_POST["comprarTLOU2"])) {
    $plataformaTLOU2 = $_POST["plataformaTLOU2"];
    if($plataformaTLOU2 == "PS4 (Exclusivo)"){
        $plataformaTLOU2 = "PS4";
    }
    $cookies->CrearCokies("comprarTLOU2$plataformaTLOU2", $plataformaTLOU2);
}

if (isset($_POST["comprarRE3"])) {
    $plataformaRE3 = $_POST["plataformaRE3"];
    if($plataformaRE3 == "Xbox One"){
        $plataformaRE3 = "XboxOne";
    }
    if($plataformaRE3 == "PC (Windows)"){
        $plataformaRE3 = "PC";
    }
    $cookies->CrearCokies("comprarRE3$plataformaRE3", $plataformaRE3);
}

if (isset($_POST["comprarFF7"])) {
    $plataformaFF7 = $_POST["plataformaFF7"];
    setcookie("carrito", $plataformaFF7);
}

if (isset($_POST["comprarFS"])) {
    $plataformaFS = $_POST["plataformaFS"];
}

if (isset($_POST["comprarMD"])) {
    $plataformaMD = $_POST["plataformaMD"];
}

if (isset($_POST["comprarHI"])) {
    $plataformaHI = $_POST["plataformaHI"];
}

//Figuras
if (isset($_POST["comprarFCS"])) {
    $tamañoFCS = $_POST["tamañoFCS"];
}

if (isset($_POST["comprarFBW"])) {
    $tamañoFBW = $_POST["tamañoFBW"];
}

if (isset($_POST["comprarFW"])) {
    $tamañoFW = $_POST["tamañoFW"];
}

//Playeras
if (isset($_POST["comprarPCODMW3"])) {
    $tamañoPCODMW3 = $_POST["tamañoPCODMW3"];
    $mangaPCODMW3 = $_POST["mangaPCODMW3"];
}

if (isset($_POST["comprarPO"])) {
    $tamañoPO = $_POST["tamañoPO"];
    $mangaPO = $_POST["mangaPO"];
}

if (isset($_POST["comprarPMK"])) {
    $tamañoPMK = $_POST["tamañoPMK"];
    $mangaPMK = $_POST["mangaPMK"];
}
