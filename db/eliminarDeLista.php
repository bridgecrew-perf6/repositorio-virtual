<?php

    require_once "conexion/conexion.php";
    $conexion = new Conexion;

    $consulta = "DELETE FROM `listalibro` WHERE id_libro='$_idLibro';";
    $sql = $conexion->nonQuery($consulta);
    echo '<script>window.location.href="./index.php?menu=historias"</script>';
    
?>