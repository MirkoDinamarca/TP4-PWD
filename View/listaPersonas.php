<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
$listaPersonas = $objPersona->buscar();

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-10">
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
                if (isset($listaPersonas)) {
                    foreach ($listaPersonas as $persona) :
                ?>
                        <tr style="border-bottom:2px solid white;">
                            <th scope="row"><?= $persona->getNroDni() ?></th>
                            <td><?= $persona->getNombre() ?></td>
                            <td><?= $persona->getApellido() ?></td>
                            <td><?= $persona->getFechaNac() ?></td>
                            <td><?= $persona->getTelefono() ?></td>
                            <td><?= $persona->getDomicilio() ?></td>
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