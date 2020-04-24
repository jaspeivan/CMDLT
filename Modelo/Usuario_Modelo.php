<?php
class Usuario{

private $id_usuario;
private $id_tipodeusuario;
private $id_estado;
private $Usuario;
private $NombreyApellido;
private $Cedula;
private $Correo;
private $Passmd5;
private $RePassmd5;
    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     *
     * @return self
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipodeusuario()
    {
        return $this->id_tipodeusuario;
    }

    /**
     * @param mixed $id_tipodeusuario
     *
     * @return self
     */
    public function setIdTipodeusuario($id_tipodeusuario)
    {
        $this->id_tipodeusuario = $id_tipodeusuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->id_estado;
    }

    /**
     * @param mixed $id_estado
     *
     * @return self
     */
    public function setIdEstado($id_estado)
    {
        $this->id_estado = $id_estado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * @param mixed $Usuario
     *
     * @return self
     */
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreyApellido()
    {
        return $this->NombreyApellido;
    }

    /**
     * @param mixed $NombreyApellido
     *
     * @return self
     */
    public function setNombreyApellido($NombreyApellido)
    {
        $this->NombreyApellido = $NombreyApellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->Cedula;
    }

    /**
     * @param mixed $Cedula
     *
     * @return self
     */
    public function setCedula($Cedula)
    {
        $this->Cedula = $Cedula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->Correo;
    }

    /**
     * @param mixed $Correo
     *
     * @return self
     */
    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;

        return $this;
    }

    public function getPassmd5(){
     
     return $this->Passmd5;

    }

    public function setPassmd5($Passmd5){
     $Passmd5 = md5($Passmd5);
     
     $this->Passmd5 = $Passmd5;

    }

    public function getRePassmd5(){

        return $this->RePassmd5;
    }

    public function setRePassmd5($RePassmd5){
        $RePassmd5 = md5($RePassmd5);

        $this->RePassmd5=$RePassmd5;
    }
   
}






?>