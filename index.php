<?php

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro JARVIS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos_index.css">
</head>
<body>

    <main>
        
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrarse para iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>                
            </div>
        </div>
            <div class="contenedor__login-register">

                <form action="http://localhost/logueo-registro/php/login_usuario_be.php" method="post" class="formulario__login">

                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                
                <form action="http://localhost/logueo-registro/php/registro_usuario_be.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
        <script src="assets/js/script.js"></script>
    </main>
</body>
</html>