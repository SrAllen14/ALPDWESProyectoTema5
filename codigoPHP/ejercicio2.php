<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
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
            <h2>Ejercicio 2</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                /**
                 * @author Álvaro Allén
                 * @since 17-11-2025
                 * Control de acceso con identificación del usuario basado en la función header() y
                 * uso de la tabla "Usuario" de la base de datos.
                 */
                // Establecemos la configuración de fecha, hora y formato de España
                setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                // Definimos una variable de tipo DateTime con la fecha actual de España
                // Enlace para importar las librerías de validación de campos
                require_once '../core/231018libreriaValidacion.php';
                require_once '../core/miLibreriaValidacion.php';
                // Enlazamos el archivo de configuración para poder acceder a la base de datos.
                require_once '../config/confDB.php';

                $validacionUsuario = false;
                
                if(!isset($_SERVER['PHP_AUTH_USER'])){
                    // En caso de no haber rellenado el campo de la variable $_SERVER, volvemos a mostrar la ventana emergente para rellenarlo.
                    header('WWW-Authenticate: Basic realm="Contenido restringido"');
                    header('HTTP/1.0 401 Unauthorized');
                    
                    echo '<h3>Acceso restringido</h3>';
                    exit;
                } else{
                    // En caso de haber rellenado los campos
                    try{
                        // Guardamos la contraseña introducida concatenada con el nombre de usuario.
                        $usuarioPassword = $_SERVER['PHP_AUTH_USER'].$_SERVER['PHP_AUTH_PW'];
                        
                        // Creamos un objeto de la clase PDO conectado a la base de datos.
                        $miDB = new PDO(DSN, USERNAME, PASSWORD);
                        
                        // Realizamos la consulta preparada con las condicion de que el usuario exista y su contraseña sea el resument de usuario+contraseña.
                        $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = :usuario AND T01_Password = sha2(:pass, 256)";
                        $consulta = $miDB->prepare($sql);
                        $consulta->execute([
                            ':usuario' => $_SERVER['PHP_AUTH_USER'],
                            ':pass' => $usuarioPassword
                        ]);
                        
                        $resultado = $consulta->rowCount();
                        if($resultado === 1){
                            // Si existe un usuari y la contraseña coincide, cambiamos el valor de la bandera a true.
                            $validacionUsuario = true;
                        }
                    } catch(PDOException $exPDO){
                        echo '<p>Mensaje de error: '.$exPDO->getMessage().'</p>';
                    } finally {
                        unset($miDB);
                    }
                    
                    if(!$validacionUsuario){
                        // En caso de que no exista el usuario y la contraseña sea incorrecta se muestra la ventana emergente solicitando los datos de nuevo.
                        header('WWW-Authenticate: Basic realm="Contenido restringido"');
                        header('HTTP/1.0 401 Unauthorized');
                    
                        echo '<h3>Acceso restringido</h3>';
                        exit;
                    }
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
                <time datetime="2025-11-19">19-11-2025</time>
            </div>
        </footer>
    </body>
</html>
