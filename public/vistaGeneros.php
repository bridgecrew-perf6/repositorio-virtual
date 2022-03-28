<?php
    require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;
    $consulta = "SELECT `id_categoria` FROM `categorias` WHERE categoria = '$_categoria'; ";
    $sql = $conexion->obtenerDatos($consulta);
    $id_categoria = $sql[0]['id_categoria'];

    $consulta2 = "SELECT * FROM `libro` WHERE id_categoria = '$id_categoria';";
    $sql2 = $conexion->obtenerDatos($consulta2);


?>
<!DOCTYPE html>
<html lang="es">
    <h2> <?php echo $_categoria ?></h2>
    <?php
            for ($i=0; $i < count($sql2); $i++) {
                ?>
            
                <div class="col s12 m7">
                    <h3 class="header"><?php echo $sql2[$i]['titulo']; ?></h3>
                    <div class="card horizontal">
                   
                        
                        <img class="responsive-img" width="230px" src="./libros/portadas/<?php echo $sql2[$i]['codigoArchivo'].'.'.'jpg'; ?>">

                    
                    <div class="card-stacked">
                        <div class="card-content">
                        <p><?php echo $sql2[$i]['descripcion']; ?></p>
                        </div>
                        <div class="card-action">
                        <a href="?menu=lectorPdf&codigo=<?php echo $sql2[$i]['codigoArchivo']?>">LEER LIBRO</a>
                        </div>
                    </div>
                    </div>
                </div>
                    

        <?php
            }
        ?>

</html>


