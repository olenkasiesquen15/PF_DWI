document.getElementById('inputImagen').addEventListener('change', function() {
    const file = this.files[0]; // Obtiene el archivo seleccionado

    if (file) {
        const reader = new FileReader(); // Crea un lector de archivos

        reader.addEventListener('load', function() {
            // Actualiza la imagen mostrada con la imagen seleccionada
            document.getElementById('imagenMostrada').setAttribute('src', reader.result);
        });

        reader.readAsDataURL(file); // Lee el archivo como una URL de datos
    }
});
