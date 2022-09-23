<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objAuto = new Auto();
$datos = data_submitted();
$resultado = $objAuto->buscar($datos);
// echo '<pre>';
// var_dump($resultado);
// echo '</pre>';

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
                <tr>
                    <th scope="row"><?= $resultado[0]->getPatente() ?></th>
                    <td><?= $resultado[0]->getMarca() ?></td>
                    <td><?= $resultado[0]->getModelo() ?></td>
                    <td><?= $resultado[0]->getObjDuenio() ?></td>
                </tr>
            </tbody>
        </table>

        <a href="../vistanueva/MyResume/index.php" class="btn btn-primary">Volver</a>

    </div>
</div>

<?php
include_once('../templates/footer.php');
?>