<?php

require_once "./db/conexion/conexion.php";
$conexion = new Conexion;

$consulta = "SELECT * FROM `libro` WHERE codigoArchivo='$_codigo';";
$sql = $conexion->obtenerDatos($consulta);
$id_libro = $sql[0]['id_libro'];

$pagina=1;

$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_SESSION['loggedUserName'])) {
    $correo = $_SESSION['loggedUserName'];
    $consultaId = "SELECT * FROM `usuarios` WHERE correo='$correo';";
    $sqlId = $conexion->obtenerDatos($consultaId);
    $id_user = $sqlId[0]['id_user'];
    $comprobarEnLista = "SELECT * FROM `listalibro` WHERE id_libro='$id_libro' AND id_user= '$id_user';";
?>
<!DOCTYPE html>
<html lang="en">


    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    <title>Reader</title>
    <!-- Estilos CSS -->
    <style>
        canvas.the-canvas{
            border: 1px solid black;
            direction: ltr;
        }
        div.canvas{
          text-align : center !important;
        }
        div.controles{
          padding: 1rem;
        }
        button.btn{
          background-color: #e37222;
        }
        button.btn:hover{
          background-color: #eeaa7b;
        }
    </style>


<body>
    <div class="canvas">

    
    <h1>
        <?php echo $sql[0]['titulo']; ?>
    </h1>
    
    <!-- Si esta registrado vera el boton de agregar a lista de lecturas -->
    <div class="controles">
        <button id="prev" class="btn">Anterior</button>
        <button id="next" class="btn">Siguiente</button>
        <button id="zoomin" class="btn">Acercar</button>
        <button id="zoomout" class="btn">Alejar</button>
        &nbsp; &nbsp;
        <span>Página: <span id="page_num"></span> / <span id="page_count"></span></span>

            <!-- Si el libro ya está en la lista de lecturas vera el boton de guardar estado de lectura -->
            
        <?php
        if($cos = $conexion->obtenerDatos($comprobarEnLista)){
            $pagina = $cos[0]['pagina'];
            ?>
            <div>
        <form action="./db/guardarPagina.php" method = "POST">
            <input type="hidden" name ="idLibro" value="<?php echo $sql[0]['id_libro']; ?>">
            <input type="hidden" name ="correo" value="<?php echo $correo; ?>">
            <input id="pag" type="hidden" name ="pagina" value="1">

            <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Guardar estado lectura
            
            </button>
        </form>
        </div>

            <?php
        }else{
        ?>    
        <!-- Si el libro NO está en la lista de lecturas vera el boton de Agregar a Lista -->
            <div>
        <form action="./db/listaLibros.php" method = "POST">
            <input type="hidden" name ="idLibro" value="<?php echo $sql[0]['id_libro']; ?>">
            <input type="hidden" name ="correo" value="<?php echo $correo; ?>">
            <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action">Agregar a mi lista
            
            </button>
        </form>
        </div>

        <?php    
        }
        ?>
<!-- ---------------------------------------------------------------------------------------                -->
        

    </div>

    <canvas id="the-canvas"></canvas>

    <?php
} else {
    ?>
        <!DOCTYPE html>
<html lang="en">


    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    <title>Reader</title>
    <!-- Estilos CSS -->
    <style>
        canvas.the-canvas{
            border: 1px solid black;
            direction: ltr;
        }
        div.canvas{
          text-align : center !important;
        }
        div.controles{
          padding: 1rem;
        }
        button.btn{
          background-color: #e37222;
        }
        button.btn:hover{
          background-color: #eeaa7b;
        }
    </style>


<body>
    <div class="canvas">

    
    <h1>
        <?php echo $sql[0]['titulo']; ?>
    </h1>
    <!-- Si NO esta registrado No vera el boton de agregar a lista de lecturas -->    
    
    <div class="controles">
        <button id="prev" class="btn">Anterior</button>
        <button id="next" class="btn">Siguiente</button>
        <button id="zoomin" class="btn">Acercar</button>
        <button id="zoomout" class="btn">Alejar</button>
        &nbsp; &nbsp;
        <span>Página: <span id="page_num"></span> / <span id="page_count"></span></span>

    </div>

    <canvas id="the-canvas"></canvas>


    <?php
}
?>    



    <script>
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.

        var url = './libros/<?php echo $_codigo ?>.pdf';

        // Loaded via <script> tag, create shortcut to access PDF.js exports.
        var pdfjsLib = window['pdfjs-dist/build/pdf'];

        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

        var pdfDoc = null,
            pageNum = <?php echo $pagina ?>,
            pageRendering = false,
            pageNumPending = null,
            scale = 1.5,
            zoomRange = 0.25,
            canvas = document.getElementById('the-canvas'),
            ctx = canvas.getContext('2d');

        /**
         * Get page info from document, resize canvas accordingly, and render page.
         * @param num Page number.
         */
        function renderPage(num) {
            pageRendering = true;
            // Using promise to fetch the page
            pdfDoc.getPage(num).then(function (page) {
                var viewport = page.getViewport({ scale: scale });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function () {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            // Update page counters
            
            document.getElementById('page_num').textContent = num;
            document.getElementById('pag').value = num;
        }

        /**
         * If another page rendering in progress, waits until the rendering is
         * finised. Otherwise, executes rendering immediately.
         */
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        /**
         * Displays previous page.
         */
        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        }
        document.getElementById('prev').addEventListener('click', onPrevPage);

        /**
         * Displays next page.
         */
        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        }
        document.getElementById('next').addEventListener('click', onNextPage);

        //acercar y alejar-----------------------
        function onZoomIn() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale += zoomRange;
            var num = pageNum;
            queueRenderPage(num, scale);

        }
        document.getElementById('zoomin').addEventListener('click', onZoomIn);

        function onZoomOut() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale -= zoomRange;
            var num = pageNum;
            queueRenderPage(num, scale);

        }
        document.getElementById('zoomout').addEventListener('click', onZoomOut);

        //---------------------------------------

        /**
         * Asynchronously downloads PDF.
         */
        pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;

            // Initial/first page rendering
            renderPage(pageNum);
        });
    </script>
</div>
</body>

</html>