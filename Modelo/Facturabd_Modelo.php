<?php

class Facturabd{

private $Conexion;


public function __construct($Conexion){


   $this->setConexion($Conexion);


}

public function setConexion($Conexion){

	$this->Conexion=$Conexion;
}

public function setIngresarFactura(Factura,$Fac){

}


public function setActualizarFactura(Factura,$Fac){


}

public function setBorrarFactura(Factura,$Fac){

}

public function getMostrarFacuta(Factura,$Fac){
	$Resul=Array();
	$i=0;
	$sql="";
	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
		$Fac = new Factura;

		$Resul[$i]=$Fac;
		$i++;
	}

	return $Resul;
}

}













?>