<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
$listaPersonas = $objPersona->buscar();

?>

<div class="m-0 row vh-100 justify-content-center align-items-center">

    <div class="col-xs-12 col-md-10">
        <table class="table table-striped">
            <thead>
                <tr style="border-bottom:2px solid white;">
                    <th scope="col" style="border-radius: 5px 0 0 0">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col" style="border-radius: 0 5px 0 0">Fecha de Nacimiento</th>
                    <th scope="col" style="border-radius: 0 5px 0 0">Teléfono</th>
                    <th scope="col" style="border-radius: 0 5px 0 0">Domicilio</th>
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

        <div class="row">
            <div class="col-xs-12 col-md-5"></div>
            <div class="col-xs-12 col-md-2">
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Buscar persona
                </button>
            </div>
            <div class="col-xs-12 col-md-5"></div>
        </div>
    </div>

    < </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buscar Persona y su Auto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php include('autosPersona.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once('../templates/footer.php');
        ?>