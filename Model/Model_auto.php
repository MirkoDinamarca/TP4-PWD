<?php

include_once "BaseDatos.php";

class Model_auto {
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio; // Referencia al Obj Persona
    private $mensajeOperacion;

    public function __construct() {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->mensajeOperacion = "";
    }

    public function setearValores($patente, $marca, $modelo, $objDuenio) {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($objDuenio);
    }

    public function getPatente() {
        return $this->patente;
    }
    public function setPatente($patente) {
        $this->patente = $patente;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getObjDuenio() {
        return $this->objDuenio;
    }
    public function setObjDuenio($objDuenio) {
        $this->objDuenio = $objDuenio;
    }

    public function getmensajeoperacion() {
        return $this->mensajeOperacion;
    }
    public function setmensajeoperacion($valor) {
        $this->mensajeOperacion = $valor;
    }

    /**
     * Inserta un auto a la BD
     */

    public function Insertar() {
        $bd = new BaseDatos();
        $rta = false;

        $query = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)
                  VALUES ('" . $this->getPatente() . "','" . $this->getMarca() . "','" . $this->getModelo() . "','" . $this->getObjDuenio()->getNroDni() . "')";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                $rta = true;
            } else {
                $bd->getError();
            }
        } else {
            $bd->getError();
        }

        return $rta;
    }

    /**
     * Método para modificar una empresa de la BD
     */

    public function Modificar() {
        $bd = new BaseDatos();
        $rta = false;
        $query = "UPDATE auto SET Patente='" . $this->getPatente() . "',Marca='" . $this->getMarca() . "',Modelo='" . $this->getModelo() . "',DniDuenio='" . $this->getObjDuenio()->getNroDni() . "'
                 WHERE Patente ='" . $this->getPatente() . "'";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                $rta = true;
            } else {
                $bd->getError();
            }
        } else {
            $bd->getError();
        }

        return $rta;
    }

    /**
     * Método para eliminar la empresa de la BD
     */

    public function Eliminar() {
        $bd = new BaseDatos();
        $rta = false;

        $query = "DELETE FROM auto WHERE Patente=" . $this->getPatente();

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                $rta = true;
            } else {
                $bd->getError();
            }
        } else {
            $bd->getError();
        }

        return $rta;
    }

    /**
     * Recupera los datos de un auto a través de su patente
     * @param patente string
     */
    public function Buscar($patente) {
        $bd = new BaseDatos();

        $query = "SELECT * FROM auto WHERE Patente ='" . $patente . "'";

        $rta = false;

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                if ($row = $bd->Registro()) {
                    $this->setearValores($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    $rta = true;
                }
            } else {
                $this->setmensajeoperacion($bd->getError());
            }
        } else {
            $this->setmensajeoperacion($bd->getError());
        }
        return $rta;
    }


    public function listar($parametro = '') {
        $bd = new BaseDatos();
        $rta = false;
        $listaAutos = [];

        $query = "SELECT * FROM auto ";

        if ($parametro != '') {
            $query .= 'WHERE ' . $parametro;
        }

        $rta = $bd->Ejecutar($query);

        if ($rta > -1) {
            if ($rta > 0) {
                while ($row = $bd->Registro()) {
                    $objAuto = new Model_auto();
                    $objAuto->setearValores($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    $listaAutos[] = $objAuto;
                }
            }
        } else {
            Model_auto::setmensajeoperacion("Auto->listar: " . $bd->getError());
        }

        return $listaAutos;
    }
}
