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

const boton3 = document.getElementsByClassName('editAlumn');
const elemento3 = document.getElementById('authentication-modal');
const botonExit = document.getElementsByClassName('exitEditAlumn');

for (let i = 0; i < boton3.length; i++) {
  boton3[i].addEventListener('click', function() {
    if (elemento3.classList.contains('hidden')) {
      // Si la tiene, la quitamos
      elemento3.classList.remove('hidden');
    } 
  });
}

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

