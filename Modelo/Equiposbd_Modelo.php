<?php
//error_reporting(0);
class Equiposbd{

private $Conexion;


public function __construct($Conexion){

$this->setConexion($Conexion);

}

public function setConexion($Conexion){

  $this->Conexion=$Conexion;

}
public function setIngresarEquipos(Equipos $Equi){

$sql=$this->Conexion->query("INSERT INTO equipos VALUES (Null,'".$Equi->getIdTipodeequipos()."','".$Equi->getIdUbicacion()."','1','".$Equi->getIdEstadoEq()."','".$Equi->getIdEstatus()."','".$Equi->getMarca()."','".$Equi->getModelo()."','".$Equi->getColor()."','".$Equi->getTamano()."','0','".$Equi->getFechaRegistro()."','2012/08/2','2012/08/2','".$Equi->getCodigoFijo()."','".$Equi->getNSerial()."','".$Equi->getPersonaR()."')");

if($sql){

echo ' <script language="javascript">alert("Se Registrada Con Exito!!.");</script> ';
echo "<script>location.href='../Vista/EquiposRegistrado.php'</script>";
    
}else{

 echo ' <script language="javascript">alert("No se Pudo Registrar .");</script> ';
echo "<script>location.href='../Vista/RegistrarEquipos.php'</script>";

}

}

public function setActualizarEquipos(Equipos $Equi){

$sql=$this->Conexion->query("UPDATE equipos SET id_tipodeequipo='".$Equi->getIdTipodeequipos()."',id_ubicacion='".$Equi->getIdUbicacion()."',id_EstadoEq='".$Equi->getIdEstadoEq()."',id_Estatus='".$Equi->getIdEstatus()."',Modelo='".$Equi->getModelo()."',Marca='".$Equi->getMarca()."', Color='".$Equi->getColor()."',Tamano='".$Equi->getTamano()."', Descripcionfalla='".$Equi->getDescipcion()."', FechaRegistrado='".$Equi->getFechaRegistro()."', FechaRecibido='".$Equi->getFechaRecibido()."', FechaCulminada='".$Equi->getFechaCulminada()."', NSerial='".$Equi->getNSerial()."', CodigoFijo='".$Equi->getCodigoFijo()."', PersonaR='".$Equi->getPersonaR()."' WHERE id_equipo='".$Equi->getIdequipos()."'");



}

public function setBorrarEquipos(){
//$sql=$this->Conexion->query("DELETE * FROM equipos")
}

public function getMostrarEquipos(){
$Resul = Array();
$i=0;
$sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_Estatus=estatus.id_Estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa");

while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

$Equi = new Equipos();

//$Equi = new Empresa();

$Equi->setTecnico($Filas['Tecnico']);
$Equi->setIdEquipos($Filas['id_equipo']);
$Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
$Equi->setIdUbicacion($Filas['Ubicacion']);
$Equi->setIdEmpresa($Filas['NombreEmpresa']);
$Equi->setIdEstatus($Filas['Estatus']);
$Equi->setIdEstadoEq($Filas['EstadoEq']);
$Equi->setMarca($Filas['Marca']);
$Equi->setModelo($Filas['Modelo']);
$Equi->setColor($Filas['Color']);
$Equi->setTamano($Filas['Tamano']);
$Equi->setDescipcion($Filas['Descripcionfalla']);
$Equi->setFechaRegistro($Filas['FechaRegistrado']);
$Equi->setFechaRecibido($Filas['FechaRecibido']);
$Equi->setFechaCulminada($Filas['FechaCulminada']);
$Equi->setNSerial($Filas['NSerial']);
$Equi->setCodigoFijo($Filas['CodigoFijo']);
$Equi->setPersonaR($Filas['PersonaR']);
$Resul[$i]=$Equi;
$i++;
}
return $Resul;
}

public function getMostrarEquiposRegistrado(){
$Resul=Array();
$i=0;
$sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_Estatus=estatus.id_Estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE estatus.id_Estatus='1'");

    while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

     $Equi = new Equipos();
     
     $Equi->setIdEquipos($Filas['id_equipo']);
     $Equi->setIdtipodeequipos($Filas['TipodeEquipos']);
     $Equi->setIdUbicacion($Filas['Ubicacion']);
     $Equi->setIdEmpresa($Filas['NombreEmpresa']);
     $Equi->setTecnico($Filas['Tecnico']);
     $Equi->setIdEstadoEq($Filas['EstadoEq']);
     $Equi->setIdEstatus($Filas['Estatus']);
     $Equi->setModelo($Filas['Modelo']);
     $Equi->setMarca($Filas['Marca']);
     $Equi->setColor($Filas['Color']);
     $Equi->setTamano($Filas['Tamano']);
     $Equi->setDescipcion($Filas['Descripcionfalla']);
     $Equi->setFechaRegistro($Filas['FechaRegistrado']);
     $Equi->setFechaRecibido($Filas['FechaRecibido']);
     $Equi->setFechaCulminada($Filas['FechaCulminada']);
     $Equi->setNSerial($Filas['NSerial']);
     $Equi->setCodigoFijo($Filas['CodigoFijo']);
     $Equi->setPersonaR($Filas['PersonaR']);

     $Resul[$i]=$Equi;
     $i++;
    }

    return $Resul;

}

