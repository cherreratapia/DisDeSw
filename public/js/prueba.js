$("#btnB").click(function(){
    $("#datosBusq").hide();
    $("#infoCompletaChofer").show();
});
$("#mostrarMapa").click(function(){
    $("#infoCompletaChofer").hide();
    $("#map").show();
    $("#volverMap").show();
});
$("#volverBusqueda").click(function(){
    $("#infoCompletaChofer").hide();
    $("#datosBusq").show();     
});
$("#volverMap").click(function(){
    $("#volverMap").hide();
    $("#map").hide();
    $("#infoCompletaChofer").show();
});