$(document).ready(function VerCercaONormal() {
    //Juegos

    $(".TLOU2").mouseover(function AcercarTLOU2() {
        $(".TLOU2").width('20rem');
    });

    $(".TLOU2").mouseout(function NormalTLOU2() {
        $(".TLOU2").width('18rem');
    });

    //

    $(".RE3").mouseover(function AcercarRE3() {
        $(".RE3").width('20rem');
    });

    $(".RE3").mouseout(function NormalRE3() {
        $(".RE3").width('18rem');
    });

    //

    $(".FF7").mouseover(function AcercarFF7() {
        $(".FF7").width('20rem');
    });

    $(".FF7").mouseout(function NormalFF7() {
        $(".FF7").width('18rem');
    });

    //

    $(".FS").mouseover(function AcercarFS() {
        $(".FS").width('20rem');
    });

    $(".FS").mouseout(function NormalFS() {
        $(".FS").width('18rem');
    });

    //

    $(".MD").mouseover(function AcercarMD() {
        $(".MD").width('20rem');
    });

    $(".MD").mouseout(function NormalMD() {
        $(".MD").width('18rem');
    });

    //

    $(".HI").mouseover(function AcercarHI() {
        $(".HI").width('20rem');
    });

    $(".HI").mouseout(function NormalHI() {
        $(".HI").width('18rem');
    });

    //Figuras

    $(".FCS").mouseover(function AcercarFCS() {
        $(".FCS").width('20rem');
    });

    $(".FCS").mouseout(function NormalFCS() {
        $(".FCS").width('18rem');
    });

    //

    $(".FBW").mouseover(function AcercarFBW() {
        $(".FBW").width('20rem');
    });

    $(".FBW").mouseout(function NormalFBW() {
        $(".FBW").width('18rem');
    });

    //

    $(".FW").mouseover(function AcercarFW() {
        $(".FW").width('20rem');
    });

    $(".FW").mouseout(function NormalFW() {
        $(".FW").width('18rem');
    });

    //Playeras

    $(".PCODMW3").mouseover(function AcercarPCODMW3() {
        $(".PCODMW3").width('20rem');
    });

    $(".PCODMW3").mouseout(function NormalPCODMW3() {
        $(".PCODMW3").width('18rem');
    });

    //

    $(".PO").mouseover(function AcercarPO() {
        $(".PO").width('20rem');
    });

    $(".PO").mouseout(function NormalPO() {
        $(".PO").width('18rem');
    });

    //

    $(".PMK").mouseover(function AcercarPMK() {
        $(".PMK").width('20rem');
    });

    $(".PMK").mouseout(function NormalPMK() {
        $(".PMK").width('18rem');
    });

    //
});

$(document).ready(function() {
    $("#usuario").keypress(function(e) {
        if (e.which == 13) {
            iniciarSesion();
        }
    });
    $("#contraseña").keypress(function(e) {
        if (e.which == 13) {
            iniciarSesion();
        }
    });
});