public function getMostrarEquiposEnEspera(){
$Resul=Array();
$i=0;
$sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color ,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_Estatus=estatus.id_Estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE estatus.id_Estatus='2'");

 while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

  $Equi = new Equipos();

  $Equi->setIdEquipos($Filas['id_equipo']);
  $Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
  $Equi->setIdUbicacion($Filas['Ubicacion']);
  $Equi->setIdEmpresa($Filas['NombreEmpresa']);
  $Equi->setTecnico($Filas['Tecnico']);
  $Equi->setIdEstadoEq($Filas['EstadoEq']);
  $Equi->setIdEstatus($Filas['Estatus']);
  $Equi->setModelo($Filas['Modelo']);
  $Equi->setMarca($Filas['Marca']);
  $Equi->setColor($Filas['Color']);
  $Equi->setTamano($Filas['Tamano']);
  $Equi->setDescipcion($Filas['Descripcionfalla']);
  $Equi->setFechaRegistro($Filas['FechaRegistrado']);
  $Equi->setFechaRecibido($Filas['FechaRecibido']);
  $Equi->setFechaCulminada($Filas['FechaCulminada']);
  $Equi->setNSerial($Filas['NSerial']);
  $Equi->setCodigoFijo($Filas['CodigoFijo']);
  $Equi->setPersonaR($Filas['PersonaR']);

  $Resul[$i]=$Equi;
  $i++;
 }
 return $Resul;
}

public function getMostrarEquiposReparando(){
    $Resul = Array();
    $i=0;
    
    $sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color ,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_estatus=estatus.id_estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE estatus.id_Estatus='3'");

    while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
    $Equi = new  Equipos();

  $Equi->setIdEquipos($Filas['id_equipo']);
  $Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
  $Equi->setIdUbicacion($Filas['Ubicacion']);
  $Equi->setIdEmpresa($Filas['NombreEmpresa']);
  $Equi->setTecnico($Filas['Tecnico']);
  $Equi->setIdEstadoEq($Filas['EstadoEq']);
  $Equi->setIdEstatus($Filas['Estatus']);
  $Equi->setModelo($Filas['Modelo']);
  $Equi->setMarca($Filas['Marca']);
  $Equi->setColor($Filas['Color']);
  $Equi->setTamano($Filas['Tamano']);
  $Equi->setDescipcion($Filas['Descripcionfalla']);
  $Equi->setFechaRegistro($Filas['FechaRegistrado']);
  $Equi->setFechaRecibido($Filas['FechaRecibido']);
  $Equi->setFechaCulminada($Filas['FechaCulminada']);
  $Equi->setNSerial($Filas['NSerial']);
  $Equi->setCodigoFijo($Filas['CodigoFijo']);
  $Equi->setPersonaR($Filas['PersonaR']);

  $Resul[$i]=$Equi;
  $i++;

}
return $Resul;
}

public function getMostrarEquiposTerminado(){
    $Resul = Array();
    $i=0;
    $sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color ,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_estatus=estatus.id_estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE estatus.id_Estatus='4'");

     while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
     
     $Equi = new Equipos();
  $Equi->setIdEquipos($Filas['id_equipo']);
  $Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
  $Equi->setIdUbicacion($Filas['Ubicacion']);
  $Equi->setIdEmpresa($Filas['NombreEmpresa']);
  $Equi->setTecnico($Filas['Tecnico']);
  $Equi->setIdEstadoEq($Filas['EstadoEq']);
  $Equi->setIdEstatus($Filas['Estatus']);
  $Equi->setModelo($Filas['Modelo']);
  $Equi->setMarca($Filas['Marca']);
  $Equi->setColor($Filas['Color']);
  $Equi->setTamano($Filas['Tamano']);
  $Equi->setDescipcion($Filas['Descripcionfalla']);
  $Equi->setFechaRegistro($Filas['FechaRegistrado']);
  $Equi->setFechaRecibido($Filas['FechaRecibido']);
  $Equi->setFechaCulminada($Filas['FechaCulminada']);
  $Equi->setNSerial($Filas['NSerial']);
  $Equi->setCodigoFijo($Filas['CodigoFijo']);
  $Equi->setPersonaR($Filas['PersonaR']);
  
  $Resul[$i]=$Equi;
  $i++;
     

     }
     return $Resul;
}

