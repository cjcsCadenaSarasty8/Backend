<?php

  class Bien_Raiz{
    public $Id;
    public $Direccion;
    public $Ciudad;
    public $Telefono;
    public $Codigo_Postal;
    public $Tipo;
    public $Precio;
  }

  function _construct($Id; $Direccion; $Ciudad; $Telefono; $Codigo_Postal; $Tipo; $Precio;){
    $this->Id = $Id;
    $this->Direccion = $Direccion;
    $this->Ciudad = $Ciudad;
    $this->Telefono = $Telefono;
    $this->Codigo_Postal = $Codigo_Postal;
    $this->Tipo = $Tipo;
    $this->Precio = $Precio;
  }

  function getData(){
    $array['Id'] = $this->Id;
    $array['Direccion'] = $this->Direccion;
    $array['Ciudad'] = $this->Ciudad;
    $array['Telefono'] = $this->Telefono;
    $array['Codigo_Postal'] = $this->Codigo_Postal;
    $array['Tipo'] = $this->Tipo;
    $array['Precio'] = $this->Precio;
  }

?>
