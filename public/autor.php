<?php
$rol = $_SESSION['id_rol'];
$correo = $_SESSION['loggedUserName'];

require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;

    $consulta = "SELECT * FROM `autor` WHERE correo='$correo'";
    $sql = $conexion->obtenerDatos($consulta);
    $id = $sql[0]['id_autor'];
    $consulta2 = "SELECT * FROM `libro` WHERE id_autor='$id'";
    $sql2 = $conexion->obtenerDatos($consulta2);

?>


<!-- Estilos de CSS -->
<link rel="stylesheet" href="public/css/style_pcnt.css">

<!-- contenedor -->
<div class="content">
    <h4>Mis libros</h4>
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
                        <a href="#">This is a link</a>
                        </div>
                    </div>
                    </div>
                </div>
                    

        <?php
            }
        ?>

</div>

<!-- Gitter Chat Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
