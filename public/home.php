<?php
    require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;
    $consulta = "SELECT `titulo`,`codigoArchivo`FROM `libro`;";
    $sql = $conexion->obtenerDatos($consulta);
?>
<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/b.css">

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
                    
                        <h3>Autores mas populares</h3>
                        <div class="divider"></div>
                            <div class="section">
                                <h5>Autor 1</h5>
                                <p>Stuff</p>
                            </div>
                            <div class="divider"></div>
                            <div class="section">
                                <h5>Autor 2</h5>
                                <p>Stuff</p>
                            </div>
                            <div class="divider"></div>
                            <div class="section">
                                <h5>Autor 3</h5>
                                <p>Stuff</p>
                            </div>
                    
                </div>
            </div>
       
        </div>
        <!-- Lado Derecho -  Top´s -->
        <div class="col s12 m4 ">
            <div class="card card-panel" >
                <div class="row">
                    <h5 class="center-align | top-tl">Lo mas destacado</h5>
                </div>
                <div class="card hoverable">
                    <div class="row | top" >
                        <div class="col s3" >
                            <h4 class="center-align | titulo">#01</h4>
                        </div>
                        <div class="col s9" >
                            <span class="titulo-nvl">Titulo de la lectura</span>
                            <br>
                            <a href="#!" class="collection-item"><span class="new badge">000</span>Visitas</a>
                            <br>
                            <label for="">Calificación</label>
                        </div>
                    </div> 
                </div>
                <div class="card hoverable">
                    <div class="row | top">
                        <div class="col s3">
                            <h4 class="center-align | titulo">#02</h4>
                        </div>
                        <div class="col s9">
                            <span class="titulo-nvl">Titulo de la lectura</span >
                            <p>Visitas 000K</p>
                            <label for="">Calificación</label>
                        </div>
                    </div>
                </div>
                <div class="card hoverable">
                    <div class="row | top">
                        <div class="col s3">
                            <h4 class="center-align | titulo">#03</h4>
                        </div>
                        <div class="col s9">
                            <span class="titulo-nvl">Titulo de la lectura</span>
                            <p>Visitas 000K</p>
                            <label for="">Calificación</label>
                        </div>
                    </div>
                </div>
                <div class="card hoverable">
                    <div class="row | top">
                        <div class="col s3">
                            <h4 class="center-align | titulo">#04</h4>
                        </div>
                        <div class="col s9">
                            <span class="titulo-nvl">Titulo de la lectura</span>
                            <p>Visitas 000K</p>
                            <label for="">Calificación</label>
                        </div>
                    </div>
                </div>
                <div class="card hoverable">
                    <div class="row | top">
                        <div class="col s3">
                            <h4 class="center-align | titulo">#05</h4>
                        </div>
                        <div class="col s9">
                            <span class="titulo-nvl">Titulo de la lectura</span>
                            <p>Visitas 000K</p>
                            <label for="">Calificación</label>
                        </div>
                    </div>
                </div>
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