<?php

require_once('../Modelo/Usuariobd_Modelo.php');
require_once('../Modelo/Usuario_Modelo.php');
require_once('../Modelo/Conexion.php');
require_once('../Modelo/TipodeUsuario_Modelo.php');
require_once('../Modelo/Estado_Modelo.php');

$Usuario = new Usuariobd($con);

$Usu = new Usuario();

//$Usu->setIdUsuario(htmlentities(addslashes($_POST[''])));
$Usu->setIdTipodeusuario(htmlentities(addslashes($_POST['id_tipodeusuario'])));
$Usu->setIdEstado(htmlentities(addslashes($_POST['id_estado'])));
$Usu->setUsuario(htmlentities(addslashes($_POST['Usuario'])));
$Usu->setNombreyApellido(htmlentities(addslashes($_POST['NombreyApellido'])));
$Usu->setCedula(htmlentities(addslashes($_POST['Cedula'])));
$Usu->setCorreo(htmlentities(addslashes($_POST['Correo'])));
$Usu->setPassmd5(htmlentities(addslashes($_POST['Contraseña'])));
$Usu->setRePassmd5(htmlentities(addslashes($_POST['repContraseña'])));

$Usuario->setIngresarUsuario($Usu);





?>