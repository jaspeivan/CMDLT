<?php
require_once('../Modelo/TipodeEquipo_Modelo.php');
require_once('../Modelo/Equiposbd_Modelo.php');
require_once('../Modelo/Equipos_Modelo.php');
require_once('../Modelo/Conexion.php');
require_once('../Modelo/Ubicacion_Modelo.php');
require_once('../Modelo/Usuariobd_Modelo.php');
require_once('../Modelo/Usuario_Modelo.php');
require_once('../Modelo/TipodeUsuario_Modelo.php');
require_once('../Modelo/Estado_Modelo.php');
require_once('../Modelo/Estatus_Modelo.php');
require_once('../Modelo/EstadoEq_Modelo.php');
require_once('../Modelo/Empresa_Modelo.php');
require_once('../Modelo/Empresabd_Modelo.php');
require_once('../Modelo/Estatus_Modelo.php');

$Empresa = new Empresabd($con);

$Empre = new Empresa();

$Empre->setNombreEmpresa(htmlentities(addslashes($_POST['NombreE'])));
$Empre->setRif(htmlentities(addslashes($_POST['Rif'])));
$Empre->setDireccion(htmlentities(addslashes($_POST['Direccion'])));
$Empre->setTelefono(htmlentities(addslashes($_POST['Telefono'])));
$Empre->setTecnico(htmlentities(addslashes($_POST['Tecnico'])));

$Empresa->setIngresarEmpresa($Empre);

?>