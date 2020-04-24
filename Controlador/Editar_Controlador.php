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

$Equipos = new Equiposbd($con);

$Equi = new Equipos();

$Equi->setIdEquipos(htmlentities(addslashes($_POST['id_equipo'])));

$Equi->setIdTipodeequipos(htmlentities(addslashes($_POST['id_TipodeEquipos'])));

$Equi->setIdUbicacion(htmlentities(addslashes($_POST['id_Ubicacion'])));

$Equi->setIdEstadoEq(htmlentities(addslashes($_POST['Estado']='0')));

$Equi->setIdEstatus(htmlentities(addslashes($_POST['Estatus'])));

$Equi->setModelo(htmlentities(addslashes($_POST['Modelo'])));

$Equi->setMarca(htmlentities(addslashes($_POST['Marca'])));

$Equi->setColor(htmlentities(addslashes($_POST['Color'])));

$Equi->setTamano(htmlentities(addslashes($_POST['Tamano'])));

$Equi->setDescipcion(htmlentities(addslashes($_POST['Descripcion'])));

$Equi->setFechaRegistro(htmlentities(addslashes($_POST['FechaRegistrado'])));

$Equi->setFechaRecibido(htmlentities(addslashes($_POST['FechaRecibido']='2019/05/01')));

$Equi->setFechaCulminada(htmlentities(addslashes($_POST['FechaCulminada']='2019/05/01')));

$Equi->setCodigoFijo(htmlentities(addslashes($_POST['CodigoFijo'])));

$Equi->setNSerial(htmlentities(addslashes($_POST['NSerial'])));

$Equi->setPersonaR(htmlentities(addslashes($_POST['PersonaR'])));


$Equipos->setActualizarEquipos($Equi);

if($Equi->getIdEstatus()=='1'){

echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/EquiposRegistrado.php'</script>";
    
}elseif($Equi->getIdEstatus()=='2'){


 echo '<script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/EquiposenEspera.php'</script>";



}elseif($Equi->getIdEstatus()=='3'){

 echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/EquiposReparando.php'</script>";


}elseif($Equi->getIdEstatus()=='4'){

 echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/EquiposTerminado.php'</script>";

}elseif($Equi->getIdEstatus()=='5'){


 echo ' <script language="javascript">alert("Se Actualizo Con Exito!!");</script> ';
echo "<script>location.href='../Vista/Equiposfacturar.php'</script>";

}else{
 echo ' <script language="javascript">alert("No se Pudo Actualizar .");</script> ';
echo "<script>location.href='../Vista/EquiposRegistrado.php'</script>";

}

//---------------------------------------------------------------------------------------//

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
echo "<script>location.href='../Vista/UsuarioRegostradp.php'</script>";

}else{
	echo ' <script language="javascript">alert("No se pudo Registrar!!");</script> ';
echo "<script>location.href='../Vista/EditarUsuario.php'</script>";
}
?>