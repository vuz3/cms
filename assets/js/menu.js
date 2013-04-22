$(document).ready(function() {
    $("#zwin").addClass("triangle up");

    $("#zwin").click(function() {
        $("#menu").hide("blind", 500);
        $("#rozwin").addClass("triangle down");
    });

    $("#rozwin").click(function() {
        $("#menu").show("blind", 500);
        $("#rozwin").removeClass("triangle down");
    });

});