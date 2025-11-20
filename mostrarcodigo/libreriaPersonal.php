<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Código de libreria personal</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }
            body{
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
                text-align: justify;
                margin-top: 10px;
                margin-bottom: 10px;

                p{
                    font-weight: bold;
                }
            }

            footer{
                margin: auto;
                background-color: #456d96;
                text-align: center;
                align-content: center;
                height: 50px;;
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
            <h2>Código de libreria personal</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php 
                    highlight_file("../core/libreriaPersonal.php");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema5.php">
                Álvaro Allén Perlines
                </a>
                <time datetime="2025-11-20">20-11-2025</time>
            </div>
        </footer>
    </body>
</html>