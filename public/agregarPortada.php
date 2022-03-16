<!--Estilos CSS-->
<link href="public/css/style_registro.css" rel="stylesheet" />

<?php

?>

<!-- contenido -->
<div class="container">
    <form action="./db/subirPortada.php" method="POST" enctype="multipart/form-data" class="col s12 | center">

        <div class="row | white | z-depth-3">
            <h2>Agregar portada</h2>

            <input type="file" name="imagen">                  
            
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
<script src="public/js/validacion_registro.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

