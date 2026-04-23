<?php  
    
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
            </script>
        
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenida - JARVIS</title>
    <script src="https://kit.fontawesome.com/8a9c1770f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/estilos_bienvenida.css">
</head>

<body>

        <header>
            <H1>BIENVENIDO AL MUNDO JARVIS</H1>
            <div class="header__superior">
                <div class="logo">.
                    <img src="../assets/imagenes/logo.png" alt="">
                </div>
                <div class="search">
                    <input type="search" placeholder="¿Qué deseas hacer?">
                </div>
            </div>
            <div class="container__menu">
                <div class="menu">
                    <input type="checkbox" id="check__menu">
                    <label for="check__menu" id="label__check">
                        <i class="fas fa-bars icon__menu"></i>

                    </label>
                    <nav>
                        <ul>
                            <li><a href="#" id="selected"></a></li>
                            <li><a href="#">Trámites empleados</a>
                        <ul>
                                <li><a href="../php/colillas_de_pago.php">Colillas de pago</a></li>
                                <li><a href="#">Simulador de nómina</a></li>
                                <li><a href="#">Actualización de datos</a></li>
                                <li><a href="#">Turnos empleados</a></li>
                                <li><a href="#">Contento te escucha</a></li>
                            </ul>
                            
                        </li>
                        <li><a href="#">Trámites administrativos</a>
                        <ul>
                                <li><a href="#">Usuarios Jarvis</a></li>
                                <li><a href="#">Incapacidades</a></li>
                                <li><a href="#">Gestion</a></li>
                                <li><a href="#">Reportar un problema</a></li>
                            </ul>
                    </li>
                        <li><a href="#">Area de soporte</a>
                        <ul>
                                <li><a href="#">Gestión de equipos</a></li>
                                <li><a href="#">Tickets</a></li>
                                <li><a href="#">Chat soporte</a></li>
                                <li><a href="#">Reportar un problema</a></li>
                            </ul>
                    </li>
                        <li><a href="#">Certificados</a>
                        <ul>
                                <li><a href="#">Certificado de retención</a></li>
                                <li><a href="#">Certificado laboral</a></li>
                                <li><a href="#">Certificado DIAN</a></li>
                                <li><a href="#">certificado vacaciones</a></li>
                            </ul>
                    </li>
                        <li><a href="#">Fondo de empleados Contento</a></li>

                        <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
                    </ul>
                    
                </nav>
                    
                </div>
                
            </div>
            



        </header>

        <main>
            <article>
                <h2>Nuestra idea de tenerte!!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, nisi nam. Itaque vero possimus deleniti in tempore. Quasi sequi ad cupiditate? Cumque dolore dicta quos voluptatem unde repellendus tempora asperiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus libero blanditiis, obcaecati beatae iste numquam aliquam possimus dolores dolorum itaque facilis! Delectus vero id ipsam? Ipsum harum odit debitis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore nihil ipsam iste, labore explicabo minus. Ea et sunt blanditiis omnis commodi tenetur consectetur excepturi, itaque, quibusdam aperiam voluptate odit ratione.</p>
            </article>
                        <article>
                <h2>Que es JARVIS CONTENTO BPS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et.</p>
            </article>
                        <article>
                <h2>Un deseo!!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus nisi quae, temporibus ut alias eos maiores enim, laboriosam, nesciunt fugiat suscipit architecto minima exercitationem voluptas! Aperiam ex animi possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas laborum voluptates natus distinctio quod quisquam, totam veritatis ut officiis dicta, alias repellendus optio ullam autem neque magni! Sunt, omnis.</p>
            </article>
                        <article>
                <h2>Lo que esperamos con JARVIS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et. ,Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates repudiandae quis, exercitationem, distinctio repellendus, fugiat voluptas debitis repellat in praesentium voluptatibus maiores accusantium hic corrupti assumenda officiis facere unde qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, ratione tempore! Quis aut repellendus doloribus blanditiis saepe autem earum rerum animi obcaecati repellat. Voluptatum, inventore? Ipsum qui quo odio velit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores dolores dolor vitae, quod sapiente totam cupiditate officiis doloremque, voluptate in, nemo tempore neque. Eveniet quisquam qui odio dignissimos ducimus quibusdam.</p>
            </article>
                        <article>
                <h2>Nuestro propósito...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro exercitationem sapiente velit officia, suscipit dignissimos consequatur optio molestiae, error id repellat inventore dolorem nulla enim. Illo beatae aliquid nobis praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium aspernatur accusamus perspiciatis aperiam, eos distinctio mollitia sint quasi inventore adipisci sapiente temporibus quia molestiae consequatur ad error tempora, minus cupiditate. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde modi eveniet hic vero repudiandae dicta, atque, veritatis accusamus ea dolor exercitationem facilis explicabo dolorum at dolorem dolore tempore harum natus?</p>
            </article>
                        <article>
                <h2>Los que hacemos parte de este sueño JARVIS!!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio commodi temporibus odit quia quasi dolores consequuntur sunt accusantium numquam. Nulla iusto voluptas rerum unde autem aliquid dignissimos officiis et. Lorem, ipsum dolor sit amet consectetur adipisicing elit. A exercitationem, sit modi quam, deserunt culpa quis veritatis iusto labore assumenda, voluptas sed qui. Pariatur, corrupti fugiat! Fugiat recusandae sit quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dicta voluptatum fugit itaque consectetur rerum. Possimus amet similique eius debitis pariatur est fugiat, tempora temporibus sequi? Rerum alias dolore ipsum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio odit quos numquam reprehenderit consequuntur asperiores, suscipit illo! Accusamus aliquam itaque molestiae quod, numquam debitis voluptates dolorum temporibus sed facilis quidem.</p>
            </article>
        </main>

    
</body>

</html>