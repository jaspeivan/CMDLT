<?php

class TipodeEquipos{


private $id_tipodeequipo;
private $TipodeEquipos;


public function setIdtipodeequipo($id_tipodeequipo){

  $this->id_tipodeequipo=$id_tipodeequipo;
}
public function getIdtipodeequipo(){

 return $this->id_tipodeequipo;

}

public function setTipodeEquipos($TipodeEquipos){

$this->TipodeEquipos=$TipodeEquipos;

}

public function getTipodeEquipos(){

  return $this->TipodeEquipos;

}
}




?>