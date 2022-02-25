<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_navegador.css">

<!-- Contenido -->
<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['loggedUserName'])) {
        if ($_SESSION['id_rol'] == 1) {
            ?>
            <!-- Navegador logeado Medico -->
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper | white">
                        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Inspired Authors</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="?menu=horariosm">Horarios</a></li>
                            <li><a href="?menu=receta">Crear receta</a></li>
                            <li><a href="">Pacientes</a></li>
                            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <ul class="sidenav" id="mobile-demo">
                    <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión Medico</a></li>
                    </ul>
                </nav>
            </div>
    <?php
        } else {
            ?>
            <!-- Navegador logeado Paciente -->
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper | white">
                        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Inspired Authors</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="?menu=agendarc">Agendar cita</a></li>
                            <li><a href="">Condiciones médicas</a></li>
                            <li><a href="?menu=historialCitas">Historial de citas</a></li>
                            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <ul class="sidenav" id="mobile-demo">
                    <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
    <?php
        }
    } else {
        ?>
    <!-- navegador sin logear -->
    <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Comedia</a></li>
            <li><a href="#!">Drama</a></li>
            <li><a href="#!">Terror</a></li>
            <li><a href="#!">Ensayosxd</a></li>
            </ul>
    <nav>
        <div class="nav-wrapper" style="background-color:#07889B">
        <a href="#!" class="brand-logo"><i class="material-icons">auto_stories</i>Inspired Authors</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Genero<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
                <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesión </a></li>
                
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
                <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesión </a></li>
                <!-- Dropdown Trigger -->
     <!-- <form> Por ahora se quede ahi
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form> -->
            </ul> 
        </div>
    </nav>

    <?php
    } ?>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
    // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
  });

</script>