
<?php 
require_once "conexion/conexion.php";
$conexion = new Conexion;
$palabra = $_POST['busc'];

$consulta = "INSERT INTO `busqueda`(`palabra`) VALUES ('$palabra')";
$sql = $conexion->ingresarDatos($consulta);


echo '<script>window.location.href="../index.php?menu=resBusqueda"</script>';
?>

