<html lang="es"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indice general de la asignatura">
    <meta name="author" content="Álvaro Allén Perlines">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Álvaro Allén Perlines</title>
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
            height: 72px;
            line-height: 72px;
        }
        
        div.tabla1{
            margin:10px auto 10px auto;
            padding: 10px;
            width: 750px;
            
            border-radius: 20px;
            background-color: white; 
        }
        
        table.bd{
            width: 650px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        
        div.tabla2{
            margin:10px auto 10px auto;
            padding: 10px;
            width: 1500px;
            
            border-radius: 20px;
            background-color: white; 
        }
        
        table.ejer{
            width: 1400px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
        }
        
        img{
            width: 50px;
            height: 50px;
        }
        
        
        .principal{
            font-weight: bold;
            text-align: center;
        }
        
        
        
        td{
            height: auto;
            width: auto;
            border: 1px solid gray;
        }
        
        .imagen{
            text-align: center;
            height: 50px;
            width: 50px;
            img{
                height: 100%;
                width: 100%;
            }
        }
        
        .ejer td:nth-of-type(1){
            width: 50px;
            text-align: center;
        }
        
        footer{
            margin: auto;
            background-color: #456d96;
            text-align: center;
            align-content: center;
            height: 10%;
	    color: white;
            
            & a{
               text-decoration: none; 
            }
            
            i{
                width: 10px;
                height: 10px;
                color: white;
            }
        }
        

    </style>
</head>
<body>
    <nav>
        <h2>Proyecto Tema 5</h2>
    </nav>
    <main>
        <div class="tabla1">
            <table class="bd">
                <tr class="principal">
                    <td>Archivo</td>
                    <td>ED Script</td>
                    <td>EE Script</td>
                    <td>Archivos externos</td>
                    <td>Script</td>
                </tr>
                <tr>
                    <td>Script creación de base de datos y usuario</td>
                    <td class="imagen"><a href="mostrarcodigo/script1.php"><img src="webroot/images/code.png"></a></td>
                    <td rowspan="2" class="imagen"><a href="mostrarcodigo/script1.php"><img src="webroot/images/code.png"></td>
                    <td>Biblioteca Validación</td>
                    <td class="imagen"><a href="mostrarcodigo/libreriaValidacion.php"><img src="webroot/images/code.png"></a></td>
                    
                </tr>
                <tr>
                    <td>Script carga inicial de base de datos</td>
                    <td class="imagen"><a href="mostrarcodigo/script2.php"><img src="webroot/images/code.png"></a></td>
                    <td>Biblioteca Personal</td>
                    <td class="imagen"><a href="mostrarcodigo/libreriaPersonal.php"><img src="webroot/images/code.png"></a></td>
                    
                </tr>
                <tr>
                    <td>Script borrado de base de datos y usuario</td>
                    <td colspan="2" class="imagen"><a href="mostrarcodigo/script3.php"><img src="webroot/images/code.png"></a></td>
                    <td>Archivo configuración BD</td>
                    <td class="imagen"><a href="mostrarcodigo/conf.php"><img src="webroot/images/code.png"></a></td>
                </tr>
            </table>
        </div>
        <div class="tabla2">
            <table class="ejer">
                <tbody>
                    <tr class="principal">
                        <td>Nº</td>
                        <td>Enunciado</td>
                        <td>Ejecutar</td>
                        <td>Código</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                        <td class="imagen"><a href="codigoPHP/ejercicio0.php"><img src="webroot/images/play.png" alt="play.png"/></a></td>
                        <td class="imagen"><a href="mostrarcodigo/codigo0.php"><img src="webroot/images/code.png" alt="code.png"></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                        <td class="imagen"><a href="codigoPHP/ejercicio1.php"><img src="webroot/images/play.png" alt="play.png"/></a></td>
                        <td class="imagen"><a href="mostrarcodigo/codigo1.php"><img src="webroot/images/code.png" alt="code.png"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla "Usuario" de la base de datos (PDO)</td>
                        <td class="imagen"><a href="codigoPHP/ejercicio2.php"><img src="webroot/images/play.png" alt="play.png"/></a></td>
                        <td class="imagen"><a href="mostrarcodigo/codigo2.php"><img src="webroot/images/code.png" alt="code.png"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <div>
            <a href="/index.html">
           Álvaro Allén Perlines
            </a>
            <time datetime="2025-11-20">20-11-2025</time>
            <a href="https://github.com/SrAllen14/ALPDWESProyectoTema5/tree/master" target="blank"><i class="fa-brands fa-github fa-2x"></i></a>
        </div>
    </footer>
</body>
</html>