<?php 

class Auto {

    /**
     * Este método devuelve una lista de autos de la base de datos, filtrada por la patente si se proporciona.
     * @param param array(1) { ["Patente"]=> string(6) "ABC123" }
     * @return An array de objetos.
     */
    public function getAutos($param = NULL) {
        $objAuto = new Model_auto();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['Patente'])) {
                $where.= " AND Patente = " . $param['Patente'];
            }
        }

        $autos = $objAuto->listar($where);
        return $autos;
    }
}


?>