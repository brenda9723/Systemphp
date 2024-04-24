<?php
    include("conexion.php");
    // esta funcion es para verificar que no haya errores
    // se trae desde las dos variables que se le manda en el post que es el usuario y la contraseña
    if(isset($_POST["username"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        // aca hay que verificar por el sql si lo que traemos es correcto de la base de datos
        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

        // mostras una variable que guarda el resultado de tu conexion
        $result=mysqli_query($conn, $sql);
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
    
        if($count==1){
            header('Location:homepage.php');
        }
        else{
            echo 
            "<script>
                alert('Contraseña o usuario incorrecto, vuelva a ingresar');
                window.location.href='index.php';
            </script>";
        }
        
    };
?>
    <h1>Holiwis</h1>





