<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');
?>

<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" action="../../View/actionBuscarPersona.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°DNI</label>
                <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
            </div>
            <button type="submit" class="btn btn-primary">Buscar persona</button>
        </form>
    </div>
</div>

<?php
// include_once('../templates/footer.php');
// include_once('../configuracion.php');
?>