<?php
    include("conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SystemPHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="formulario">
        <div class="encabezado">
            <h1>Hola!</h1>
        </div>
        <form name="formulario_inicio" action="#" method="POST">
            <div class="username">   
                <label>Usuario</label>
                <input type="text" id="usuario" name="username" required="true">
            </div>
            <div class="password">
                <label>Contraseña</label>
                <input type="password" id="contrasena" name="password" required="true">
            </div>
            <div class="boton">
                <button type="submit">Enviar</button>
            </div>
            
        </form>
    
    </div>
    
</body>
</html>