<?php
include_once('../configuracion.php');
include_once('../templates/header.php');

if (isset($_GET['mensaje'])) {
    $error = unserialize($_GET['mensaje']);
}

?>

<div class="m-0 row vh-100 justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" class="needs-validation" novalidate action="accionNuevoAuto.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Patente</label>
                <input type="text" class="form-control" id="Patente" name="Patente" placeholder="Ingrese el N° de patente" >
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Ingrese la marca" >
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="number" class="form-control" id="Modelo" name="Modelo" placeholder="Ingrese el modelo" >
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°DNI Dueño</label>
                <input type="text" class="form-control" id="DniDuenio" name="DniDuenio" placeholder="Ingrese el N°DNI del dueño" >
                <!-- <div class="invalid-feedback">
                    Este campo es obligatorio
                </div> -->
            </div>
            <button type="submit" class="btn ">Registrar Auto</button>
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
        <?php } ?>',
    });

</script>