


<?php 
require_once "./db/conexion/conexion.php";
$conexion = new Conexion;

$consulta1 = "SELECT * FROM `busqueda` ; ";
$sql0 = $conexion->obtenerDatos($consulta1);
$id = $sql0[0]['id_busqueda'];
$palabra= $sql0[0]['palabra'];

$consulta2 = "SELECT * FROM `libro` WHERE titulo = '$palabra'; ";
$sql = $conexion->obtenerDatos($consulta2);




$consulta3 = "DELETE FROM `busqueda` WHERE id_busqueda = '$id'; ";
$sqlDel = $conexion->nonQuery($consulta3);
?>
<!--busqueda por titulo-->
<div class="container">
<h2> Resultados de busqueda</h2>
    <?php
            for ($i=0; $i < count($sql); $i++) {
                ?>
            
                <div class="col s12 m7">
                    <h3 class="header"><?php echo $sql[$i]['titulo']; ?></h3>
                    <div class="card horizontal">
                   
                        
                        <img class="responsive-img" width="230px" src="./libros/portadas/<?php echo $sql[$i]['codigoArchivo'].'.'.'jpg'; ?>">

                    
                    <div class="card-stacked">
                        <div class="card-content">
                        <p><?php echo $sql[0]['descripcion']; ?></p>
                        </div>
                        <div clas="row">
                            <div class="card-action">
                            <a href="?menu=lectorPdf&codigo=<?php echo $sql[$i]['codigoArchivo']?>">LEER</a>
                            </div>

                        </div>
                        
                    </div>
                    </div>
                </div>
                    

        <?php
            }
        ?>

  
</div>

<!--busqueda por autor-->
<?php
$consultaid = "SELECT * FROM `library`.`autor` WHERE (CONVERT(`id_autor` USING utf8) LIKE '%".$palabra."%' OR CONVERT(`nombre` USING utf8) LIKE '%".$palabra."%' OR CONVERT(`apellidoP` USING utf8) LIKE '%".$palabra."%' OR CONVERT(`apellidoM` USING utf8) LIKE '%".$palabra."%' OR CONVERT(`correo` USING utf8) LIKE '%".$palabra."%') ; ";
$consId = $conexion->obtenerDatos($consultaid);
?>
<div class="container">

    <?php
            for ($i=0; $i < count($consId); $i++) {
                $idAutor = $consId[$i]['id_autor'];
                $consult = "SELECT * FROM `libro` WHERE id_autor = '$idAutor'; ";
                $sql2 = $conexion->obtenerDatos($consult);

                ?>
            
                <div class="col s12 m7">
                    <h3 class="header"><?php echo $sql2[0]['titulo']; ?></h3>
                    <div class="card horizontal">
                   
                        
                        <img class="responsive-img" width="230px" src="./libros/portadas/<?php echo $sql2[0]['codigoArchivo'].'.'.'jpg'; ?>">

                    
                    <div class="card-stacked">
                        <div class="card-content">
                        <p><?php echo $sql2[0]['descripcion']; ?></p><br><br>
                
                        <b><p><?php echo $consId[$i]['nombre']." ".$consId[$i]['apellidoP']." ".$consId[$i]['apellidoM'] ?></p></b>


                        </div>
                        <div clas="row">
                            <div class="card-action">
                            <a href="?menu=lectorPdf&codigo=<?php echo $sql2[0]['codigoArchivo']?>">LEER</a>
                            </div>

                        </div>
                        
                    </div>
                    </div>
                </div>
                    

        <?php
            }
        ?>

  
</div>