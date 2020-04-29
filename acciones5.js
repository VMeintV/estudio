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

function cerrarSesion() {
    var ob = new XMLHttpRequest();

    ob.open("POST", "../Clases/sign_off.php", true);
    ob.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ob.onreadystatechange = function Borrar() {

        var respuesta = ob.responseText;
        var uno = "1";
        var error = "Error";

        if (typeof respuesta !== 'undefined') {
            if (respuesta == uno) {
                window.location = "http://localhost/tiendaMeint/index.php";
            } else if (respuesta == error) {
                swal({
                    title: "¡Error al guardar tu carrito!",
                    icon: "error",
                    text: "\n",
                    buttons: false,
                });
                setTimeout(window.location = "http://localhost/tiendaMeint/index.php", 2000);
            }
        }
    }
    ob.send();
}