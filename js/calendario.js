const currentDate = document.querySelector(".current-date"),
daysTag = document.querySelector(".days"),
prevNextIcon = document.querySelectorAll(".icons span");

//obteniendo nueva fecha, año y mes actual actual

let date = new Date();
currYear = date.getFullYear();
currMonth = date.getMonth();

const months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
                "Agosto","Setiembre","Octubre","Noviembre","Diciembre"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), //obteniendo el primer día del mes
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), //obteniendo la última fecha del mes
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), //obteniendo el ultimo día del mes
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); //obteniendo la última fecha del mes anterior
    
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { //creando li del mes anterior el último día
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;        
    }

    for (let i = 1; i <= lastDateofMonth; i++) {//creando li de todos los días del mes actual
        //agregar clase activa a li si el día, mes y año actuales coinciden
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {//creando li de los primeros días del próximo mes
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }


    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => { //agregando evento de clic en ambos íconos
        //si el icono en el que se hizo clic es el icono anterior, entonces disminuya el mes actual en 1; de lo contrario, increméntelo en 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1 ;

        if (currMonth < 0 || currMonth > 11) { //si el mes actual es menor que 0 o mayor que 11
            //crear una nueva fecha del año y mes actuales y pasarla como valor de fecha
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear(); // actualizando el año actual con una nueva fecha
            currMonth = date.getMonth(); // actualizando el mes actual con una nueva fecha mes
        } else{ // de lo contrario, pase la nueva fecha como valor de fecha
            date = new Date();
        }
        renderCalendar();
    });
});

console.log(date, currYear, currMonth);