<?php
//require_once('../Modelo/Empresa_Modelo.php');
class Equipos {

private $id_equipos;
private $id_tipodeequipos;
private $id_Ubicacion;
private $Ubicacion;
private $id_empresa;
private $Tecnico;
private $id_EstadoEq;
private $id_Estatus;
private $Estatus;
private $Marca;
private $Modelo;
private $Color;
private $Tamano;
private $Descipcion;
private $FechaRegistro;
private $FechaRecibido;
private $FechaCulminada;
private $NSerial;
private $CodigoFijo;
private $PersonaR;



    /**
     * @return mixed
     */
    public function getIdEquipos()
    {
        return $this->id_equipos;
    }

    /**
     * @param mixed $id_equipos
     *
     * @return self
     */
    public function setIdEquipos($id_equipos)
    {
        $this->id_equipos = $id_equipos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipodeequipos()
    {
        return $this->id_tipodeequipos;
    }

    /**
     * @param mixed $id_tipodeequipos
     *
     * @return self
     */
    public function setIdTipodeequipos($id_tipodeequipos)
    {
        $this->id_tipodeequipos = $id_tipodeequipos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUbicacion()
    {
        return $this->id_Ubicacion;
    }

    /**
     * @param mixed $id_Ubicacion
     *
     * @return self
     */
    public function setIdUbicacion($id_Ubicacion)
    {
        $this->id_Ubicacion = $id_Ubicacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * @param mixed $id_empresa
     *
     * @return self
     */
    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEstadoEq()
    {
        return $this->id_EstadoEq;
    }

    /**
     * @param mixed $id_EstadoEq
     *
     * @return self
     */
    public function setIdEstadoEq($id_EstadoEq)
    {
        $this->id_EstadoEq = $id_EstadoEq;

        return $this;
    }

   public function setTecnico($Tecnico)
   {

    $this->Tecnico=$Tecnico;

   }

   public function getTecnico(){

    return $this->Tecnico;
    
   }


    /**
     * @return mixed
     */
    public function getIdEstatus()
    {
        return $this->id_Estatus;
    }

    /**
     * @param mixed $id_Estatus
     *
     * @return self
     */
    public function setIdEstatus($id_Estatus)
    {
        $this->id_Estatus = $id_Estatus;

        return $this;
    }
    
   public function getEstatus(){
   
   return $this->Estatus;

   }

   public function setEstatus($Estatus){

    $this->Estatus=$Estatus;

    return $this;

   }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->Marca;
    }

    /**
     * @param mixed $Marca
     *
     * @return self
     */
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @param mixed $Modelo
     *
     * @return self
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     *
     * @return self
     */
    public function setColor($Color)
    {
        $this->Color = $Color;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTamano()
    {
        return $this->Tamaño;
    }

    /**
     * @param mixed $Tamaño
     *
     * @return self
     */
    public function setTamano($Tamaño)
    {
        $this->Tamaño = $Tamaño;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescipcion()
    {
        return $this->Descipcion;
    }

    /**
     * @param mixed $Descipcion
     *
     * @return self
     */
    public function setDescipcion($Descipcion)
    {
        $this->Descipcion = $Descipcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->FechaRegistro;
    }

    /**
     * @param mixed $FechaRegistro
     *
     * @return self
     */
    public function setFechaRegistro($FechaRegistro)
    {
        $this->FechaRegistro = $FechaRegistro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaRecibido()
    {
        return $this->FechaRecibido;
    }

    /**
     * @param mixed $FechaRecibido
     *
     * @return self
     */
    public function setFechaRecibido($FechaRecibido)
    {
        $this->FechaRecibido = $FechaRecibido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaCulminada()
    {
        return $this->FechaCulminada;
    }

    /**
     * @param mixed $FechaCulminada
     *
     * @return self
     */
    public function setFechaCulminada($FechaCulminada)
    {
        $this->FechaCulminada = $FechaCulminada;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNSerial()
    {
        return $this->NSerial;
    }

    /**
     * @param mixed $NSerial
     *
     * @return self
     */
    public function setNSerial($NSerial)
    {
        $this->NSerial = $NSerial;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoFijo()
    {
        return $this->CodigoFijo;
    }

    /**
     * @param mixed $CodigoFijo
     *
     * @return self
     */
    public function setCodigoFijo($CodigoFijo)
    {
        $this->CodigoFijo = $CodigoFijo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonaR()
    {
        return $this->PersonaR;
    }

    /**
     * @param mixed $PersonaR
     *
     * @return self
     */
    public function setPersonaR($PersonaR)
    {
        $this->PersonaR = $PersonaR;

        return $this;
    }

    
}











?>