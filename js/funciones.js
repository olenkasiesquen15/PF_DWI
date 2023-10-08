// Selecciona los botones y los contenedores
const btnIniciarSesion = document.getElementById('btnIniciarSesion');
const btnRegistrar = document.getElementById('btnRegistrar');
const container = document.querySelector('.container');
const container2 = document.querySelector('.container2');

// Agrega eventos de clic a los botones
btnIniciarSesion.addEventListener('click', () => {
    container.style.display = 'flex';
    container2.style.display = 'none';
});

btnRegistrar.addEventListener('click', () => {
    container.style.display = 'none';
    container2.style.display = 'flex';
});

const btnIniciarSesion2 = document.getElementById('btnIniciarSesion2');
const btnRegistrar2 = document.getElementById('btnRegistrar2');

// Agrega eventos de clic a los botones del segundo container
btnIniciarSesion2.addEventListener('click', () => {
    container.style.display = 'flex';
    container2.style.display = 'none';
});

btnRegistrar2.addEventListener('click', () => {
    container.style.display = 'none';
    container2.style.display = 'flex';
});
