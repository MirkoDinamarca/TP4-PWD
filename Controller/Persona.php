<?php 

class Persona {

    /**
     * Este método devuelve una lista de personas de la base de datos, filtrada por el DNI si se proporciona.
     * @param param array(1) { ["NroDni"]=> string(8) "12345678" }
     * @return An array de objetos.
     */
    public function buscar($param = NULL) {
        $objPersona = new Model_persona();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['NroDni'])) {
                $where.= " AND NroDni = " . $param['NroDni'];
            }
        }

        $personas = $objPersona->listar($where);
        return $personas;
    }

    public function newPersona($datos) {
        $objPersona = new Model_persona();

        if (isset($datos)) {

            $validacion = false;
            $objPersona->setearValores($datos['NroDni'], $datos['Apellido'], $datos['Nombre'], $datos['fechaNac'], $datos['Telefono'], $datos['Domicilio']);
            
            if ($objPersona->Insertar()) {
                $validacion = true;
            }

            // !Arreglar!
            // Registra bien una nueva persona pero cuando la llave primaria está repetida
            // muestra un error de sql que no se tiene que ver.
            return $validacion;
        }
    }

    public function actualizarPersona($datos) {
        $objPersona = new Model_persona();

        if (isset($datos)) {

            $validacion = false;
            $objPersona->setearValores($datos['NroDni'], $datos['Apellido'], $datos['Nombre'], $datos['fechaNac'], $datos['Telefono'], $datos['Domicilio']);
            
            if ($objPersona->Modificar()) {
                $validacion = true;
            }

            // !Arreglar!
            // Registra bien una nueva persona pero cuando la llave primaria está repetida
            // muestra un error de sql que no se tiene que ver.
            return $validacion;
        }
    }
}
