<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');
?>

<form id="form" class="needs-validation" novalidate action="accionBuscarPersonaAutos.php" method="GET">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI</label>
        <input type="number" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI" required>
        <div class="invalid-feedback">
            Este campo es obligatorio
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn ">Buscar</button> -->
        <button type="submit" class="btn ">Buscar</button>
    </div>
</form>

<?php
// include_once('../templates/footer.php');
// include_once('../configuracion.php');
?>