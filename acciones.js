$(document).ready(function Listo() {

    function EjecutarAjax(id, modal) {
        $.ajax({
            type: "POST",
            url: "Clases/carritoDeposito.php",
            data: "id=" + id,
            success: function(response) {
                $("#existencia" + modal).show();
                $("#cantidad" + modal).val(response);
                if (response < 10) {
                    $("#CantidadC" + modal).attr("max", response);
                } else if (response >= 10) {
                    $("#CantidadC" + modal).attr("max", 10);
                }
            },
            error: function Error() {
                console.log("Error");
            }
        });
    }

    $(document).on('click', 'option', function optionSelect(event) {
        var id = this.id;
        var value = this.value;

        var cero = "0";
        var cero = parseInt(cero);
        var value = parseInt(value);

        if (!value == cero) {
            switch (id) {
                case "1":
                    $("#b1").prop("disabled", false);
                    EjecutarAjax(id, 1);
                    break;
                case "2":
                case "3":
                case "4":
                    $("#b2").prop("disabled", false);
                    EjecutarAjax(id, 2);
                    break;
                case "5":
                    $("#b3").prop("disabled", false);
                    EjecutarAjax(id, 3);
                    break;
                case "6":
                case "7":
                    $("#b4").prop("disabled", false);
                    EjecutarAjax(id, 4);
                    break;
                case "8":
                case "9":
                case "10":
                case "11":
                    $("#b5").prop("disabled", false);
                    EjecutarAjax(id, 5);
                    break;
                case "12":
                case "13":
                case "14":
                    $("#b6").prop("disabled", false);
                    EjecutarAjax(id, 6);
                    break;
                case "15":
                case "16":
                    $("#b7").prop("disabled", false);
                    EjecutarAjax(id, 7);
                    break;
                case "17":
                case "18":
                    $("#b8").prop("disabled", false);
                    EjecutarAjax(id, 8);
                    break;
                case "19":
                case "20":
                    $("#b9").prop("disabled", false);
                    EjecutarAjax(id, 9);
                    break;
                case "21":
                case "22":
                case "23":
                case "24":
                case "25":
                case "26":
                    $("#b10").prop("disabled", false);
                    EjecutarAjax(id, 10);
                    break;
                case "27":
                case "28":
                case "29":
                case "30":
                case "31":
                case "32":
                    $("#b11").prop("disabled", false);
                    EjecutarAjax(id, 11);
                    break;
                case "33":
                case "34":
                case "35":
                case "36":
                case "37":
                case "38":
                    $("#b12").prop("disabled", false);
                    EjecutarAjax(id, 12);
                    break;
                default:
                    break;
            }

        } else if (value == cero) {
            switch (id) {
                case "o1":
                    $("#b1").prop("disabled", true);
                    $("#existencia" + 1).hide();
                    break;
                case "o2":
                    $("#b2").prop("disabled", true);
                    $("#existencia" + 2).hide();
                    break;
                case "o3":
                    $("#b3").prop("disabled", true);
                    $("#existencia" + 3).hide();
                    break;
                case "o4":
                    $("#b4").prop("disabled", true);
                    $("#existencia" + 4).hide();
                    break;
                case "o5":
                    $("#b5").prop("disabled", true);
                    $("#existencia" + 5).hide();
                    break;
                case "o6":
                    $("#b6").prop("disabled", true);
                    $("#existencia" + 6).hide();
                    break;
                case "o7":
                    $("#b7").prop("disabled", true);
                    $("#existencia" + 7).hide();
                    break;
                case "o8":
                    $("#b8").prop("disabled", true);
                    $("#existencia" + 8).hide();
                    break;
                case "o9":
                    $("#b9").prop("disabled", true);
                    $("#existencia" + 9).hide();
                    break;
                case "o10":
                    $("#b10").prop("disabled", true);
                    $("#existencia" + 10).hide();
                    break;
                case "o11":
                    $("#b11").prop("disabled", true);
                    $("#existencia" + 11).hide();
                    break;
                case "o12":
                    $("#b12").prop("disabled", true);
                    $("#existencia" + 12).hide();
                    break;
                default:
                    break;
            }
        }
    });
});