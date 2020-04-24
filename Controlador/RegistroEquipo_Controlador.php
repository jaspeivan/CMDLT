<?php
require_once('../Modelo/Equiposbd_Modelo.php');
require_once('../Modelo/Equipos_Modelo.php');
require_once('../Modelo/Ubicacion_Modelo.php');
require_once('../Modelo/Conexion.php');
require_once('../Modelo/Usuario_Modelo.php');
require_once('../Modelo/Usuariobd_Modelo.php');
require_once('../Modelo/Empresabd_Modelo.php');
require_once('../Modelo/Empresa_Modelo.php');

$Equipos = new Equiposbd($con);

$Equi = new Equipos();

$Equi->setIdTipodeequipos(htmlentities(addslashes($_POST['id_tipodeequipo'])));

$Equi->setIdUbicacion(htmlentities(addslashes($_POST['id_ubicacion'])));

$Equi->setIdEstatus(htmlentities(addslashes($_POST['Estatus']='1')));

$Equi->setIdEstadoEq(htmlentities(addslashes($_POST['EstadoEq']='1')));

//$Equi->setIdEmpresa(htmlentities(addslashes($_POST['id_empresa'])));

$Equi->setModelo(htmlentities(addslashes($_POST['Modelo'])));

$Equi->setMarca(htmlentities(addslashes($_POST['Marca'])));

$Equi->setColor(htmlentities(addslashes($_POST['Color'])));

$Equi->setTamano(htmlentities(addslashes($_POST['Tamaño'])));

//$Equi->setDescipcion(htmlentities(addslashes($_POST['DescripcionFalla'])));

$Equi->setFechaRegistro(htmlentities(addslashes($_POST['FechaRegistro'])));

$Equi->setCodigoFijo(htmlentities(addslashes($_POST['CodigoF'])));

$Equi->setNSerial(htmlentities(addslashes($_POST['Nserial'])));

$Equi->setPersonaR(htmlentities(addslashes($_POST['PersonaR'])));

$Equipos->setIngresarEquipos($Equi);

?>