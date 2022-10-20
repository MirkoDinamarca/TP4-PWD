<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objPersona = new Persona();
// $datos = data_submitted();
$resultado = $objPersona->buscar($_POST);

if (isset($resultado['errores'])) {

    if (count($resultado['errores']) > 0) {

        $error = serialize($resultado['errores']);
        $error = urlencode($error);
        header("Location: buscarPersona.php?mensaje=" . $error);
    }
}

// if (!empty($resultado)) {
//     $dniPersona['NroDni'] = $resultado[0]->getNroDni();
// }

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">
    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <?php if ($resultado) { ?>
            <h5>Actualizar datos persona</h5>
            <form id="form" class="needs-validation" novalidate action="ActualizarDatosPersona.php" method="POST">
                <input type="number" class="form-control" id="NroDni" name="NroDni" value="<?php echo $resultado[0]->getNroDni() ?>" hidden>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre" value="<?php echo $resultado[0]->getNombre() ?>">
                    <!-- <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido" value="<?php echo $resultado[0]->getApellido() ?>">
                    <!-- <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Ingrese la fecha de nacimiento" value="<?php echo $resultado[0]->getFechaNac() ?>">
                    <!-- <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el telefono" value="<?php echo $resultado[0]->getTelefono() ?>">
                    <!-- <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese el domicilio" value="<?php echo $resultado[0]->getDomicilio() ?>">
                    <!-- <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div> -->
                </div>
                <button type="submit" class="btn ">Enviar</button>
            </form>
        <?php } else { ?>
            <h1>¡Los datos de la persona ingresada no existe!</h1>
        <?php }  ?>

        <div class="form-group" style="margin-top: 10px;">
            <a href="buscarPersona.php" class="btn">Volver</a>
        </div>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>