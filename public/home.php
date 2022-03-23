<?php
    require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;
    $consulta = "SELECT * FROM `libro`";
    $sql = $conexion->obtenerDatos($consulta);

    $consulta2 = "SELECT * FROM `autor`";
    $sql2 = $conexion->obtenerDatos($consulta2);


?>
<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/c.css">

<!-- Contenido de la pagina principal -->

<div class="container">
    <div class="row | content" >

        <div class="col s12 m8 espacio">
            <section class="ventana">
                <div class="carousel carousel-slider" data-indicators="true">
                    <div class="carousel-fixed-item">
                        <div class="container">
                            <h2 class="white-text indigo darken-4 | titulo | center-align ">Estrenos mas recientes</h2>
                        </div>
                    </div>
                    <div class="carousel-item slime-item01   black-text" href="#one!">
                        <div class="container">
                            <h2>La Novia Sustituta </h2>
                            <p class="black-text">LUCÍA DE AVILA</p>
                        </div>
                    </div>
                    <div class="carousel-item  slime-item02 black-text" href="#two!">
                        <div class="container">
                            <h2>No tenemos un papá <br> cualquiera </br></h2>
                            <p class="black-text">ADRIANA VENTURA</p>
                        </div>
                    </div>
                    <div class="carousel-item  slime-item03 black-text" href="#three!">
                        <div class="container">
                            <h2>Esposa Olvidada</h2>
                            <p class="black-text">PATRICIA MARADIAGA</p>
                        </div>
                    </div>
                    <div class="carousel-item  slime-item04  black-text" href="#four!">
                        <div class="container">
                            <h2>Mi CEO Infantil <br>y Mandón </br></h2>
                            <p class="black-text">TATIANA COREA</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="row">
                <div class="col s12 ">
                    
                    <h3>Autores más populares</h3>
                   
                    <?php
                    for ($i=0; $i < 5; $i++) {
                    ?>

                        <div class="divider"></div>
                            <div class="section">
                               
                                <h5><?php echo $sql2[$i]['nombre']?>  <?php echo $sql2[$i]['apellidoP']?></h5>
                                <p>Stuff</p>
                 
                            </div>
                    <?php
                    }
                    ?>        
                           
                   
                </div>
            </div>
           
       
        </div>
        <!-- Lado Derecho -  Top´s -->
        <div class="col s12 m4 ">

            <div class="card card-panel" >
                <div class="row">
                    <h5 class="center-align | top-tl">Lo mas destacado</h5>
                </div>
                <scroll-container>
                <?php
                for ($i=0; $i < 10; $i++) {
                ?>
                <scroll-page >
                    <div class="card hoverable">
                        <div class="row | top" >
                            <div class="col s3" >
                                <h4 class="center-align | titulo">#0<?php echo $i+1 ?></h4>
                            </div>
                            <div class="col s9" >
                                <span class="titulo-nvl"><?php echo $sql[$i]['titulo']?></span>
                                <br>
                                <a href="?menu=lectorPdf&codigo=<?php echo $sql[$i]['codigoArchivo']?>" class="collection-item">LEER</a>
                                <br>
                                <label for="">Calificación</label>
                                
                            </div>
                            <img class="responsive-img" width="135px" src="./libros/portadas/<?php echo $sql[$i]['codigoArchivo']?>.jpg">
                        </div> 
                    </div>
                    </scroll-page>
                <?php
                   }
                ?>

</scroll-container>
               
               
               
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
    // CAROUSEL
    $(document).ready(function () {
        $('.carousel').carousel(
            {
                dist: 0,
                padding: 0,
                fullWidth: true,
                indicators: true,
                duration: 50,
            }
        );
    });

    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 3000);
    }
</script>