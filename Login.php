<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QBuscas.com</title>
        <link rel="stylesheet" href="styles/loginstyle.css">

    </head>
    <body>
        <section id="container">
            <div id="login">
                <div id="iniciosesion">
                    <div id="logo">
                        <img src="src/logo-PhotoRoom.png-PhotoRoom.png" alt>
                    </div>
                    <form action="functions/loginvalidation.php" method="POST">
                        <div>
                            <h1>Ingrese a su cuenta</h1>
                        </div>
                        <div class="inp">
                            <input type="text" placeholder="Correo o número celular" name="Correo" id="Correo" required>
                        </div>
                        <div class="inp">
                            <input type="password" placeholder="Contraseña" name="contra" required>
                        </div>
                        <a href="">Olvidaste tu contraseña</a>
                        <div class="inp">
                            <input type="submit" value="Iniciar sesión"
                                class="but" id="inises">
                        </div>
                    </form>
                </div>
                <div id="crearcuenta">
                    <form action="createaccount.php">
                    <div class="crcu" id="titu">
                        <h1>¿Eres nuevo?</h1>
                    </div>
                    <div class="crcu">
                        <p>Regístrate en nuestra plataforma para recibir
                            beneficios u ofrecer productos y servicios</p>
                    </div>
                    <div class="crcu">
                        <input type="submit" value="Crear Cuenta" class="but" id="crecu">
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>