<!-- Estilos en CSS -->
<?php
require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;
    $correo = $_SESSION['loggedUserName'];
    $consulta0 = "SELECT * FROM `usuarios` WHERE correo = '$correo'; ";
    $sql0 = $conexion->obtenerDatos($consulta0);
    $idUser = $sql0[0]['id_user'];

    $consulta1 = "SELECT * FROM `listalibro` WHERE id_user = '$idUser';";
    $sql1 = $conexion->obtenerDatos($consulta1);



?>

<!DOCTYPE html>
<html lang="es">
    <h2> Mis lecturas</h2>
    <?php
            for ($i=0; $i < count($sql1); $i++) {
                $idLibro = $sql1[$i]['id_libro'];
                $consulta2 = "SELECT *FROM `libro` WHERE id_libro = '$idLibro'; ";
                $sql2 = $conexion->obtenerDatos($consulta2);


                ?>
            
                <div class="col s12 m7">
                    <h3 class="header"><?php echo $sql2[0]['titulo']; ?></h3>
                    <div class="card horizontal">
                   
                        
                        <img class="responsive-img" width="230px" src="./libros/portadas/<?php echo $sql2[0]['codigoArchivo'].'.'.'jpg'; ?>">

                    
                    <div class="card-stacked">
                        <div class="card-content">
                        <p><?php echo $sql2[0]['descripcion']; ?></p>
                        </div>
                        <div clas="row">
                            <div class="card-action">
                            <a href="?menu=lectorPdf&codigo=<?php echo $sql2[0]['codigoArchivo']?>">Continuar Lectura</a>
                            </div>
                            <div class="card-action">
                            <a href="?menu=quitarDeLista&id=<?php echo $sql2[0]['id_libro']?>">Quitar de la lista</a>
                            </div>

                        </div>
                        
                    </div>
                    </div>
                </div>
                    

        <?php
            }
        ?>

</html>



