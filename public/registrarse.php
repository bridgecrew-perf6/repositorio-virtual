<!--Estilos CSS-->
<link href="public/css/style_registro.css" rel="stylesheet" />


<!-- contenido -->
<div class="container">
    <form action="./db/registrar.php" method="POST" class="col s12 | center">

        <div class="row | white | z-depth-3">
            <h2>Ingrese sus datos</h2>

            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" name="correo" class="validate" required>
                <label for="email">Email</label>
            </div>


            <div class="input-field col s12">
                <i class="material-icons prefix">password</i>
                <input id="password" type="password" name="contrasenia" minlength="8" class="validate" required>
                <label for="password">Contraseña</label>
                <span class="helper-text" data-error="Minimo 8 caracteres" data-success="Aceptable">Helper text</span>
            </div>

            <div class="input-field col s12">

                <input id="icon_prefix" type="text" name="nombre" onkeypress="return soloLetras(event)" class="validate" style="text-transform: capitalize;" required>
                <label for="icon_prefix">Nombre(s)</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_paterno" type="text" name="apellidoPaterno" onkeypress="return soloLetras(event)" class="validate" style="text-transform: capitalize;" required>
                <label for="icon_paterno">Apellido paterno</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_materno" type="text" name="apellidoMaterno" onkeypress="return soloLetras(event)" class="validate" style="text-transform: capitalize;" required>
                <label for="icon_materno">Apellido materno</label>
            </div>
            <div class="input-field col s6">
                <label for="icon_date">Fecha de nacimiento</label>
                <input type="text" name="fechaNacimiento" class="datepicker">

            </div>

            <div class="input-field col s6">
                <p>
                    <label class="gender" for="with-gap">Sexo:</label>
                    <label>

                        <input class="with-gap" name="genero" type="radio" value="Femenino" checked />
                        <span>F</span>
                    </label>
                    <label>

                        <input class="with-gap" name="genero" type="radio" value="Masculino" />
                        <span>M</span>
                    </label>
                </p>
            </div>
            <div class="input-field col s6">
                <p>
                    <label class="gender" for="with-gap">Registrar como:</label>
                    <label>

                        <input class="with-gap" name="rol" type="radio" value="2" checked />
                        <span>Lector</span>
                    </label>
                    <label>

                        <input class="with-gap" name="rol" type="radio" value="3" />
                        <span>Autor</span>
                    </label>
                </p>
            </div>

            <div class="input-field col s12 ">
                <button class="btn-register | btn waves-effect waves-orange" 
                    type="submit" name="action">Registrarse
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
<script>
    var f = new Date();
    var año = f.getFullYear()-10;
    var mes = f.getMonth() + 1;
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