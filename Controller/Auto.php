<?php 

class Auto {

    /**
     * Este método devuelve una lista de autos de la base de datos, filtrada por la patente si se proporciona.
     * @param param array(1) { ["Patente"]=> string(6) "ABC123" }
     * @return An array de objetos.
     */
    public function buscar($param = NULL) {
        $objAuto = new Model_auto();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['Patente'])) {
                $where.= " AND Patente ='" . $param['Patente']. "'";
            }

            if (isset($param['NroDni'])) {
                $where.= " AND DniDuenio ='" . $param['NroDni']. "'";
            }
        }

        $autos = $objAuto->listar($where);
        return $autos;
    }

    public function newAuto($datos) {
        $objAuto = new Model_auto();
        $objPersona = new Model_persona();

        $validacion = [];

        $dniPersona = $datos['NroDni'];

        $objPersona->Buscar($dniPersona);

        if ($objPersona->getNroDni() != '') { // ¿Esto está bien? Preguntar en clase

            if (isset($datos)) {
                
                $objAuto->setearValores($datos['Patente'], $datos['Marca'], $datos['Modelo'], $objPersona);
                
                if ($objAuto->Insertar()) {
                    $validacion['insercion'] = true;
                } else {
                    $validacion['insercion'] = false;
                }
    
            }
            $validacion['persona'] = true;
        } else {
            $validacion['persona'] = false;
        }

        return $validacion;
    }

    public function cambiarDuenio($datos) {
        $objAuto = new Model_auto();
        $objPersona = new Model_persona();

        $validacion = [];

        $dniPersona = $datos['NroDni'];
        $patente = $datos['Patente'];

        $objPersona->Buscar($dniPersona);

        $objAuto->Buscar($patente);

        if ($objPersona->getNroDni() != '') { // ¿Esto está bien? Preguntar en clase

            if ($objAuto->getPatente() != '') { // ¿Esto está bien x2? Preguntar en clase
                $validacion['patente'] = true;
                $objAuto->setearValores($objAuto->getPatente(), $objAuto->getMarca(), $objAuto->getModelo(), $objPersona);
                
                if ($objAuto->Modificar()) {
                    $validacion['modificacion'] = true;
                } else {
                    $validacion['modificacion'] = false;
                }
    
            } else {
                $validacion['patente'] = false;
            }
            $validacion['persona'] = true;
        } else {
            $validacion['persona'] = false;
        }
        return $validacion;
    }
}


?>