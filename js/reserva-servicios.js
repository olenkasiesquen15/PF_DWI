document.addEventListener('DOMContentLoaded', function () {
    const circles = document.querySelectorAll('.circle');
    circles.forEach(circle => {
        circle.addEventListener('click', function () {
            circles.forEach(c => c.classList.remove('active'));
            circle.classList.add('active');
        });
    });

    const reserveButton = document.getElementById('reserveButton');
    reserveButton.addEventListener('click', function () {
        const selectedDate = document.getElementById('datePicker').value;
        const selectedTime = document.getElementById('timePicker').value;
        const selectedPeople = document.querySelector('.circle.active').textContent;

        // Simulación de redirección a otra página con los datos de reserva
        const reservationDetails = `Fecha: ${selectedDate}, Hora: ${selectedTime}, Personas: ${selectedPeople}`;
        // Redirigir a otra página con los datos de reserva
        window.location.href = `ruta-de-destino.html?reserva=${encodeURIComponent(reservationDetails)}`;
    });
});
