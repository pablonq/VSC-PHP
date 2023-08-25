<?php
include_once("Menu/Cabecera.php");
?>

<div class="container-fluid">
    <div class="container col-md-5">
        <form action="accionNuevoAuto.php" method="post" class="needs-validation row-md-4" novalidate>
            <div>
                <label>Patente: </label><input type="text" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="input_nombre" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una patente valida! 3 Letras Mayusculas, un espacio y 3 numeros.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Marca: </label><input type="text" pattern="[a-zA-Z]+\s?[a-zA-Z]*\s?[a-zA-Z]*" name="Marca" id="input_apellido" class="form-control text" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una marca valida! solo letras.
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Modelo: </label><input type="number" pattern="[a-zA-Z]*[0-9]*" name="Modelo" id="input_documento" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese una modelo valido! solo numeros!
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <div>
                <label>Documento del Dueño: </label><input type="number" min="1000000" name="DniDuenio" id="input_telefono" class="form-control" required>
                <div class="invalid-feedback">
                    Porfavor ingrese un documento valido! Tiene que ser mayor a "1000000".
                </div>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>
            <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Cargar">
        </form>
    </div>
</div>
<script src="js/validarCamposVacios.js"></script>
<?php
include_once("Menu/Pie.php")
?>