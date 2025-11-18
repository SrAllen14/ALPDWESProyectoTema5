<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 0</title>
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
                width: 1500px;
                border: 1px solid black;
                border-radius: 10px;
                padding: 15px;   
            }
            
            table{
                border-collapse: collapse;
                margin-top: 10px;
                margin-bottom: 10px;
                & td{
                    border: 1px solid black;
                }
            }
            
            .nombre{
                background-color: lightblue;
                font-weight: bold;
            }

            .valor{
                background-color: antiquewhite;
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
            <h2>Ejercicio 0</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Allén
                     * @since 17-11-2025
                     * Mostramos el contenido de las variables superglobales y de phpInfo();
                     */
                    
                // Mostrando el contenido de las variables superglobales. Vamos a usar bucles como for() o foreach().
                    echo '<h2>Valores de la variable superglobal: $_SERVER</h2>';
                    echo "<table>";
                    if(!empty($_SERVER)){
                        foreach ($_SERVER as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_SESSION</h2>';
                    echo "<table>";
                    if(!empty($_SESSION)){
                        foreach ($_SESSION as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    }  else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_REQUEST</h2>';
                    echo "<table>";
                    if(!empty($_REQUEST)){
                        foreach ($_REQUEST as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_ENV</h2>';
                    echo "<table>";
                    if(!empty($_ENV)){
                        foreach ($_ENV as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_COOKIE</h2>';
                    echo "<table>";
                    if(!empty($_COOKIE)){
                        foreach ($_COOKIE as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_POST</h2>';
                    echo "<table>";
                    if(!empty($_POST)){
                        foreach ($_POST as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_GET</h2>';
                    echo "<table>";
                    if(!empty($_GET)){
                        foreach ($_GET as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo '<h2>Valores de la variable superglobal: $_FILES</h2>';
                    echo "<table>";
                    if(!empty($_FILES)){
                        foreach ($_FILES as $key => $value) {
                            echo "<tr>";
                            echo "<td class='nombre'>{$key}</td>";
                            echo "<td class='valor'>{$value}</td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr>";
                        echo "<td class='nombre'>No hay variable</td>";
                        echo "<td class='valor'>No hay valor</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    
                    /* ************************* */
                    // phpinfo();
                    
                    echo '<h3>phpInfo()</h3>';
                    phpinfo();
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema5.php">
                Álvaro Allén Perlines
                </a>
                <time datetime="2025-11-17">17-11-2025</time>
            </div>
        </footer>
    </body>
</html>
