<?php
    require '../conexion/conexion.php';
    //Datos recibidos y almacenados en variables
    $nombre=$_POST["nombre"];
    $correo=$_POST["email"];
    $user=$_POST["usuario"];
    $pass=$_POST["pass"];
    //Validación campos vacíos
    if(strlen($nombre)>0&&strlen($correo)>0&&strlen($user)>0&&strlen($pass)>0)
    {
        //Consulta de inserción de datos
        $insertar="INSERT INTO usuarios(nombre,correo,login,password) 
        VALUES('$nombre','$correo','$user','$pass')";
        $query=mysqli_query($conexion,$insertar);
        if($query){
            echo "<script>window.location='../views/checausr.php';</script>";
        }
        mysqli_close($conexion);
    }
    else{
        echo "<script>window.location='../views/agregar.php';
            alert('Rellena todos los campos')</script>";
    }
?>