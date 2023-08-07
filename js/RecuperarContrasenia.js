let nuevaclave= document.getElementById('nuevopassword')
nuevaclave.addEventListener('submit', nuevopassword)

function nuevopassword (e){
    e.preventDefault();
    let error = document.getElementById('info__psw');
    let datos = new FormData(nuevaclave);
    datos.get('correo')
    var pass_regex = /^[a-zA-Z0-9]+$/;
    let psw= datos.get('psw');
    if( psw.match(pass_regex)){ 
        datos.get('psw')
    }

    
    fetch('./actualizapassword.php',{
        method: 'POST',
         body: datos
     }).then(response => response.json())
     .then(({data})=>{

     if(data === 1){
        nuevaclave.reset();
               error.innerHTML=`
     <div class="alert alert-success" role="alert" id="alerta__error"  style="display: block;">
         <p style="color:green; font-size:15px; font-weight: 800; font-family: 'Montserrat', sans-serif;">
         <i class="fa-solid fa-circle-check"></i>
         La contraseña ha sido actualizada correctamente</p> 
      </div>`; 
    
    }else{

         error.innerHTML=`
         <div class="alert alert-danger" role="alert" id="alerta__error"  style="display: block;"> 
             <p style="color:red; font-size:15px; font-weight: 800; font-family: 'Montserrat', sans-serif;">
             <i class="fa-solid fa-triangle-exclamation"></i>
            Ingrese un correo electronico valido!!
           </p>
         </div>
         `;
    }
     })
}
