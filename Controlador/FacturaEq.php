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

$Factura = new Facturabd($con);

$Fac = new Factura();

$Fac->setIdTipodeequipos(htmlentities(addslashes($_POST['id_tipodeequipo'])));

$Fac->setIdUbicacion(htmlentities(addslashes($_POST['id_ubicacion'])));

$Fac->setIdEstatus(htmlentities(addslashes($_POST['Estatus']='1')));

$Fac->setIdEstadoEq(htmlentities(addslashes($_POST['EstadoEq']='1')));

//$Fac->setIdEmpresa(htmlentities(addslashes($_POST['id_empresa'])));

$Fac->setModelo(htmlentities(addslashes($_POST['Modelo'])));

$Fac->setMarca(htmlentities(addslashes($_POST['Marca'])));

$Fac->setColor(htmlentities(addslashes($_POST['Color'])));

$Fac->setTamano(htmlentities(addslashes($_POST['Tamaño'])));

//$Fac->setDescipcion(htmlentities(addslashes($_POST['DescripcionFalla'])));

$Fac->setFechaRegistro(htmlentities(addslashes($_POST['FechaRegistro'])));

$Fac->setCodigoFijo(htmlentities(addslashes($_POST['CodigoF'])));

$Fac->setNSerial(htmlentities(addslashes($_POST['Nserial'])));

$Fac->setPersonaR(htmlentities(addslashes($_POST['PersonaR'])));

$Factura->setIngresarFactura($Fac);

 ?>