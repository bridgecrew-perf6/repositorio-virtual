<!-- Estilos en CSS -->
<style>
    table{
        margin: 1.5rem 0 1.5rem;
    }
    tr.titulo{
        font-weight: bold;
        font-family: 'Helvetica', sans-serif;
    }
</style>
<?php
require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;

    $consulta = "SELECT `categoria` FROM `categorias`";
    $sql = $conexion->obtenerDatos($consulta);
?>
<div class="container">
    <table class="highlight centered responsive-table" width="700" cellpadding="2" cellspacing="0"
        bordercolor="#CCCCCC">
        <tr class="teal darken-4 white-text titulo">
            <td>Géneros</td>
            <td></td>

        <?php
            for ($i=0; $i < count($sql); $i++) {
                ?>
        <tr>

            <td>
                <?php echo $sql[$i]['categoria']; ?>
            </td>
            <td>

                <form action="./db/generos.php">
                <button class="btn waves-effect waves-light" type="submit"  > Visitar</button>
                </form>
                

                
            </td>
    
        </tr>

        <?php
            }
        ?>
    </table>
</div>

