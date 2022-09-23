<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');

$objAuto = new Auto();
$objPersona = new Persona();
$listaAutos = $objAuto->buscar();

?>

<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8">
        <table class="table table-striped">
            <thead>
                <tr style="border-bottom:2px solid black;">
                    <th scope="col" style="border-radius: 5px 0 0 0;">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">DNI</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Nombre</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listaAutos)) {
                    foreach ($listaAutos as $auto) :
                        $persona['NroDni'] = $auto->getObjDuenio();
                        $listaPersona = $objPersona->buscar($persona);
                ?>
                        <tr style="border-bottom:2px solid white;">
                            <th scope="row"><?= $auto->getPatente() ?></th>
                            <td><?= $auto->getMarca() ?></td>
                            <td><?= $auto->getModelo() ?></td>
                            <td><?= $auto->getObjDuenio() ?></td>
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
// include_once('../templates/footer.php');
?>