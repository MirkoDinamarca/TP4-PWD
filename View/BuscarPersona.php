<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

if (isset($_GET['mensaje'])) {
    $error = unserialize($_GET['mensaje']);
}

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" class="needs-validation" novalidate action="actionBuscarPersona.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°DNI</label>
                <input type="number" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <button type="submit" class="btn ">Buscar persona</button>
        </form>

        <div class="form-group" style="margin-top: 10px;">
            <a href="../index.php" class="btn">Volver</a>
        </div>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>

<script>
    
    Swal.fire({
        icon: 'error',
        title: '¡Ha ocurrido un error!',
        html: '<?php foreach ($error as $e) { ?>
            <?= "<pre>" . $e . "</pre>" ?>
        <?php } ?>'
    });

</script>

