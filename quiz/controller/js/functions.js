$(document).ready(function()
{
    var content = "<h1>Texto cargado en la carga de la pagina</h1>";
    $("#footerCont").html(content);

    imprimir = function() {
        //alert("listo");
        var content = "<h1>Cambio texto</h1>";
        $("#textContentDiv").html(content);
        $("#textContentDiv").css('color', 'green');
    };

    CambText = function() {
        //alert("listo");
        var content = "<h1>Hola</h1>";
        $("#textContentDiv").html(content);
        $("#textContentDiv").css('font-size', '40px');
    };

    CambText();


    $(".img-circle").click(function() {
        var idimg = $(this).attr("id");
        var urlimg = $(this).attr("src");
        var titimg = $(this).attr("alt");
        $("#imgresp").attr("src",urlimg);
        $("#myModalLabel").html(titimg);
        //alert(idimg);
        $('#myModal').modal('show');

    });

});