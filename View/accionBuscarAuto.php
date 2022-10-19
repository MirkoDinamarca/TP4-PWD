<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();

$resultado = $objAuto->buscar($_GET);

if (isset($resultado['errores'])) {

    if (count($resultado['errores']) > 0) { 

        $error = serialize($resultado['errores']);
        $error = urlencode($error);
        header("Location: buscarAuto.php?mensaje=" . $error);
    }
} 

?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8" style="padding: 20px; border-radius: 10px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Dni Dueño</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($resultado)) {?>
                    <tr>
                    <th scope="row"><?= $resultado[0]->getPatente() ?></th>
                    <td><?= $resultado[0]->getMarca() ?></td>
                    <td><?= $resultado[0]->getModelo() ?></td>
                    <td><?= $resultado[0]->getObjDuenio() ?></td>
                </tr>
                <?php } else {?>
                    <tr style="text-align: center;">
                        <td colspan="4">No se encontró el auto</td>
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