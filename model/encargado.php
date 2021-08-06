<?php

class Encargado{

    private $idEncargado;
    private $nombresEncargado;
    private $apellidosEncargado;
    private $fechaNacEncargado;
    private $contraseñaliente;

    public function getIdEncargado(){
        return $this->$idEncargado;
    }

    public function serIdEncargado($idEncargado){
        $this->idEncargado = $idEncargado;
    }

    public function getNombresEncargado(){
        return $this->$nombresEncargado;
    }

    public function serNombresEncargado($nombresEncargado){
        $this->nombresEncargado = $nombresEncargado;
    }
    public function getApellidosEncargado(){
        return $this->$apellidosEncargado;
    }

    public function serApellidosEncargado($apellidosEncargado){
        $this->apellidosEncargado = $apellidosEncargado;
    }
    public function getFechaNacEncargado(){
        return $this->$fechaNacEncargado;
    }

    public function serFechaNacEncargado($fechaNacEncargado){
        $this->fechaNacEncargado = $fechaNacEncargado;
    }
    public function getContraseñaEncargado(){
        return $this->$contraseñaEncargado;
    }

    public function setContraseñaEncargado($contraseñaEncargado){
        $this->contraseñaEncargado = $contraseñaEncargado;
    }

}
?>