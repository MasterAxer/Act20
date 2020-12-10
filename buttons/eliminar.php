<?php
    require '../conexion/conexion.php';

    $id=$_GET['id'];
    $eliminar="DELETE FROM usuarios WHERE id='$id'";
    $resultado=mysqli_query($conexion,$eliminar);
    if($resultado){
        //header("location:checausr.php");
        echo "<script>window.location='../views/checausr.php';</script>";
    }
    mysqli_close($conexion);

    
?>