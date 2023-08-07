function generarValoraciones(){
    var fecha_inicio = $("#fecha_inicio").val();
    var fecha_fin = $("#fecha_fin").val();
    
    $.ajax({
        url:"./ajax/generar_valoraciones.php",
        type:"POST",
        data:{fecha_inicio: fecha_inicio, fecha_fin: fecha_fin},
        beforeSend:function(){
            $("#resultados").html('<p><img src="img/ajax-loader.gif"> Cargando...</p>');
        },
        success:function(data){
            $("#resultados").html(data);
        },
        error:function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });
}
