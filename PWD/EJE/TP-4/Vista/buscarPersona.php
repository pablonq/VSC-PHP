<?php
include_once("Menu/Cabecera.php");
?>
<div class="m-2">
    <form action="accionBuscarPersona.php" method="get" class="needs-validation col-md-4" novalidate>
        <div class="form-floating">
            <input type="number" class="form-control rounded-3" name="NroDni" id="NroDni" placeholder=" " min="1000000" required>
            <label for="BuscarPersona">Ingrese el DNI</label>
            <div class="invalid-feedback">
                Porfavor ingrese una DNI! el dni tiene que ser mayor a "1000000"
            </div>
            <div class="valid-feedback">
                Correcto!
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>
    </form>
</div>
<script src="js/validarCamposVacios.js"></script>
<?php
include_once("Menu/Pie.php")
?>