<?php 

class Usuariobd{

 private $Conexion;


public  function __construct($Conexion){

   $this->setConexion($Conexion);

}

public  function setConexion($Conexion){

   $this->Conexion=$Conexion;

}

public  function setLogin(Usuario $Usu){


$sql = "SELECT * FROM login INNER JOIN tipo_usuario on login.id_tipousuario = tipo_usuario.id_tipousuario INNER JOIN estado on login.id_estado=estado.id_estado WHERE login.Usuario='".$Usu->getUsuario()."'" AND login.passworld="'".$Usu->getPassmd5()."'";

    $res = pg_query($this->Conexion,$sql);

    while($Filas = pg_fetch_array($res)){

    if($Passmd5=$Filas['passworld']){
     
     $_SESSION['id']=$Filas['id'];
     $_SESSION['Usuario'] = $Filas['Usuario'];
     $_SESSION['NombreyApellido'] = $Filas['NombreyApellido'];
     $_SESSION['tipodeusuario'] = $Filas['tipodeusuario'];
     $_SESSION['Estado'] = $Filas['Estado'];
     $id = $Filas['id'];
     $Usuario = $Filas['Usuario'];
     $NombreyApellido = $Filas['NombreyApellido'];
     $Estado = $Filas['Estado'];

     setcookie("c_Usuario",$Usuario);
     setcookie("c_NombreyApellido",$NombreyApellido);
     setcookie("c_mensaje",0);

     if($Filas['Estado']=='Desactivado'){
      
      echo '<script language="javascript">alert("su Usuario ha sido Suspendido");></script>';
      echo "<script>location.href='../Vista/Inactivo.php</script>";


     }

    if($Filas['tipodeusuario']=='Administrador'){

        echo '<script language="javascript">alert("Bienvenido  Administrador");></script>';
      echo "<script>location.href='../Vista/Inicio.php</script>";

    }else if($Filas['tipodeusuario']=='Tecnino'){
     
     echo '<script language="javascript">alert("Bienvenido  Técnico");></script>';
      echo "<script>location.href='../Vista/Inicio.php</script>";

    }

    }else{

   echo '<script language="javascript">alert("Contraseña Incorrecta");></script>';
      echo "<script>location.href='../Vista/Index.php</script>";

    }

    }else{

         
         echo '<script language="javascript">alert("Usuario y/o Contraseña Inconrrecta");></script>';
      echo "<script>location.href='../Vista/Index.php</script>";


    }


}

public  function setIngresarUsuario(Usuario $Usu){

$sql=$this->Conexion->query("INSERT INTO usuarios VALUES(Null,'".$Usu->getIdTipodeusuario()."','".$Usu->getIdEstado()."','".$Usu->getUsuario()."','".$Usu->getNombreyApellido()."','".$Usu->getCedula()."','".$Usu->getCorreo()."','".$Usu->getPassmd5()."')");

if($sql){

echo ' <script language="javascript">alert("Se Registrada Con Exito!!.");</script> ';
echo "<script>location.href='../Vista/UsuarioRegistrado.php'</script>";
    
}else{

 echo ' <script language="javascript">alert("No se Pudo Registrar .");</script> ';
echo "<script>location.href='../Vista/RegistroUsuario.php'</script>";

}


}


public  function setActualizarUsuario(Usuario $Usu){

$sql=$this->Conexion->query("UPDATE usuarios set id_tipodeusuario='".$Usu->getIdTipodeusuario()."',id_estado='".$Usu->getIdEstado()."',Usuario='".$Usu->getUsuario()."',NombreyApellido='".$Usu->getNombreyApellido()."',Cedula='".$Usu->getCedula()."',Correo='".$Usu->getCorreo()."',passworld='".$Usu->getPassmd5()."'");
}
public  function setEliminarUsuario(Usuario $Usu){

$id_usuario=$_GET['id_usuario'];

$sql=$this->Conexion->query("DELETE  FROM usuarios  WHERE id_usuario='".$Usu->getIdUsuario()."'");

}
public  function getMostrarUsuario(){
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT usuarios.id_usuario,usuarios.Usuario,usuarios.NombreyApellido,usuarios.Cedula,usuarios.Correo,usuarios.passworld,tipo_usuario.TipodeUsuario,estado.Estado FROM usuarios INNER JOIN tipo_usuario on usuarios.id_tipodeusuario=tipo_usuario.id_tipodeusuario INNER JOIN estado on usuarios.id_estado=estado.id_estado");

	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

    $Usu = new Usuario;
    
    $Usu->setIdUsuario($Filas['id_usuario']);
    $Usu->setIdTipodeusuario($Filas['TipodeUsuario']);
    $Usu->setIdEstado($Filas['Estado']);
    $Usu->setUsuario($Filas['Usuario']);
    $Usu->setNombreyApellido($Filas['NombreyApellido']);
    $Usu->setCedula($Filas['Cedula']);
    $Usu->setCorreo($Filas['Correo']);
    $Usu->setPassmd5($Filas['passworld']);

    $Resul[$i]=$Usu;
    
    $i++;
	
	}
	
	return $Resul;
}

public function getEditarUsuario(){

	$id_usuario=$_GET['id_usuario'];

	$Resul=Array();
	
    $i=0;
	
    $sql=$this->Conexion->query("SELECT usuarios.id_usuario,usuarios.Usuario,usuarios.NombreyApellido,usuarios.Cedula,usuarios.Correo,usuarios.passworld,tipo_usuario.TipodeUsuario,estado.Estado FROM usuarios INNER JOIN tipo_usuario on usuarios.id_tipodeusuario=tipo_usuario.id_tipodeusuario INNER JOIN estado on usuarios.id_estado=estado.id_estado WHERE id_usuario='$id_usuario'");

	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){

    $Usu = new Usuario();
    
    $Usu->setIdUsuario($Filas['id_usuario']);
    $Usu->setIdTipodeusuario($Filas['TipodeUsuario']);
    $Usu->setIdEstado($Filas['Estado']);
    $Usu->setUsuario($Filas['Usuario']);
    $Usu->setNombreyApellido($Filas['NombreyApellido']);
    $Usu->setCedula($Filas['Cedula']);
    $Usu->setCorreo($Filas['Correo']);
    $Usu->setPassmd5($Filas['passworld']);
    $Resul[$i]=$Usu;
    
    $i++;
	
	}
	
	return $Resul;
}


public function getMostrarTipodeUsuario(){
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT * FROM tipo_usuario");
	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
 
    $TipU = new TipodeUsuario();

    $TipU->setIdTipodeusuario($Filas['id_tipodeusuario']);
    $TipU->setTipodeUsuario($Filas['TipodeUsuario']);

    $Resul[$i]=$TipU;
    $i++;

	}

	return $Resul;
}

public function getMostrarEstado(){
	$Resul=Array();
	$i=0;
	$sql=$this->Conexion->query("SELECT * FROM estado");
	while($Filas=$sql->fetch(PDO::FETCH_ASSOC)){
 
    $TipU = new Estado();

    $TipU->setIdEstado($Filas['id_estado']);
    $TipU->setEstado($Filas['Estado']);

    $Resul[$i]=$TipU;
    $i++;

	}

	return $Resul;

}

}


 ?>