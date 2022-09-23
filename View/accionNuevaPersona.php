<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
$datos = data_submitted();

$resultado = $objPersona->newPersona($datos);

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <?php if ($resultado) { ?>
            <h1>¡La persona se insertó correctamente!</h1>
            <?php } else { ?>
                <h1>Hubo un error al intentar registrar la persona!</h1>
        <?php } ?>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>