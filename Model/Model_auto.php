<?php

include_once "BaseDatos.php";

class Model_auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio; // Referencia al Obj Persona
    private $mensajeOperacion;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
        $this->mensajeOperacion = "";
    }

    public function setearValores($patente = '', $marca = '', $modelo = '', $dniDuenio = '', $nombre = '', $apellido = '') {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
        $this->setDniDuenio($dniDuenio);
        $this->setDniDuenio($dniDuenio);
    }

    public function getPatente()
    {
        return $this->patente;
    }
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getDniDuenio()
    {
        return $this->dniDuenio;
    }
    public function setDniDuenio($dniDuenio)
    {
        $this->dniDuenio = $dniDuenio;
    }

    public function getmensajeoperacion(){
        return $this->mensajeOperacion;
        
    }
    public function setmensajeoperacion($valor){
        $this->mensajeOperacion = $valor;
        
    }

    /**
     * Inserta una empresa a la BD
     */

    public function Insertar()
    {
        $bd = new BaseDatos();
        $rta = false;

        $query = "INSERT INTO auto(Marca, Modelo, DniDuenio)
                  VALUES ('" . $this->getMarca() . "','" . $this->getModelo() . "','" . $this->getDniDuenio() . "')";

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

    public function Modificar()
    {
        $bd = new BaseDatos();
        $rta = false;
        $query = "UPDATE auto SET Patente='" . $this->getPatente() . "',Marca='" . $this->getMarca() . "',Modelo='" . $this->getModelo() . "','" . $this->getDniDuenio() . "'
                 WHERE Patente=" . $this->getPatente();

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

    public function Eliminar()
    {
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


    public function listar($parametro = '')
    {
        $bd = new BaseDatos();
        $rta = false;
        $listaAutos = [];

        $query = "SELECT * FROM auto ";

        if ($parametro != '') {
            $query.= 'WHERE ' . $parametro;
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
            Model_auto::setmensajeoperacion("Auto->listar: ".$bd->getError());
        }

        return $listaAutos;
    }
}
