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

$Empresa = new Empresabd($con);

$Empre = new Empresa();

$Empre->setIdEmpresa(htmlentities(addslashes($_GET['id_empresa'])));

$Empresa->setBorrarEmpresa($Empre);

header('location:../Vista/EmpresaRegistrada.php');
?>