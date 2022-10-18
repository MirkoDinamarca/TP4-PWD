<?php
include_once('../configuracion.php');
include_once('../templates/header.php');

if (isset($_GET['mensaje'])) {
    $error = unserialize($_GET['mensaje']);
}

?>

<div class="m-0 row vh-100 justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" class="needs-validation" novalidate action="accionBuscarAuto.php" method="GET">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Patente Auto</label>
                <input type="text" class="form-control" id="Patente" name="Patente" placeholder="Ingrese la patente del auto">
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <button type="submit" class="btn ">Enviar</button>
        </form>

    </div>

</div>

<?php 
include_once('../templates/footer.php');
?>

<script>
    Swal.fire({
        icon: 'error',
        title: '¡Ha ocurrido un error!',
        text: '<?php foreach ($error as $e) { ?>
        <?= $e . ". " ?>
    <?php } ?> ',
    });
</script>