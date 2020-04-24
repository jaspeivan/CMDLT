<?php

class Ubicacion{

private $id_ubicacion;
private $Codigo;
private $Ubicacion;

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
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * @param mixed $Codigo
     *
     * @return self
     */
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    /**
     * @return mixed
     */
public function getUbicacion()
    {
        return $this->Ubicacion;
    }

    /**
     * @param mixed $Ubicacion
     *
     * @return self
     */
    public function setUbicacion($Ubicacion)
    {
        $this->Ubicacion = $Ubicacion;

        return $this;
    }
}






?>