<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepagestyles.css">

    <!-- de una pagina que se llama remixicon se debe ir a su repositorio y copiar el cdn es de open sourse -->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <!-- de una pagina boxicons, lo mismo que el anterior -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header class="navbar">
        <!-- contenedor para la modificar el logo -->
        <div id="logo">
            <a href="login.php">
            <img src="logoimg.png" srcset="logoimg@2x.png 2x, logoimg@3x.png 3x" alt="Logo"/>
            </a>
        </div>



        <!-- contenedor para controlar la barra de busqueda -->
        <div class="busqueda">
            <input type="text" placeholder="&#xF0D1; Buscar">
            <i class="iconobusqueda"></i>
            <button type="submit">Buscar</button>
        </div>

        <!-- la barra de navegacion en si que es una etiqueta aparte -->
        <nav>
            <a href="#">Acerca de la herramienta</a>
            <a href="#">Contacto</a>

        </nav>

    <?php 
        $user = $_SESSION["user"];
        if($user->rol==="admin"){
    ?>
        <button>Crear nueva entrada</button>

        <!-- por cada tembo boton hay que poner asi  -->
    <?php
        }
    ?>
    </header>

    <h1>Texto de prueba</h1>
    <div class="texto">
        <p>
        Un blog1​ o bitácora2​ es un sitio web que incluye, a modo de diario personal de su autor o autores, contenidos de su interés, que suelen estar actualizados con frecuencia y a menudo son comentados por los lectores.1​

Sirve como publicación en línea de historias con una periodicidad muy alta, que son presentadas en orden cronológico inverso, es decir, lo más reciente que se ha publicado es lo primero que aparece en la pantalla. Antes era frecuente que los blogs mostraran una lista de enlaces a otros blogs u otras páginas para ampliar información, citar fuentes o hacer notar que se continúa con un tema que empezó otro blog.

Actualmente un blog puede tener diversas finalidades según el tipo, taxonomía o incluso su autoría, como por ejemplo para reforzar la marca personal del autor, generar información para comunidades temáticas concretas o incluso servir como medio para buscar oportunidades, etc.[cita req
        </p>
    </div>
    
    

    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>