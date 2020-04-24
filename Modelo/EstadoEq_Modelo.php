<?php

class EstadoEq{

  private $id_EstadoEq;
  private $EstadoEq;
 


 public function setIdEstadoEq($id_EstadoEq){

 	$this->id_EstadoEq=$id_EstadoEq;
 
 }

 public function getIdEstadoEq(){

    return $this->id_EstadoEq;


 }

 
 public function setEstadoEq($EstadoEq){

   $this->EstadoEq=$EstadoEq;

 }

  public function getEstadoEq(){

   return $this->EstadoEq;

  }

}
?>