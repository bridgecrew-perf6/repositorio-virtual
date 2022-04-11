<?php
$_idLibro = $_POST['idLibro'];
$correo = $_POST['correo'];

require_once "conexion/conexion.php";
$conexion = new Conexion;

$consulta1 = "SELECT * FROM `usuarios` WHERE correo = '$correo'; ";
$sql = $conexion->obtenerDatos($consulta1);
$idUser = $sql[0]['id_user'];


$consulta2 = "INSERT INTO `listalibro`(`pagina`, `id_user`, `id_libro`) VALUES ('1','$idUser','$_idLibro')";
$sql2 = $conexion->ingresarDatos($consulta2);
echo '<script>window.location.href="../index.php?menu=historias"</script>';

?>
       