<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }
            body{
                width: 1920px;
                height: 1080px;
                font-family: Arial, sans-serif;
                background: #f4f6f9;
                align-items: center;
                text-align: center;
            }

            nav{
                background-color: #456D96;
                color: white;
            }

            .ejercicio{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
                border: 1px solid black;
                border-radius: 10px;
                text-align: left;
                padding: 15px;
            }

            footer{
                margin: auto;
                background-color: #456d96;
                text-align: center;
                align-content: center;
                height: 50px;
                ;
                color: white;

                & a{
                    text-decoration: none;
                }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 5</h2>
            <h2>Ejercicio 1</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                /**
                 * @author Álvaro Allén
                 * @since 18-11-2025
                 * Control de acceso con identificación del usuario basado en la función header().
                 */
                
                
                if(!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== 'alvaro' || $_SERVER['PHP_AUTH_PW'] !== 'paso'){
                    header('WWW-Authenticate: Basic realm="Contenido restringido"');
                    
                    header('HTTP/1.0 401 Unauthorized');
                    
                    echo '<h3>Acceso denegado</h3>';
                    exit;
                }
                
                ?>
                
                <h3>Acceso permitido</h3>
                <p>Bienvenido <strong><?php echo $_SERVER['PHP_AUTH_USER']?></strong></p>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema5.php">
                    Álvaro Allén Perlines
                </a>
                <time datetime="2025-11-18">18-11-2025</time>
            </div>
        </footer>
    </body>
</html>
