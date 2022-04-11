<?php
$_idLibro = $_POST['idLibro'];
$correo = $_POST['correo'];
$pag = $_POST['pagina'];
require_once "conexion/conexion.php";
$conexion = new Conexion;

$consulta1 = "SELECT * FROM `usuarios` WHERE correo = '$correo'; ";
$sql = $conexion->obtenerDatos($consulta1);
$idUser = $sql[0]['id_user'];


$consulta2 = "UPDATE `listalibro` SET `pagina`='$pag' WHERE id_user = $idUser AND id_libro = $_idLibro;";
$sql2 = $conexion->ingresarDatos($consulta2);
echo '<script>window.location.href="../index.php?menu=historias"</script>';

?>
       