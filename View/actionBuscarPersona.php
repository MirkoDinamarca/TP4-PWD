<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
$datos = data_submitted();
$datoPersona = $objPersona->buscar($datos);
echo "<pre>";
var_dump($datoPersona);
echo "</pre>";
$dniPersona['NroDni'] = $datoPersona[0]->getNroDni();
?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" action="ActualizarDatosPersona.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="hidden" class="form-control" id="NroDni" name="NroDni" value="<?php echo $datoPersona[0]->getNroDni() ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre" value="<?php echo $datoPersona[0]->getNombre() ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido" value="<?php echo $datoPersona[0]->getApellido() ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Ingrese la fecha de nacimiento" value="<?php echo $datoPersona[0]->getFechaNac() ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el telefono" value="<?php echo $datoPersona[0]->getTelefono() ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese el domicilio" value="<?php echo $datoPersona[0]->getDomicilio() ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>