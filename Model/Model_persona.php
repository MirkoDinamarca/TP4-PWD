<?php

include_once "BaseDatos.php";

class Model_persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeOperacion;

    public function __construct() {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->mensajeOperacion = "";
    }

    /**
     * Establece los valores de las propiedades del objeto
     * @param nroDni int
     * @param apellido string
     * @param nombre string
     * @param fechaNac date
     * @param telefono int(11)
     * @param domicilio address
     */
    public function setearValores($nroDni = '', $apellido = '', $nombre = '', $fechaNac = '', $telefono = '', $domicilio = '') {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    public function getNroDni() {
        return $this->nroDni;
    }
    public function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    public function getApellido() {
        return $this->apellido;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }
    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }
    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function getmensajeoperacion() {
        return $this->mensajeOperacion;
    }
    public function setMsjOperacion($valor) {
        $this->mensajeOperacion = $valor;
    }

    /**
     * Inserta una persona a la BD
     */

    public function Insertar() {
        $bd = new BaseDatos();
        $rta = false;

        $query = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
                  VALUES ('" . $this->getNroDni() . "','" . $this->getApellido() . "','" . $this->getNombre() . "','" . $this->getFechaNac() . "','" . $this->getTelefono() . "','" . $this->getDomicilio() . "')";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                $rta = true;
            } else {
                $this->setMsjOperacion($bd->getError());
            }
        } else {
            $this->setMsjOperacion($bd->getError());
        }

        return $rta;
    }

    /**
     * Recupera los datos de una persona a través de su DNI
     * @param nroDni int
     */
    public function Buscar($nroDni) {
        $bd = new BaseDatos();

        $query = "SELECT * FROM persona WHERE NroDni =" . $nroDni;

        $rta = false;

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                if ($row = $bd->Registro()) {
                    $this->setearValores($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $rta = true;
                }
            } else {
                $this->setMsjOperacion($bd->getError());
            }
        } else {
            $this->setMsjOperacion($bd->getError());
        }
        return $rta;
    }

    /**
     * Retorna un arreglo de objetos desde la base de datos de la tabla Persona
     * @param parametro Es el parámetro que se pasa al método, que es la condición de la consulta.
     * @return An array de objetos.
     */
    public function listar($parametro = '') {
        $bd = new BaseDatos();
        $rta = false;
        $listaPersonas = [];

        $query = "SELECT * FROM persona ";

        if ($parametro != '') {
            $query .= 'WHERE ' . $parametro;
        }

        $rta = $bd->Ejecutar($query);

        if ($rta > -1) {
            if ($rta > 0) {
                while ($row = $bd->Registro()) {
                    $objPersona = new Model_persona();
                    $objPersona->Buscar($row['NroDni']);
                    $listaPersonas[] = $objPersona;
                }
            }
        } else {
            $this->setMsjOperacion($bd->getError());
        }

        return $listaPersonas;
    }
    /**
     * Método para modificar una empresa de la BD
     */

    public function Modificar() {
        $bd = new BaseDatos();
        $rta = false;
        $query = "UPDATE persona SET NroDni='" . $this->getNroDni() . "',Apellido='" . $this->getApellido() . "',Nombre='" . $this->getNombre() . "',fechaNac='" . $this->getFechaNac() . "',Telefono='" . $this->getTelefono() . "',Domicilio='" . $this->getDomicilio() . "'
                 WHERE NroDni =" . $this->getNroDni();

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($query)) {
                $rta = true;
            } else {
                $this->setMsjOperacion($bd->getError());
            }
        } else {
            $this->setMsjOperacion($bd->getError());
        }

        return $rta;
    }
}
