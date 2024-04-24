<?php
    $servername="localhost";
    $username= "root";
    $password= "";
    $db_name= "systemphp";
    $datosdb = mysqli_connect($servername, $username, $password, $db_name);
    
    if ($datosdb===false) {
        die("Ha fallado la conexion");
    
    }
    
    // para validar cual fue el tipo de usuario que se acaba de loguear
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $username=$_POST[$username];  
        // los nombres que aca se ponen deben matchear con los nombres que se definieron en el apartado de name del formulario de html
        $password=$_POST[$password];

        // traer tu dato de la db para verificar si son iguales con los que se acaban de ingresar
        $consultasql="SELECT * FROM usuarios WHERE username='".$username."' AND password='".$password."'";

        $result=mysqli_query($datosdb, $consultasql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]== "user"){
            header("location:homepage.php");
        }
        
        elseif($row["usertype"]== "admin"){
            header("location:editorpage.php");
        }
        elseif($row[""]== ""){
            echo"Datos erroneos, vuelva a ingresar";
        }




    }
    


