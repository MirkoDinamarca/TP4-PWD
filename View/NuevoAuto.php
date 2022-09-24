<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" class="needs-validation" novalidate action="View/accionNuevoAuto.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Patente</label>
                <input type="text" class="form-control" id="Patente" name="Patente" placeholder="Ingrese el N° de patente" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Ingrese la marca" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="number" class="form-control" id="Modelo" name="Modelo" placeholder="Ingrese el modelo" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°DNI Dueño</label>
                <input type="number" class="form-control" id="DniDuenio" name="DniDuenio" placeholder="Ingrese el N°DNI del dueño" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <button type="submit" class="btn ">Registrar Auto</button>
        </form>
    </div>
</div>