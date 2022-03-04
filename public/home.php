<?php
    require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;
    $consulta = "SELECT `titulo`,`codigoArchivo`FROM `libro`;";
    $sql = $conexion->obtenerDatos($consulta);
?>
<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/a.css">

<!-- Contenido de la pagina principal -->

<div class="row | content">
    <div class="col s8 espacio">
        

            <section class="ventana">
                <div class="carousel carousel-slider" data-indicators="true">
                    <div class="carousel-fixed-item">
                        <div class="container">
                            <h2 class="amber lighten-1-text | titulo | center-align ">Estrenos mas recientes</h2>
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
                <div class="card-panel ">
                    <h1>Autores mas populares</h1>
                    <div class="divider"></div>
                        <div class="section">
                            <h5>Section 1</h5>
                            <p>Stuff</p>
                        </div>
                        <div class="divider"></div>
                        <div class="section">
                            <h5>Section 2</h5>
                            <p>Stuff</p>
                        </div>
                        <div class="divider"></div>
                        <div class="section">
                            <h5>Section 3</h5>
                            <p>Stuff</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col s4 | grey lighten-3 | panel-der">
        <div class="row">

            <h5 class="center-align">Destacados de la semana</h5>

        </div>
        
        <div class="row">
            <div class="col s12 ">

                <div class="card horizontal ">
                    <div class="card-image">
                        <img class="responsive-img"
                            src="./libros/portadas/<?php echo $sql[0]['codigoArchivo']; ?>.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-action" >
                            <a class="blue-text " href="?menu=lectorPdf">Novela</a>
                        </div>
                        <div class="card-content">
                            <span class="new badge">4</span>Calificación</a>
                            <br>
                            <span><i class="material-icons">visibility</i></span>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 ">

                <div class="card horizontal ">
                    <div class="card-image">
                        <img class="responsive-img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL7ZOxNnHJMVUtqr0RKddmzxIdw5hTt2rGCQ&usqp=CAU">
                    </div>
                    <div class="card-stacked">
                        <div class="card-action">
                            <a class="blue-text " href="#">Novela</a>
                        </div>
                        <div class="card-content">
                            <span class="new badge">4</span>Calificación</a>
                            <br>
                            <span><i class="material-icons">visibility</i></span>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 ">

                <div class="card horizontal ">
                    <div class="card-image">
                        <img class="responsive-img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL7ZOxNnHJMVUtqr0RKddmzxIdw5hTt2rGCQ&usqp=CAU">
                    </div>
                    <div class="card-stacked">
                        <div class="card-action">
                            <a class="blue-text " href="#">Novela</a>
                        </div>
                        <div class="card-content">
                            <span class="new badge">4</span>Calificación</a>
                            <br>
                            <span><i class="material-icons">visibility</i></span>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 ">

                <div class="card horizontal ">
                    <div class="card-image">
                        <img class="responsive-img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL7ZOxNnHJMVUtqr0RKddmzxIdw5hTt2rGCQ&usqp=CAU">
                    </div>
                    <div class="card-stacked">
                        <div class="card-action">
                            <a class="blue-text " href="#">Novela</a>
                        </div>
                        <div class="card-content">
                            <span class="new badge red">4</span>Calificación</a>
                            <br>
                            <span><i class="material-icons">visibility</i></span>
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