<?php

use Rakit\Validation\Validator;

class Persona
{

    /**
     * Este método devuelve una lista de personas de la base de datos, filtrada por el DNI si se proporciona.
     * @param param array(1) { ["NroDni"]=> string(8) "12345678" }
     * @return An array de objetos.
     */
    public function buscar($param = NULL)
    {
        $objPersona = new Model_persona();
        $validator = new Validator();
        $data = [];

        if ($param != NULL) {

            if (empty($param['NroDni'])) {
                $validator->setMessages([
                    'required' => 'El campo :attribute es requerido',
                ]);

                $validation = $validator->make($param, [
                    'NroDni' => 'required',
                ]);

                // Validando datos
                $validation->validate();

                if ($validation->fails()) {
                    $errors = $validation->errors();
                    $data['errores'] = $errors->firstOfAll();
                }
            } else {
                $where = " true ";
                if (isset($param['NroDni'])) {
                    $where .= " AND NroDni = " . $param['NroDni'];
                }

                $data = $objPersona->listar($where);
            }
        } else {
            $where = " true ";
            if (isset($param['NroDni'])) {
                $where .= " AND NroDni = " . $param['NroDni'];
            }

            $data = $objPersona->listar($where);
        }
        return $data;
    }

    public function newPersona($datos)
    {
        $objPersona = new Model_persona();

        $validator = new Validator();

        $validator->setMessages([
            'required' => 'El campo :attribute es requerido',
            'numeric' => 'El campo :attribute debe ser numérico',
        ]);

        $validation = $validator->make($datos, [
            'NroDni' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required',
            'fechaNac' => 'required',
            'Telefono' => 'required|numeric',
            'Domicilio' => 'required',
        ]);

        // Validando datos
        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors();
            $data['errores'] = $errors->firstOfAll();
        } else {
            $data['validacion'] = false;
            $objPersona->setearValores($datos['NroDni'], $datos['Apellido'], $datos['Nombre'], $datos['fechaNac'], $datos['Telefono'], $datos['Domicilio']);

            if ($objPersona->Insertar()) {
                $data['validacion'] = true;
            }
        }

        return $data;
        /* 
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
        } */
    }

    public function actualizarPersona($datos)
    {
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
