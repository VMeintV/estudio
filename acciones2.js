$(document).ready(function Bonotes2() {

    $("#abonar").click(function Abonar() {
        $("#abonado1").hide();
        $("#abonado").hide();
        $("#abonar1").hide();
        $("#abono1").show();
    });

    $("#cancelar").click(function CancelarAbono() {
        $("#abono1").hide();
        $("#abonado1").show();
        $("#abonado").show();
        $("#abonar1").show();
    });

});