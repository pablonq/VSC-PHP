<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <form action="ejercicio_5_Respuesta.php" method="post" class="needs-validation col-md-4 m-4" novalidate>
        <div>
            <label>Nombre: </label><input type="text" name="input_nombre" id="input_nombre" class="form-control" required>
            <div class="invalid-feedback">
                Porfavor ingrese un nombre!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <label>Apellido: </label><input type="text" name="input_apellido" id="input_apellido" class="form-control" required>
            <div class="invalid-feedback">
                Porfavor ingrese un apellido!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <label>Edad: </label><input type="number" name="input_edad" id="input_edad" class="form-control" required>
            <div class="invalid-feedback">
                Porfavor ingrese una edad!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
            </div>
            <div>
            <label>Direccion: </label><input type="text" name="input_direccion" id="input_direccion" class="form-control" required>
            <div class="invalid-feedback">
                Porfavor ingrese una direccion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <p>Estudios:</p>
            <input type="radio" name="input_estudios" id="input_estudios1" value="No tiene estudios" class="form-check-input" required><label for="input_estudios1" class="form-check-label">No tiene estudios</label>
            <input type="radio" name="input_estudios" id="input_estudios2" value="Estudios Primarios" class="form-check-input" required><label for="input_estudios2" class="form-check-label">Estudios Primarios</label>
            <input type="radio" name="input_estudios" id="input_estudios3" value="Estudios Secundarios" class="form-check-input" required><label for="input_estudios3" class="form-check-label">Estudios Secundarios</label>
            <div class="invalid-feedback">
                Porfavor ingrese alguna opcion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div>
            <p>Sexo:</p>
            <input type="radio" name="input_sexo" id="input_sexo1" value="Femenino" class="form-check-input" required><label for="input_sexo1" class="form-check-label">Femenino</label>
            <input type="radio" name="input_sexo" id="input_sexo2" value="Masculino" class="form-check-input" required><label for="input_sexo2" class="form-check-label">Masculino</label>
            <input type="radio" name="input_sexo" id="input_sexo3" value="Otro" class="form-check-input" required><label for="input_sexo3" class="form-check-label">Otro</label>
            <div class="invalid-feedback">
                Porfavor ingrese alguna opcion!
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div> 
        <input type="submit" name="boton_enviar" class="btn btn-primary mt-2" id="boton_enviar">
    </form>
    <script src="js/validarCamposVacios.js"></script>
<?php
    include_once "../../cabecera/footer-php.php"
?>