<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();
$datos = data_submitted();

$resultado = $objAuto->newAuto($datos);

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <?php if (!$resultado['persona']) { ?>
            <h1>La persona no se encuentra registrada</h1>
            <a class="btn " href="../index.php">Volver al inicio</a>
        <?php } else { ?>
            <?php if ($resultado['insercion']) { ?>
                <h1>¡El auto se registró con éxito!</h1>
            <?php } else { ?>
                <h1>Hubo un error al intentar registrar el auto!</h1>
            <?php } ?>
        <?php } ?>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>