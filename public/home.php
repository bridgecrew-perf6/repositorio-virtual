<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_hm.css">

<!-- Contenido de la pagina principal -->

<div class="row"> 
    <div class="col s8 espacio">
      <div class="cotainer">

        <section class="black">
            <div class="carousel carousel-slider" data-indicators="true">
                <div class="carousel-fixed-item">
                    <div class="container">
                        <h1 class="black-text">Bienvenido
                            
                        </h1>

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
                        <h2>Titulo 00</h2>
                        <p class="black-text">autor</p>
                    </div>
                </div>
                <div class="carousel-item  slime-item03 black-text" href="#three!">
                    <div class="container">
                        <h2>Titulo 00</h2>
                        <p class="black-text">autor</p>
                    </div>
                </div>
                <div class="carousel-item  slime-item04  white-text" href="#four!">
                    <div class="container">
                        <h2>Titulo 00</h2>
                        <p class="black-text">autor</p>
                    </div>
                </div>
            </div>
        </section>
</div>



    </div>
    <div class="col s4">1</div>
</div>
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