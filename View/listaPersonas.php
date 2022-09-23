<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');

$objPersona = new Persona();
$listaPersonas = $objPersona->buscar();

?>

<div class="m-0 row justify-content-center align-items-center">

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
    </div>

    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-xs-12 col-md-5"></div>
        <div class="col-xs-12 col-md-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buscar persona
            </button>
        </div>
        <div class="col-xs-12 col-md-5"></div>
    </div>
</div>

<?php
// include_once('../templates/footer.php');
?>