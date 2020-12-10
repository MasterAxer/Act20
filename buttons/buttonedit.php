<?php
    require '../conexion/conexion.php';
    //Datos recibidos y almacenados en variables
    $id=$_POST['id'];
    $nombre=$_POST["nombre"];
    $correo=$_POST["email"];
    $user=$_POST["usuario"];
    $pass=$_POST["pass"];

       //Consulta de actualización de datos
    $actualizar="UPDATE usuarios SET nombre='$nombre',correo='$correo',login='$user',password='$pass'
         WHERE id='$id'";
        $query=mysqli_query($conexion,$actualizar);
        if($query){
            echo "<script>window.location='../views/checausr.php';</script>";
        }
        mysqli_close($conexion);
   
?>