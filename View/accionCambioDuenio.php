<?php

include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();
$datos = data_submitted();


$resultado = $objAuto->cambiarDuenio($datos);

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border-radius: 10px;">
        <?php if (!$resultado['persona']) { ?>
            <h1>La persona no se encuentra registrada</h1>

        <?php } else if (!$resultado['patente']) { ?>
            <h1>La patente no se encuentra registrada</h1>
        <?php } else { ?>

            <?php if ($resultado['modificacion']) { ?>
                <h1>¡El auto se registró con éxito!</h1>
            <?php } else { ?>
                <h1>¡El auto ya se encuentra registrado!</h1>
            <?php } ?>

        <?php } ?>
        <a href="../index.php" class="btn ">Volver al Inicio</a>

    </div>
</div>