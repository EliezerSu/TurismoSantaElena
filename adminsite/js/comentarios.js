function load(page){
    var q= $("#q").val();
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'buscar_comentarios.php?action=ajax&page='+page+'&q='+q,
        beforeSend: function(objeto){
            $('#loader').html('<img src="img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $('#loader').html('');
        }
    });
}

function cambiarEstado(id, estado) {
    $.ajax({
      type: 'POST',
      url: './ajax/cambiar_estado.php',
      data: {
        id: id,
        estado: estado
      },
      success: function(response) {
        // Recargar la tabla de comentarios después de actualizar el estado
        load(1);
      }
    });
  }
