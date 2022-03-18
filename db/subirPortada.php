<?php
    $fileName = $_COOKIE['nameFile'];
    $extension = 'jpg';

    if ($_FILES['imagen']['type'] == "image/jpeg") {

        copy($_FILES['imagen']['tmp_name'], '../libros/portadas/'.$fileName.'.' .$extension);
        echo '<script>window.location.href="../index.php?menu=autor"</script>';
        
        }else{
            echo '<script>alert("Error al intentar subir archivo");window.location.href="../index.php?menu=portada"</script>';

        }
    
    
?>