<?php

use Rakit\Validation\Validator;

class Auto
{

    /**
     * Este método devuelve una lista de autos de la base de datos, filtrada por la patente si se proporciona.
     * @param param array(1) { ["Patente"]=> string(6) "ABC123" }
     * @return An array de objetos.
     */
    public function buscar($param = NULL)
    {
        $objAuto = new Model_auto();
        $validator = new Validator();
        $data = [];

        if ($param != NULL) {
            if (empty($param['Patente'])) {
                $validator->setMessages([
                    'required' => 'El campo :attribute es requerido',
                ]);

                $validation = $validator->make($param, [
                    'Patente' => 'required',
                ]);

                // Validando datos
                $validation->validate();

                if ($validation->fails()) {
                    $errors = $validation->errors();
                    $data['errores'] = $errors->firstOfAll();
                }
            } else {
                $where = " true ";
                if (isset($param['Patente'])) {
                    $where .= " AND Patente ='" . $param['Patente'] . "'";
                }

                if (isset($param['NroDni'])) {
                    $where .= " AND DniDuenio ='" . $param['NroDni'] . "'";
                }

                $data = $objAuto->listar($where);
            }
        } else {
            $where = " true ";
            if (isset($param['Patente'])) {
                $where .= " AND Patente ='" . $param['Patente'] . "'";
            }

            if (isset($param['NroDni'])) {
                $where .= " AND DniDuenio ='" . $param['NroDni'] . "'";
            }

            $data = $objAuto->listar($where);
        }
        return $data;
    }

    public function newAuto($datos)
    {

        $objAuto = new Model_auto();
        $objPersona = new Model_persona();
        $data = [];

        $validator = new Validator();

        $validator->setMessages([
            'required' => 'El campo :attribute es requerido',
            'numeric' => 'El campo :attribute debe ser numérico',
        ]);

        $validation = $validator->make($datos, [
            'Patente' => 'required',
            'Marca' => 'required',
            'Modelo' => 'required|numeric',
            'DniDuenio' => 'required|numeric',
        ]);

        // Validando datos
        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors();
            $data['errores'] = $errors->firstOfAll();
        } else {
            $dniPersona = $datos['DniDuenio'];

            $objPersona->Buscar($dniPersona);

            if (!empty($objPersona->getNroDni())) { // ¿Esto está bien? Preguntar en clase

                if (!$objAuto->Buscar($datos['Patente'])) {

                    $objAuto->setearValores($datos['Patente'], $datos['Marca'], $datos['Modelo'], $objPersona);

                    if ($objAuto->Insertar()) {
                        $data['insercion'] = true;
                    } else {
                        $data['insercion'] = false;
                    }

                    $data['persona'] = true;
                }
            } else {
                $data['persona'] = false;
            }
        }

        return $data;
    }

    public function cambiarDuenio($datos)
    {
        $objAuto = new Model_auto();
        $objPersona = new Model_persona();

        // Creamos una nueva instancia de Validator
        $validator = new Validator();

        // Seteamos mensajes que se van a mostrar en caso de haber campos que no corresponden
        $validator->setMessages([
            'required' => 'El campo :attribute es requerido',
            'numeric' => 'El campo :attribute tiene que ser numerico',
        ]);

        // Acá seteando los campos y de que tipo van a ser, si requeridos o numéricos, etc.
        $validation = $validator->make($datos, [
            'Patente' => 'required',
            'NroDni' => 'required|numeric',
        ]);

        // Valida todo acá
        $validation->validate();

        $validacion = [];

        if ($validation->fails()) { // En caso de fallar, entonces..
            $errors = $validation->errors(); // En esta variable ' $errors ' es donde se almacenan todos los errores que se van a dibujar por pantalla
            $validacion['errores'] = $errors->firstOfAll();
        } else { // De no fallar, todo está correcto..
            $dniPersona = $datos['NroDni'];
            $patente = $datos['Patente'];
            $objPersona->Buscar($dniPersona);

            $objAuto->Buscar($patente);

            if ($objPersona->getNroDni() != '') {

                if ($objAuto->getPatente() != '') {
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
        }
        return $validacion;
    }
}
