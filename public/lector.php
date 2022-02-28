<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_mdc.css">
<?php 
    $nombre = $_SESSION['nombre']; 
?>

<div class="row welcome">

    <h1>LECTOR <?php echo $nombre?> bienvenido a su CUENTA</h1>
</div>
<!-- Vista inicial al logearse como LECTOR - Rutea a Crear la recetas Medica -->
