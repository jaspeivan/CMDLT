<?php

class Factura{

private $id_Factura;
private $id_equipo;
private $id_tipodeequipo;
private $id_ubicacion;
private $id_estatus;
private $id_empresa;
private $NFactura;
private $Fecha;
private $CantidadRespuesta;
private $CostoRepuesto;	
private $MontoTotal;

   /**
     * @return mixed
     */
    public function getIdFactura()
    {
        return $this->id_Factura;
    }

    /**
     * @param mixed $id_Factura
     *
     * @return self
     */
    public function setIdFactura($id_Factura)
    {
        $this->id_Factura = $id_Factura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEquipo()
    {
        return $this->id_equipo;
    }

    /**
     * @param mixed $id_equipo
     *
     * @return self
     */
    public function setIdEquipo($id_equipo)
    {
        $this->id_equipo = $id_equipo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipodeequipo()
    {
        return $this->id_tipodeequipo;
    }

    /**
     * @param mixed $id_tipodeequipo
     *
     * @return self
     */
    public function setIdTipodeequipo($id_tipodeequipo)
    {
        $this->id_tipodeequipo = $id_tipodeequipo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUbicacion()
    {
        return $this->id_ubicacion;
    }

    /**
     * @param mixed $id_ubicacion
     *
     * @return self
     */
    public function setIdUbicacion($id_ubicacion)
    {
        $this->id_ubicacion = $id_ubicacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEstatus()
    {
        return $this->id_estatus;
    }

    /**
     * @param mixed $id_estatus
     *
     * @return self
     */
    public function setIdEstatus($id_estatus)
    {
        $this->id_estatus = $id_estatus;

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
    public function getNFactura()
    {
        return $this->NFactura;
    }

    /**
     * @param mixed $NFactura
     *
     * @return self
     */
    public function setNFactura($NFactura)
    {
        $this->NFactura = $NFactura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     *
     * @return self
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidadRespuesta()
    {
        return $this->CantidadRespuesta;
    }

    /**
     * @param mixed $CantidadRespuesta
     *
     * @return self
     */
    public function setCantidadRespuesta($CantidadRespuesta)
    {
        $this->CantidadRespuesta = $CantidadRespuesta;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostoRepuesto()
    {
        return $this->CostoRepuesto;
    }

    /**
     * @param mixed $CostoRepuesto
     *
     * @return self
     */
    public function setCostoRepuesto($CostoRepuesto)
    {
        $this->CostoRepuesto = $CostoRepuesto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontoTotal()
    {
        return $this->MontoTotal;
    }

    /**
     * @param mixed $MontoTotal
     *
     * @return self
     */
    public function setMontoTotal($MontoTotal)
    {
        $this->MontoTotal = $MontoTotal;

        return $this;
    }
}








?>