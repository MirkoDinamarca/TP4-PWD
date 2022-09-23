<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();
$objPersona = new Persona();

$datos = data_submitted();

$datoPersona = $objPersona->buscar($datos);

$dniPersona['NroDni'] = $datoPersona[0]->getNroDni();
$datoAutosPersona = $objAuto->buscar($dniPersona);

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <table class="table table-dark">
            <thead>
                <tr style="border-bottom:2px solid white;">
                    <th scope="col" style="border-radius: 5px 0 0 0; border-right: 2px solid white;">DNI</th>
                    <th scope="col" style="border-right: 2px solid white;">Nombre</th>
                    <th scope="col" style="border-right: 2px solid white;">Apellido</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">Fecha de Nacimiento</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">Teléfono</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">Domicilio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($datoPersona)) {
                ?>
                    <tr style="border-bottom:2px solid white;">
                        <th scope="row"><?= $datoPersona[0]->getNroDni() ?></th>
                        <td><?= $datoPersona[0]->getNombre() ?></td>
                        <td><?= $datoPersona[0]->getApellido() ?></td>
                        <td><?= $datoPersona[0]->getFechaNac() ?></td>
                        <td><?= $datoPersona[0]->getTelefono() ?></td>
                        <td><?= $datoPersona[0]->getDomicilio()?></td>
                    </tr>
                <?php
                } else { ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">No se encontraron autos registrados</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h1>Los autos asociados a esa persona son:</h1>

        <table class="table table-dark">
            <thead>
                <tr style="border-bottom:2px solid white;">
                    <th scope="col" style="border-radius: 5px 0 0 0; border-right: 2px solid white;">Patente</th>
                    <th scope="col" style="border-right: 2px solid white;">Marca</th>
                    <th scope="col" style="border-right: 2px solid white;">Modelo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($datoAutosPersona)) {
                    foreach ($datoAutosPersona as $data) : ?>
                        <tr style="border-bottom:2px solid white;">
                            <th scope="row"><?= $data->getPatente() ?></th>
                            <td><?= $data->getMarca() ?></td>
                            <td><?= $data->getModelo() ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php
                } else { ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">No se encontraron autos registrados</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>