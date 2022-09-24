<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
$datos = data_submitted();

$datosActualizados = $objPersona->actualizarPersona($datos);
$datoPersona = $objPersona->buscar($datos);

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border-radius: 10px;">
        <h3 style="text-align: center;">¡Datos actualizados correctamente!</h3>
        <table class="table table-striped">
            <thead>
                <tr style="border-bottom:2px solid white;">
                    <th scope="col" style="border-radius: 5px 0 0 0">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Fecha de Nacimiento</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Teléfono</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Domicilio</th>
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
                        <td><?= $datoPersona[0]->getDomicilio() ?></td>
                    </tr>
                <?php
                } else { ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">No se encontraron autos registrados</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="../index.php" class="btn ">Volver</a>

    </div>
</div>

<?php
include_once('../templates/footer.php');
?>
