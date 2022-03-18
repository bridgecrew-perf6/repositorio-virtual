<!--Estilos CSS-->
<link href="public/css/style_registro.css" rel="stylesheet" />

<?php
$correo = $_SESSION['loggedUserName'];
require_once "./db/conexion/conexion.php";
    $conexion = new Conexion;

    $consulta = "SELECT `id_categoria`, `categoria` FROM `categorias`";
    $sql = $conexion->obtenerDatos($consulta);
?>

<!-- contenido -->
<div class="container">
    <form action="./db/subirPdf.php" method="POST" enctype="multipart/form-data" class="col s12 | center">

        <div class="row | white | z-depth-3">
            <h2>Subir Libro</h2>
            <input type="hidden" name="correoAutor" value="<?php echo $correo; ?>">

            <div class="input-field col s12">

                <input id="" type="text" name="titulo" style="text-transform: capitalize;" required>
                <label for="icon_prefix">Titulo</label>
            </div>

            <div class="input-field col s12">
                <label for="icon_date">Fecha de publicacion</label>
                <input type="text" name="fechaPublicacion" class="datepicker" required>

            </div>

            <div class="input-field col s12">
                <select name="genero" required>
                <option value="" disabled selected></option>
                <?php
            $num = 1;    
            for ($i=0; $i < count($sql); $i++) {
                ?>
                <option value="<?php echo $num; ?>"><?php echo $sql[$i]['categoria']; ?></option>
                <?php
                $num=$num+1;
                }
                
                ?>

                </select>
                <label>Género</label>
            </div>
                    
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="descripcion" required></textarea>
                <label for="textarea1">Descripción</label>
            </div>
            <input type="file" name="documento" required>                  
            
            <div class="input-field col s12 ">
                <button class="btn-register | btn waves-effect waves-orange" 
                    type="submit" name="action">Subir
                    <i class="material-icons right">send</i>
                </button>
            </div>

            

        </div>
    </form>
</div>
<!-- Scripts de JS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    var f = new Date();
    var año = f.getFullYear();
    var mes = f.getMonth()+1;
    var dia = f.getDay();
    
    var f1 = new Date(dia+"/"+mes+"/"+año);
    var f2 = new Date('01/10/1910');
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            yearRange: 20,
            defaultDate: f1,
            maxDate: f1,           
            minDate: f2,
            format: 'yyyy-mm-dd'

        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>
