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
//---------------------Equipos---------------------------------//
$Equi = new Equiposbd($con);

$MostrarEq = $Equi->getMostrarTipodeEquipos();

$MostrarUb = $Equi->getMostrarUbicacion();

$MostrarEqRegistrado = $Equi->getMostrarEquiposRegistrado();

$MostrarEquiposEnEspera = $Equi->getMostrarEquiposEnEspera();

$MostrarEquiposReparando = $Equi->getMostrarEquiposReparando();

$MostrarEquiposTerminado = $Equi->getMostrarEquiposTerminado();

$MostrarEquiposDañado = $Equi->getEquiposDañado();

$Mostrar = $Equi->getMostrarEquipos();

$MostrEd= $Equi->getEditarEquipos();

$MostrarEs = $Equi->getMostrarEstatus();

$MostrarEstEq = $Equi->getMostrarEstadoEq();



//---------------------Usuario---------------------------------//
$Usus = new Usuariobd($con);

$MostrarUsuario = $Usus->getMostrarUsuario();

$MostrarTipoUsuario = $Usus->getMostrarTipodeUsuario();

$MostrarEstado = $Usus->getMostrarEstado();

$MostrarEditadoUsuario = $Usus->getEditarUsuario();

//---------------------Empresa---------------------------------//


?>