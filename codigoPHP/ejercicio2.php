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
                require_once '../config/confDB.php';

                $nombreUsuario = "alvaro";
                $contrasenaUsuario = hash('sha256', 'paso');

                //inicialización de variables
                $aErrores = [
                    'user' => '',
                    'pass' => '',
                ];
                $aRespuestas = [
                    'user' => '',
                    'pass' => '',
                ];
                $entradaOK = true;

                //Para cada campo del formulario se valida la entrada y se actua en consecuencia
                if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                    //Validación de los datos de los campos del formulario
                    $aErrores['user'] = validacionFormularios::comprobarAlfanumerico($_REQUEST['user'], 80, 1, 1);
                    $aErrores['pass'] = validacionFormularios::comprobarAlfanumerico($_REQUEST['pass'], 8, 4, 1);

                    //recorre el array de errores para detectar si hay alguno
                    foreach ($aErrores as $campo => $valorCampo) {
                        if ($valorCampo != null) {//Si encuentra algún error 
                            $entradaOK = false; // la entrada no es correcta
                        }
                    }
                } else {
                    //Si no se ha aceptado el formulario
                    $entradaOK = false;
                }
                //Tratamiento del formulario
                if ($entradaOK) {
                    //Rellenamos el array de respuesta con los valores que ha introducido el usuario
                    $aRespuestas['user'] = $_REQUEST['user'];
                    $aRespuestas['pass'] = $_REQUEST['pass'];
                    
                    try{
                        $miDB = new PDO(DSN, USERNAME, PASSWORD);
                        
                        $sql = "SELECT T01_CodUsuario, T01_Password FROM T01_Usuario WHERE T01_CodUsuario = :usuario";
                        $consultaPreparada = $miDB->prepare($sql);
                        
                        $consultaPreparada->bindParam(':usuario', $aRespuestas['user']);
                        $consultaPreparada->execute();
                        
                        $aResultados = $consultaPreparada->fetch();
                        
                        if ($aRespuestas["user"] === $aResultados['T01_CodUsuario']) {
                            if (hash('sha256', $aRespuestas["pass"]) === $aResultados['T01_Password']) {
                                // En caso de que la contraseña sea correcta saludamos al usuario.
                                print('<br><h3>Bienvenido: ' . $aRespuestas["user"] . '</h3><br>');
                            } else {
                                // En caso de que la contraseña sea incorrecta se lo indicamos al usuario.
                                print('<br><h3>Contraseña incorrecta</h3>');
                            }
                        } else {
                            // En caso de que el usuario no exista lo indicamos.
                            print('<h3>El usuario no existe</h3>');
                        }
                    } catch(PDOException $exPDO){
                        echo 'Error al conectarse: '.$exPDO->getMessage();
                        echo 'Codigo de error: '.$exPDO->getCode();
                        echo 'Linea de error: '.$exPDO->getLine();
                    }
                } else {
                    //si hay algún error se vuelve a mostrar el formulario
                    ?>
                    <section>
                        <h2>Rellena el formulario.</h2>
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <label for="user">Usuario:</label>
                            <a style='color:red'><?php echo $aErrores['user'] ?></a><br>
                            <input name="user" id="user" type="text" value='<?php echo(empty($aErrores['user'])) ? ($_REQUEST['user'] ?? '') : ''; ?>'><br>
                            <br>
                            <label for="pass">Contraseña:</label>
                            <a style='color:red'><?php echo $aErrores['pass'] ?></a><br>
                            <input name="pass" id="pass" type="text" value='<?php echo(empty($aErrores['pass'])) ? ($_REQUEST['pass'] ?? '') : ''; ?>'><br>
                            <br>
                            <button type="submit" name="enviar">Enviar</button>

                        </form>  
                        <?php
                    }
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
