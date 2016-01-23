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
        $("#imgresp").attr("src", urlimg);
        $("#myModalLabel").html(titimg);
        //alert(idimg);
        $('#myModal').modal('show');

    });

    $("#viewDescription").click(function() {
        var titDisc = $("#myModalLabel").html();
        $("#disc").html(titDisc);
        $("#descriptionDisc").slideToggle('show');
    });


    cargarTabla = function() {
        //alert("Ok");
        /*var htmlTable = '';
         
         htmlTable +='<table class="table table-bordered" >';
         htmlTable +='   <tbody>';
         htmlTable +='       <tr>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='       </tr>';
         htmlTable +='       <tr>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='       </tr>';
         htmlTable +='       <tr>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';
         htmlTable +='           <td>';
         htmlTable +='               <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">';
         htmlTable +='           </td>';;
         htmlTable +='       </tr>';
         htmlTable +='   </tbody>';
         htmlTable +='</table>';*/
        /*$.ajax({
            url: '',
            type: 'POST'
        });*/
        var request = $.ajax({
            url: "controller/php/rq.php",
            type: "POST",
            data: {name:"valid"},
            dataType: "json"
        });
        request.done(function(json) {
            $("#example").html(json.tabla);
        });

        request.fail(function(jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
    };

});