$(document).ready(function Botones() {
    $("#perfil").click(function IrPerfil() {
        $(location).attr("href", "Vistas/perfil.php");
    });

    $("#regresarPP").click(function RegresarPP() {
        $(location).attr("href", "../index.php");
    });
});

$(document).ready(function Bonotes1() {
    $("#regresarT").click(function RegresarT() {
        $(location).attr("href", "../index.php");
    });

    $("#regresarP").click(function RegresarP() {
        $(location).attr("href", "perfil.php");
    });
});