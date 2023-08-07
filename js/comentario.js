let comentario = document.getElementById('Pagina_Comentario')
let mensaje = document.getElementById('mensaje');
comentario.addEventListener('submit', ComentariosPaginas)

function ComentariosPaginas(e) {
    e.preventDefault();
    console.log('click')
    mensaje.innerHTML='<span>alerta </span>'
    let dato = new FormData(comentario);
    u = dato.get('nombre_usuario')
    a =dato.get('codigo_imagen')
    v= dato.get('comentario')
    

    fetch('./validarcomentarios.php', {
        method: 'POST',
        body: dato
    }).then(response => response.json())
    .then(({data})=>{
        if(data === 1){
            location.reload();
            comentario.reset();
            mensaje.innerHTML=`
   <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerta__error"  ">
       <p style="color:green; font-size:18px; font-family: 'Montserrat', sans-serif;">
       <i class="fa-solid fa-circle-check"></i>
       Comentario Enviado
       </p>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

      
    </div>
        `
        }else{
            mensaje.innerHTML=`

        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerta__error"  > 
            <p style="color:red; font-size:18px; font-family: 'Montserrat', sans-serif;">
            Comentario no Enviado
            </p>
            <i class="fa-solid fa-triangle-exclamation"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        `

        }
    })

}


