

let form = document.getElementById('Login');
form.addEventListener('submit',Login)
function Login(e){
    e.preventDefault();
    let alerta = document.getElementById('alerta__info')
    let datos = new FormData(form);
    datos.get('user')
    datos.get('contrasenia')
  fetch('../validarLogin.php',{
        method: 'POST',
        body: datos
    }).then(response => response.json())
    .then(({success})=>{
        console.log(success)
        if(success === 1 ){
            location.href='lasnunez.php';
        }else{
            alerta.innerHTML= `
            <div class="alert alert-danger" role="alert" id="alerta__info"  style="display: block;"> 
                <p style="color:red; font-size:15px; font-weight: 800; font-family: 'Montserrat', sans-serif;">
                <i class="fa-solid fa-triangle-exclamation"></i>
                Usuario o Contraseña Incorrecto!!!
                </p>
            </div>`;
        }
     })
}
// registro
let registro__usuarios= document.getElementById('Registro')
registro__usuarios.addEventListener('submit', Registro)
function Registro (e){
    e.preventDefault();
    let error = document.getElementById('alerta__error');
    let datos = new FormData(registro__usuarios);
    datos.get('nombres')
    datos.get('username')
    datos.get('psw')
    datos.get('correo')
    datos.get('fecha')
    datos.get('gender')
    datos.get('ciudad')
    datos.get('provincia');


    fetch('../validarRegistro.php',{
        method: 'POST',
         body: datos
     }).then(response => response.json())
     .then(({data})=>{
     if(data === 1){
        registro__usuarios.reset();
               error.innerHTML=`
     <div class="alert alert-success" role="alert" id="alerta__error"  style="display: block;">
         <p style="color:green; font-size:15px; font-weight: 800; font-family: 'Montserrat', sans-serif;">
         <i class="fa-solid fa-circle-check"></i>
         Cuenta creada Exitosamente</p> 
      </div>`; 
    
    }else{
         console.log(data)

         error.innerHTML=`
         <div class="alert alert-danger" role="alert" id="alerta__error"  style="display: block;"> 
             <p style="color:red; font-size:15px; font-weight: 800; font-family: 'Montserrat', sans-serif;">
             <i class="fa-solid fa-triangle-exclamation"></i>
             Llenar todos los campos!!!
           </p>
         </div>
         `;
    }      
})


}
