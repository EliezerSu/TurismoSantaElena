var mostrar_comentarios= document.getElementById('ver_comentario');

function cargarComentarios(){
    fetch('mostrar_comentarios.php')
    .then(function(response){
        return response.json();
    })
    .then(function(comentarios){
        var html ="";
        for (let i = 0; i < array.length; i++) {
            html += "<p> <strong>"+ comentarios[i].usuario + "</strong> dijo: </p>";
            html += "<p> <strong>"+ comentarios[i].descripcion + "</strong> dijo: </p>";
            html += "<p> <strong>"+ comentarios[i].fecha + "</strong> dijo: </p>"; 
        }
        mostrar_comentarios.innerHTML = html;
    })

    .catch(function(error){
        alert(error)

    })
}