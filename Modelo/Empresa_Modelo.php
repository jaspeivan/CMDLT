<?php

class Empresa{

private $id_empresa;
private $NombreEmpresa;
private $Rif;
private $Direccion;
private $Telefono;
private $Tecnico;

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
    public function getNombreEmpresa()
    {
        return $this->NombreEmpresa;
    }

    /**
     * @param mixed $NombreEmpresa
     *
     * @return self
     */
    public function setNombreEmpresa($NombreEmpresa)
    {
        $this->NombreEmpresa = $NombreEmpresa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRif()
    {
        return $this->Rif;
    }

    /**
     * @param mixed $Rif
     *
     * @return self
     */
    public function setRif($Rif)
    {
        $this->Rif = $Rif;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     *
     * @return self
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     *
     * @return self
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTecnico()
    {
        return $this->Tecnico;
    }

    /**
     * @param mixed $Tecnico
     *
     * @return self
     */
    public function setTecnico($Tecnico)
    {
        $this->Tecnico = $Tecnico;

        return $this;
    }



}




















?>