public function getEquiposDañado(){
    $Resul=Array();
    $i=0;
    $sql=$this->Conexion->query("SELECT equipos.id_equipo,tipo_de_equipo.TipodeEquipos,equipos.Marca,equipos.Modelo,equipos.Color ,equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_estatus=estatus.id_estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE estadoequipos.id_EstadoEq='2'");
    while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
 
   $Equi = new Equipos();

   $Equi->setIdEquipos($Filas['id_equipo']);
   $Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
   $Equi->setIdUbicacion($Filas['Ubicacion']);
   $Equi->setIdEmpresa($Filas['NombreEmpresa']);
   $Equi->setTecnico($Filas['Tecnico']);
   $Equi->setIdEstadoEq($Filas['EstadoEq']);
   $Equi->setIdEstatus($Filas['Estatus']);
   $Equi->setModelo($Filas['Modelo']);
   $Equi->setMarca($Filas['Marca']);
   $Equi->setColor($Filas['Color']);
   $Equi->setTamano($Fila['Tamano']);
   $Equi->setDescipcion($Filas['Descripcionfalla']);
   $Equi->setFechaRegistro($Filas['FechaRegistrado']);
   $Equi->setFechaRecibido($Filas['FechaRecibido']);
   $Equi->setFechaCulminada($Filas['FechaCulminada']);
   $Equi->setNSerial($Filas['NSerial']);
   $Equi->setCodigoFijo($Filas['CodigoFijo']);
   $Equi->setPersonaR($Filas['PersonaR']);

   $Resul[$i]=$Equi;

   $i++;
    }

    return $Resul;
}

public function getEditarEquipos(){
    error_reporting(0);
$id_equipo=$_GET['id_equipo'];
$Resul = Array();
$i=0;
$sql=$this->Conexion->query("SELECT equipos.id_equipo,equipos.Marca,equipos.Modelo,equipos.Color ,  equipos.Descripcionfalla,equipos.FechaRegistrado,equipos.FechaRecibido,equipos.FechaCulminada,equipos.NSerial,equipos.Tamano,equipos.CodigoFijo,equipos.PersonaR,tipo_de_equipo.TipodeEquipos,ubicacion.Ubicacion,estatus.Estatus,estadoequipos.EstadoEq,empresa.NombreEmpresa,empresa.Tecnico FROM equipos INNER JOIN tipo_de_equipo on equipos.id_tipodeequipo=tipo_de_equipo.id_tipodeequipo INNER JOIN ubicacion on equipos.id_ubicacion=ubicacion.id_ubicacion INNER JOIN estatus on equipos.id_Estatus=estatus.id_Estatus INNER JOIN estadoequipos on equipos.id_EstadoEq=estadoequipos.id_EstadoEq INNER JOIN empresa on equipos.id_empresa=empresa.id_empresa WHERE id_equipo='$id_equipo'");

while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

$Equi = new Equipos();

$Equi->setTecnico($Filas['Tecnico']);
$Equi->setIdEquipos($Filas['id_equipo']);
$Equi->setIdTipodeequipos($Filas['TipodeEquipos']);
$Equi->setIdUbicacion($Filas['Ubicacion']);
$Equi->setIdEmpresa($Filas['NombreEmpresa']);
$Equi->setIdEstatus($Filas['Estatus']);
$Equi->setIdEstadoEq($Filas['EstadoEq']);
$Equi->setMarca($Filas['Marca']);
$Equi->setModelo($Filas['Modelo']);
$Equi->setColor($Filas['Color']);
$Equi->setTamano($Filas['Tamano']);
$Equi->setDescipcion($Filas['Descripcionfalla']);
$Equi->setFechaRegistro($Filas['FechaRegistrado']);
$Equi->setFechaRecibido($Filas['FechaRecibido']);
$Equi->setFechaCulminada($Filas['FechaCulminada']);
$Equi->setNSerial($Filas['NSerial']);
$Equi->setCodigoFijo($Filas['CodigoFijo']);
$Equi->setPersonaR($Filas['PersonaR']);

$Resul[$i]=$Equi;

$i++;

}   

return $Resul;
}


public function getMostrarTipodeEquipos(){
$Resul = Array();
$i=0;
$sql=$this->Conexion->query("SELECT * FROM tipo_de_equipo");

while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

$Equi = new TipodeEquipos();

$Equi->setIdtipodeequipo($Filas['id_tipodeequipo']);
$Equi->setTipodeEquipos($Filas['TipodeEquipos']);

$Resul[$i]=$Equi;
$i++;

}
return $Resul;
}

public function getMostrarUbicacion(){
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT * FROM ubicacion");
	while ($Filas=$sql->fetch(PDO::FETCH_ASSOC)) {
     $Equi = new Ubicacion();

     $Equi->setIdUbicacion($Filas['id_ubicacion']);
     $Equi->setUbicacion($Filas['Ubicacion']);
     $Resul[$i]=$Equi;
     $i++;
	}

	return $Resul;
}


public function getMostrarEstatus(){
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT * FROM estatus");
    while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

    $Equi = new Estatus();

    $Equi->setIdEstatus($Filas['id_Estatus']);

    $Equi->setEstatus($Filas['Estatus']);
    
    $Resul[$i]=$Equi;
    
    $i++;
  
    }
   
   return $Resul;


}

public function getMostrarEstadoEq(){
  
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT * FROM estadoequipos");
	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
    
    $Equi = new EstadoEq();

    $Equi->setIdEstadoEq($Filas['id_EstadoEq']);

    $Equi->setEstadoEq($Filas['EstadoEq']);
    
    $Resul[$i]=$Equi;
    $i++;
	}

	return $Resul;
}

}

?>