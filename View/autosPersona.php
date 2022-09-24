<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');
?>

<!-- <div id="exampleModal" class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" action="accionBuscarPersonaAutos.php" method="GET">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
            </div>

            <button type="submit" class="btn ">Buscar</button>
        </form>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buscar Persona y su Auto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form" class="needs-validation" novalidate action="View/accionBuscarPersonaAutos.php" method="GET">

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
            </div>
        </div>
    </div>
</div>

<?php
// include_once('../templates/footer.php');
// include_once('../configuracion.php');
?>