<?php
    $fileName = $_COOKIE['nameFile'];
    $extension = 'jpg';

    if ($_FILES['imagen']['type'] == "image/jpeg") {

        copy($_FILES['imagen']['tmp_name'], '../libros/portadas/'.$fileName.'.' .$extension);
        
        }
    
    
?>