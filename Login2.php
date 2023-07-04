<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/loginstyle2.css">

    <!-- Importar Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <!-- Columna izquierda - Iniciar Sesión -->
        <div class="left-column">
            <div class="text-center">
                <h1 class="mb-4">Iniciar Sesión</h1>
                <form action="functions/loginvalidation.php" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo o número celular" name="Correo" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contra" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Iniciar Sesión">
                    </div>
                </form>
            </div>
        </div>

        <!-- Columna derecha - Crear Cuenta -->
        <div class="right-column">
            <div class="text-center">
                <h1 class="mb-4">Crear Cuenta</h1>
                <p>Regístrate en nuestra plataforma para recibir beneficios u ofrecer productos y servicios.</p>
                <form action="createaccount.html">
                    <div class="form-group">
                        <input type="submit" class="btn btn-secondary btn-block" value="Crear Cuenta">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Importar Bootstrap JS al final del body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
