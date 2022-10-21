<?php
include_once('../configuracion.php');
include_once('../templates/header.php');

if (isset($_GET['mensaje'])) {
    $error = unserialize($_GET['mensaje']);
}

?>

<main id="main">
    <div class="m-0 vh-100 row justify-content-center align-items-center">

        <div class="m-0 row justify-content-center align-items-center">

            <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
                <form id="form" action="accionCambioDuenio.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Patente</label>
                        <input type="text" class="form-control" id="Patente" pattern="[A-Z]{3}\s[0-9]{3}" minlength='6' maxlength='7' name="Patente" placeholder="Ingrese el N° de patente">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">N°DNI Dueño</label>
                        <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
                    </div>
                    <button type="submit" class="btn ">Cambiar</button>
                </form>
            </div>
        </div>
    </div>
</main>

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
