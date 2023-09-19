<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inicioSesion.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="info">
            <p class="txt1">
                ¡Gracias por visitarnos!
            </p>
            <h2>
                Reserva ya iniciando sesión!
            </h2>
            <hr>
            <p class="txt2">
                Reserva y/o brinda tus servicios en nuestra plataforma de
                forma rápida y sencilla.
            </p>
        </div>

        <form class="sesion" action="post">
            <h2>Inicia Sesión</h2>

            <div class="datos">
                <input type="email" class="box" placeholder="Ingresa tu correo">
                <input type="password" class="box" placeholder="Ingresa tu contraseña">

                <a href="#">¿Olvidaste tu contraseña?</a>
                
                <!-- <input type="submit" value="login" class="submit"> -->
                <button class="button" type="submit">
                    Iniciar sesión
                </button>
                <br>
                <p>¿No tienes una cuenta? <a href="#">Regístrate</a></p>
            </div>
        </form>
    </div>
</body>

</html>