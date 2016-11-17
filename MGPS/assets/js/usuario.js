$(document).on("ready",inicio);

function inicio(){
    alert('JasonllPaul');
    mostrarDatos("");
    $("#buscar").keyup(function (){
        buscar = $("#buscar").val();
        mostrarDatos(buscar);
    });
    $("form").submit(function (event){
       event.preventDefault();
       
       $.ajax({
        url:$("form").attr("action"),
        type:$("form").attr("method"),
        data:$("form").serialize(),
        success: function(respuesta){
            alert(respuesta);
            }
        });
       
    });
}


function mostrarDatos(valor){
    $.ajax({
        url:"http://localhost/CRUDejemplo/index.php/usuario/mostrar",
        type:"POST",
        data:{buscar:valor},
        success: function(respuesta){
            alert(respuesta);
        }
    });
}