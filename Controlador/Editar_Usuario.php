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

$Usuario = new Usuariobd($con);

$Usu = new Usuario();

$Usu->setIdUsuario(htmlentities(addslashes($_POST['id_usuario'])));
$Usu->setIdTipodeusuario(htmlentities(addslashes($_POST['id_tipodeusuario'])));
$Usu->setIdEstado(htmlentities(addslashes($_POST['id_estado'])));
$Usu->setUsuario(htmlentities(addslashes($_POST['Usuario'])));
$Usu->setNombreyApellido(htmlentities(addslashes($_POST['NombreyApellido'])));
$Usu->setCedula(htmlentities(addslashes($_POST['Cedula'])));
$Usu->setCorreo(htmlentities(addslashes($_POST['Correo'])));
$Usu->setPassmd5(htmlentities(addslashes($_POST['Contraseña'])));
$Usu->setRePassmd5(htmlentities(addslashes($_POST['repContraseña'])));

$Usuario->setActualizarUsuario($Usu);

if($Usu){
	echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/UsuarioRegistrado.php'</script>";

}else{
	echo ' <script language="javascript">alert("No se pudo Registrar!!");</script> ';
echo "<script>location.href='../Vista/EditarUsuario.php'</script>";
}
 ?>