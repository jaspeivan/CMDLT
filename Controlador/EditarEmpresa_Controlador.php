<?php
require_once('../Modelo/Equiposbd_Modelo.php');
require_once('../Modelo/Equipos_Modelo.php');
require_once('../Modelo/Ubicacion_Modelo.php');
require_once('../Modelo/Conexion.php');
require_once('../Modelo/Usuario_Modelo.php');
require_once('../Modelo/Usuariobd_Modelo.php');
require_once('../Modelo/TipodeEquipo_Modelo.php');
require_once('../Modelo/Estatus_Modelo.php');
require_once('../Modelo/EstadoEq_Modelo.php');
require_once('../Modelo/Empresabd_Modelo.php');
require_once('../Modelo/Empresa_Modelo.php');

$Empresas = new Empresabd($con);

$Empre = new Empresa();

$Empre->setIdEmpresa(htmlentities(addslashes($_POST['id_empresa'])));
$Empre->setNombreEmpresa(htmlentities(addslashes($_POST['NombreEmpresa'])));
$Empre->setRif(htmlentities(addslashes($_POST['Rif'])));
$Empre->setDireccion(htmlentities(addslashes($_POST['Direccion'])));
$Empre->setTelefono(htmlentities(addslashes($_POST['Telefono'])));
$Empre->setTecnico(htmlentities(addslashes($_POST['Tecnico'])));

$Empresas->setActualizarEmpresa($Empre);


if($Empre){

	echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/EmpresaRegistrada.php'</script>";

}else{

	echo ' <script language="javascript">alert("no se  Actualizo ");</script> ';
echo "<script>location.href='../Vista/EditarEmpresa.php'</script>";
}

?>