// Obtener referencias a los elementos que necesitas
const boton = document.getElementById('miBoton');
const elemento = document.getElementById('miElemento');

const boton2 = document.getElementById('miBoton2');
const elemento2 = document.getElementById('miElemento2');

// Agregar un escuchador de eventos al botón
boton.addEventListener('click', function() {
  // Verificar si el elemento tiene la clase "mi-clase"
  if (elemento.classList.contains('hidden')) {
    // Si la tiene, la quitamos
    elemento.classList.remove('hidden');
  } else {
    // Si no la tiene, la agregamos
    elemento.classList.add('hidden');
  }
});


boton2.addEventListener('click', function() {
  // Verificar si el elemento tiene la clase "mi-clase"
  if (elemento2.classList.contains('hidden')) {
    // Si la tiene, la quitamos
    elemento2.classList.remove('hidden');
  } else {
    // Si no la tiene, la agregamos
    elemento2.classList.add('hidden');
  }
});


//////////////// SOBRESALE ///////////////////

const boton3 = document.getElementById('editAlumn');
const elemento3 = document.getElementById('authentication-modal');
const botonExit = document.getElementsByClassName('exitEditAlumn');

boton3.addEventListener('click', function() {
  // Verificar si el elemento tiene la clase "mi-clase"
  if (elemento3.classList.contains('hidden')) {
    // Si la tiene, la quitamos
    elemento3.classList.remove('hidden');
  } 
});

for (let i = 0; i < botonExit.length; i++) {
  botonExit[i].addEventListener('click', function() {
    elemento3.classList.add('hidden');
  });
}



const boton4 = document.getElementById('agregAlumn');
const elemento4 = document.getElementById('authentication-modal2');
const botonExit2 = document.getElementsByClassName('exitEditAlumn2'); 

boton4.addEventListener('click', function() {
  // Verificar si el elemento tiene la clase "mi-clase"
  if (elemento4.classList.contains('hidden')) {
    // Si la tiene, la quitamos
    elemento4.classList.remove('hidden');
  } 
});

for (let i = 0; i < botonExit2.length; i++) {
  botonExit2[i].addEventListener('click', function() {
    elemento4.classList.add('hidden');
  });
}

//////////////////////// MODALES ///////////////////////

const modal_password = document.getElementById('passwordForm');

modal_password.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente



    const password1 = modal_password.password1.value;
    const password2 = modal_password.password2.value;
    const password3 = modal_password.password3.value;

    if (password2 !== password3) {

        // Las contraseñas no coinciden, muestra un mensaje de error
         if (!document.getElementById('msj')) {
            const errorMessage = document.createElement('p');
            errorMessage.id = 'msj';
            errorMessage.className = 'text-red-500 w-full text-center text-[15.5px] absolute transform duration-500 ease-in-out bottom-32';
            errorMessage.textContent = 'Las contraseñas no coinciden, Inténtelo nuevamente.';
            modal_password.appendChild(errorMessage);
        }

        Msj();

    } else {
        // Las contraseñas coinciden, puedes enviar el formulario
        console.log("las contraseñas coinciden")
        alert("coinciden")
        this.submit();
    }
});