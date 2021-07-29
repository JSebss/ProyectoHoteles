<?php

class Cliente{

    private $idCliente;
    private $nombresCliente;
    private $apellidosCliente;
    private $fechaNacCliente;
    private $telefonoliente;
    private $numDocCliente;
    private $correoCliente;

    public function getIdCliente(){
        return $this->$idCliente;
    }

    public function serIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }

    public function getNombresCliente(){
        return $this->$nombresCliente;
    }

    public function serNombresCliente($nombresCliente){
        $this->nombresCliente = $nombresCliente;
    }
    public function getApellidosCliente(){
        return $this->$apellidosCliente;
    }

    public function serApellidosCliente($apellidosCliente){
        $this->apellidosCliente = $apellidosCliente;
    }
    public function getFechaNacCliente(){
        return $this->$fechaNacCliente;
    }

    public function serFechaNacCliente($fechaNacCliente){
        $this->fechaNacCliente = $fechaNacCliente;
    }
    public function getTelefonoCliente(){
        return $this->$telefonoCliente;
    }

    public function serTelefonoCliente($telefonoCliente){
        $this->telefonoCliente = $telefonoCliente;
    }
    public function getNumDocCliente(){
        return $this->$numDocCliente;
    }

    public function serNumDocCliente($numDocCliente){
        $this->numDocCliente = $numDocCliente;
    }
    public function getCorreoCliente(){
        return $this->$correoCliente;
    }

    public function serCorreoCliente($correoCliente){
        $this->correoCliente = $correoCliente;
    }
}
?>