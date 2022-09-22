<?php 

class Persona {

    /**
     * Este método devuelve una lista de personas de la base de datos, filtrada por el DNI si se proporciona.
     * @param param array(1) { ["NroDni"]=> string(8) "12345678" }
     * @return An array de objetos.
     */
    public function getPersonasPorDni($param = NULL) {
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


}

?>