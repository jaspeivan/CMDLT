<?php
class Empresabd{

 private $Conexion;


public function __construct($Conexion){

	$this->setConexion($Conexion);
}

public function setConexion($Conexion){

	$this->Conexion=$Conexion;
}


public function setIngresarEmpresa(Empresa $Empre){
 
 $sql=$this->Conexion->query("INSERT INTO empresa VALUES (Null,'".$Empre->getNombreEmpresa()."','".$Empre->getRif()."','".$Empre->getDireccion()."','".$Empre->getTelefono()."','".$Empre->getTecnico()."')");

if($sql){

 echo '<script language="javascript">alert("Se Registro con Exito")</script>';
 echo "<script>location.href='../Vista/EmpresaRegistrada.php'</script>";

}else{


 echo '<script language="javascript">alert("No se Pudo Registrar")</script>';
 echo "<script>location.href='../Vista/RegistrarEmpresa.php'</script>";
}

}

public function setActualizarEmpresa(Empresa $Empre){

$sql=$this->Conexion->query("UPDATE empresa SET NombreEmpresa='".$Empre->getNombreEmpresa()."',Rif='".$Empre->getRif()."',Direccion='".$Empre->getTelefono()."',Tecnico='".$Empre->getTecnico()."' where id_empresa='".$Empre->getIdEmpresa()."'");
}
public function setBorrarEmpresa(Empresa $Empre){
$id_empresa=$_GET['id_empresa'];

$sql=$this->Conexion->query("DELETE FROM empresa WHERE id_empresa='".$Empre->getIdEmpresa()."'");

}

public function getMostrarEmpresa(){
	$Resul=Array();
	$i=0;
	
	$sql=$this->Conexion->query("SELECT * FROM empresa");

	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
    
    $Empre = new Empresa();

    $Empre->setIdEmpresa($Filas['id_empresa']);
    $Empre->setNombreEmpresa($Filas['NombreEmpresa']);
    $Empre->setRif($Filas['Rif']);
    $Empre->setDireccion($Filas['Direccion']);
    $Empre->setTelefono($Filas['Telefono']);
    $Empre->setTecnico($Filas['Tecnico']);

    $Resul[$i]=$Empre;

    $i++;

	}

	return $Resul;
 }
 

public function getEditarEmpresa(){
error_reporting(0);
$id_empresa=$_GET['id_empresa'];
$Resul=Array();
$i=0;
$sql=$this->Conexion->query("SELECT * FROM empresa WHERE id_empresa='$id_empresa'");
while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
	 $Empre = new Empresa();

    $Empre->setIdEmpresa($Filas['id_empresa']);
    $Empre->setNombreEmpresa($Filas['NombreEmpresa']);
    $Empre->setRif($Filas['Rif']);
    $Empre->setDireccion($Filas['Direccion']);
    $Empre->setTelefono($Filas['Telefono']);
    $Empre->setTecnico($Filas['Tecnico']);

    $Resul[$i]=$Empre;

    $i++;
}

  return $Resul;

}


}


?>