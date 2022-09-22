<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();
$objPersona = new Persona();
$listaAutos = $objAuto->getAutos();

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5">
        <table class="table table-dark">
            <thead>
                <tr style="border-bottom:2px solid white;">
                    <th scope="col" style="border-radius: 5px 0 0 0; border-right: 2px solid white;">Patente</th>
                    <th scope="col" style="border-right: 2px solid white;">Marca</th>
                    <th scope="col" style="border-right: 2px solid white;">Modelo</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">DNI</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">Nombre</th>
                    <th scope="col" style="border-radius: 0 5px 0 0; border-left: 2px solid white;">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listaAutos)) {
                    foreach ($listaAutos as $auto) :
                        $persona['NroDni'] = $auto->getDniDuenio();
                        $listaPersona = $objPersona->getPersonasPorDni($persona);
                ?>
                        <tr style="border-bottom:2px solid white;">
                            <th scope="row"><?= $auto->getPatente() ?></th>
                            <td><?= $auto->getMarca() ?></td>
                            <td><?= $auto->getModelo() ?></td>
                            <td><?= $auto->getDniDuenio() ?></td>
                            <td><?= $listaPersona[0]->getNombre() ?></td>
                            <td><?= $listaPersona[0]->getApellido() ?></td>
                        </tr>
                    <?php
                    endforeach;
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