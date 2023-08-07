let valoracion = document.getElementById('valoracion')
let alertas = document.getElementById('alert');
valoracion.addEventListener('submit', ValoracionServicios)

function ValoracionServicios(e) {
    e.preventDefault()
    console.log('click')
    let datos = new FormData(valoracion);
    u = datos.get('nombre_usuario')
    a =datos.get('codigo_imagen')
    s= datos.get('rate')
    v= datos.get('comentario')
    console.log(u,a,s,v)

    fetch('./validarValoraciones.php', {
        method: 'POST',
        body: datos
    }).then(response => response.json())
    .then(({data})=>{
        if(data === 1){
            location.reload()
            valoracion.reset();
            alertas.innerHTML=`
               <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerta__error"  style="display: block; width:25%">
       <p style="color:green; font-size:18px; font-family: 'Montserrat', sans-serif;">
       <i class="fa-solid fa-circle-check"></i>
       Comentario Enviado
       </p>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

      
    </div>
        `
        }else{
            alertas.innerHTML=`

      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerta__error"  style="display: block;width:25%"> 
            <p style="color:red; font-size:18px; font-family: 'Montserrat', sans-serif;">
            <i class="fa-solid fa-triangle-exclamation"></i>
            Comentario no Enviado
          </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        `

        }
    })

}

