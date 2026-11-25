<?php
    $host ="localhost";
    $user="root";
    $password="";
    $db="base_portafolio";

    $con=mysqli_connect($host, $user, $password, $db) or die("Porblema al conectar");
        mysqli_select_db($con,$db);

    //Trabajando con las variables
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Correo = $_POST["Correo"];
    $Celular = $_POST["Celular"];
    $Descripción = $_POST["Descripción"];
    $sql="INSERT INTO `registro_contactadores` VALUES ('$Nombre','$Apellido','$Correo','$Celular','$Descripción')";
    $ejecutar = mysqli_query($con, $sql); 
     //Usamos las condiciones
        if (!$ejecutar){
            echo "<script>alert('Problemas al Enviar')</script>";
            echo "<script>window.location.href=('index.html')</sript>')";
        } else {
            echo "<script>alert('Datos enviados correctamente')</script>";
            echo "<script>window.location.href=('index.html')</script>";
        }
?>