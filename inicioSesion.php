<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inicioSesion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>  
    <script src="./js/funciones.js"></script>
    <title>login</title>
</head>


<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="info">
            <p class="txt1">¡Gracias por visitarnos!</p>
            <h2>Reserva ya iniciando sesión!</h2>
            <hr>
            <p class="txt2">
                Reserva y/o brinda tus servicios en nuestra plataforma de
                forma rápida y sencilla.
            </p>
        </div>

        <form class="form">
            <h2>Iniciar sesión</h2>
            <div class="inputs">
                <input type="email" class="box" placeholder= "Correo Electrónico" required>
                <input type="password" class="box" placeholder= "Contraseña" required>
                <a href="#">¿Olvidaste tu Contraseña?</a>                
                <!-- <input type="checkbox" class="check-box"><span>Recordar Contraseña. </span> -->
                <div>
                    <button class="button type1">
                        <span class="btn-txt">Iniciar sesión</span>
                    </button>
                </div>
                <br><br>
                <p>¿Eres nuevo? <a href="#"><strong>Regístrate</strong></a></p>
            </div>
        </form>        
    </div>

    <div class="container2">
        <div class="info-registro">
            <p class="txt1-registro">¡Gracias por visitarnos!</p>
            <h2>Reserva ya iniciando sesión!</h2>
            <hr>
            <p class="txt2-registro">
                Reserva y/o brinda tus servicios en nuestra plataforma de
                forma rápida y sencilla.
            </p>
        </div>

        <form class="form-registro">
            <h2>Regístrate</h2>
            <div class="inputs-registro">
                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="bx:rename" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="text" class="box-registro" placeholder= "Ingrese sus nombres" required>                     
                </div>

                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="fluent:rename-16-regular" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="text" class="box-registro" placeholder= "Ingrese sus apellidos" required>
                </div>

                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="mdi:id-card-outline" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="text" class="box-registro" placeholder= "Ingrese su DNI" required>
                </div>

                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="solar:phone-linear" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="text" class="box-registro" placeholder= "Ingrese su celular" required>
                </div>

                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="dashicons:email" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="email" class="box-registro" placeholder= "Ingrese su correo" required>
                </div>

                <div class="grupo-registro">
                    <div id="seccion-registro">
                        <iconify-icon icon="solar:lock-password-bold" width="20" height="20"></iconify-icon>
                    </div>  
                    <input type="password" class="box-registro" placeholder= "Ingrese una contraseña" required>
                </div>

                <div>
                    <button class="button type1">
                        <span class="btn-txt">Registrarme</span>
                    </button>
                </div>
            </div>
        </form>                
    </div>
    <br><br><br>
</body>
</html>
