<?php include("encabezado2.php"); ?>

<main class="reservass">
    <a href="rest-nikko.php">
        <button class="volver">
            <iconify-icon icon="mingcute:left-fill" width="17" height="17"></iconify-icon> 
            Volver al perfil
        </button>
    </a>

    <div class="container">
        <div class="selections">
            <div class="people-selection">
                <h1>Selecciona la cantidad de personas</h1>
                <div class="people-options">
                    <button class="circle">1</button>
                    <button class="circle">2</button>
                    <button class="circle">3</button>
                    <button class="circle">4</button>
                    <button class="circle">5</button>
                    <button class="circle">6</button>
                    <button class="circle">7</button>
                    <button class="circle">8</button>
                    <button class="circle">9</button>
                    <button class="circle">10</button>
                </div>
            </div>
            <div class="date-time-selection">
                <h1>Selecciona fecha y hora</h1>
                <!-- <input class="date-input" type="date" id="datePicker" min="2023-10-30" required>
                <input class="time-input" type="time" id="timePicker" min="10:00" max="22:00" required> -->
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev"><iconify-icon icon="mingcute:left-fill" width="20" height="20"></iconify-icon></span>
                            <span id="next"><iconify-icon icon="mingcute:right-fill" width="20" height="20"></iconify-icon></span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Dom</li>
                            <li>Lun</li>
                            <li>Mar</li>
                            <li>Mie</li>
                            <li>Jue</li>
                            <li>Vie</li>
                            <li>sáb</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>

                </div>
                
            </div>
            <button id="reserveButton">Reservar</button>
        </div>
    </div>
</main>

<?php include("pie2.php"); ?>