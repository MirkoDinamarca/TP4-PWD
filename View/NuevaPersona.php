<?php
// include_once('../templates/header.php');
// include_once('../configuracion.php');
?>

<div class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" action="accionNuevaPersona.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°DNI</label>
                <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Ingrese la fecha de nacimiento">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el telefono">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese el domicilio">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<?php
// include_once('../templates/footer.php');
?>